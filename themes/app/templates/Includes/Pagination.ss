<% if $MoreThanOnePage %>
    <div class="d-flex py-4">
        <p class="pagination__text">
            <a class="pagination__link <% if not $NotFirstPage %>disabled<% end_if %>" href="$BaseHref$PrevLink">
                &larr;
            </a>
        </p>
        <% loop $PaginationSummary %>
            <% if $CurrentBool %>
                <p class="pagination__text pagination__pagenum">
                    <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">$PageNum</a>
                </p>
            <% else %>
                <% if $PageNum %>
                    <p class="pagination__text pagination__pagenum">
                        <a class="pagination__link" href="$BaseHref$Link" title="View page {$PageNum}">$PageNum</a>
                    </p>
                <% else %>
                    <p class="pagination__text">
                        &hellip;
                    </p>
                <% end_if %>
            <% end_if %>
        <% end_loop %>
        <p class="pagination__text">
            <a class="pagination__link <% if not $NotLastPage %>disabled<% end_if %>" href="$BaseHref$NextLink">
                &rarr;
            </a>
        </p>
    </div>
<% end_if %>
