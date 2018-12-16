<% loop $PaginatedPages %>
        <a href="$Link"><h2>$Title</h2></a>
        <p>$Created.Format(dd) $Created.Month $Created.Year<p>
        <p class="typography lead summary">$Summary</p>
    <% end_loop %>
</ul>
<% if $PaginatedPages.MoreThanOnePage %>
    <% if $PaginatedPages.NotFirstPage %>
        <a class="prev" href="$BaseHref$PaginatedPages.PrevLink"><</a>
    <% end_if %>
    <% loop $PaginatedPages.Pages %>
        <% if $CurrentBool %>
            $PageNum
        <% else %>
            <% if $Link %>
                <a href="$BaseHref$Link">$PageNum</a>
            <% else %>
                ...
            <% end_if %>
        <% end_if %>
    <% end_loop %>
    <% if $PaginatedPages.NotLastPage %>
        <a class="next" href="$BaseHref$PaginatedPages.NextLink">></a>
    <% end_if %>
<% end_if %>
