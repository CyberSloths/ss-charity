<% if $MoreThanOnePage %>
    <div class="d-flex flex-row align-items-center pagination">
        <a class="pagination__link <% if not $NotFirstPage %>disabled<% end_if %>" href="$BaseHref$PrevLink">
            <img class="pagination__prev"
                src="<% if not $NotFirstPage %>$ThemeDir/dist/images/arrow-sand.svg<% else %>$ThemeDir/dist/images/arrow.svg<% end_if %>"
                alt="Previous Page"/>
        </a>
        <% loop $PaginationSummary %>
            <% if $CurrentBool %>
                <p class="pagination__text pagination__pagenum">
                    <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">$PageNum</a>
                </p>
            <% else %>
                <% if $PageNum %>
                    <p class="pagination__text <% if $isCurrent %>pagination__pagenum<% end_if %>">
                        <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">$PageNum</a>
                    </p>
                <% else %>
                    <p class="pagination__text">
                        &hellip;
                    </p>
                <% end_if %>
            <% end_if %>
        <% end_loop %>
        <a class="pagination__link <% if not $NotLastPage %>disabled<% end_if %>" href="$BaseHref$NextLink">
            <img class="pagination__next"
                src="<% if not $NotLastPage %>$ThemeDir/dist/images/arrow-sand.svg<% else %>$ThemeDir/dist/images/arrow.svg<% end_if %>"
                alt="Next Page"/>
        </a>
    </div>
<% end_if %>
