<% if $MoreThanOnePage %>
    <div class="d-flex flex-row flex-wrap align-items-center pagination">
        <a class="pagination__link <% if not $NotFirstPage %>disabled<% end_if %>" href="$BaseHref$PrevLink">
            <img class="pagination__prev"
                src="<% if not $NotFirstPage %>$ThemeDir/dist/images/arrow-sand.svg<% else %>$ThemeDir/dist/images/arrow.svg<% end_if %>"
                alt="Previous Page"/>
        </a>
        <div class="pagination__mobile">
            <% loop $PaginationSummary(1) %>
                <% if $CurrentBool %>
                    <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">
                        <p class="pagination__text pagination__pagenum current">
                            $PageNum
                        </p>
                    </a>
                <% else %>
                    <% if $PageNum %>
                        <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">
                            <p class="pagination__text pagination__pagenum">
                                $PageNum
                            </p>
                        </a>
                    <% else %>
                        <p class="pagination__text pagination__dots">
                            &hellip;
                        </p>
                    <% end_if %>
                <% end_if %>
            <% end_loop %>
        </div>
        <div class="pagination__phablet">
            <% loop $PaginationSummary(2) %>
                <% if $CurrentBool %>
                    <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">
                        <p class="pagination__text pagination__pagenum current">
                            $PageNum
                        </p>
                    </a>
                <% else %>
                    <% if $PageNum %>
                        <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">
                            <p class="pagination__text pagination__pagenum">
                                $PageNum
                            </p>
                        </a>
                    <% else %>
                        <p class="pagination__text pagination__dots">
                            &hellip;
                        </p>
                    <% end_if %>
                <% end_if %>
            <% end_loop %>
        </div>
        <a class="pagination__link <% if not $NotLastPage %>disabled<% end_if %>" href="$BaseHref$NextLink">
            <img class="pagination__next"
                src="<% if not $NotLastPage %>$ThemeDir/dist/images/arrow-sand.svg<% else %>$ThemeDir/dist/images/arrow.svg<% end_if %>"
                alt="Next Page"/>
        </a>
    </div>
<% end_if %>
