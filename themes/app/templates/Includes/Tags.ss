<tag-box>
    <% if $ClassName != "App\PageType\NewsPage" %>
        <h2>Years</h2>
        <a id="tag-all" class="tag-box__link btn" href='$BaseHref\news-and-events/' role="button"><p>All</p></a>
        <% loop $Dates %>
            <a id="tag-$ID" class="tag-box__link btn" href='$BaseHref\news-and-events/showTags/$ID' role="button">
                <p>$Name</p>
            </a>
        <% end_loop %>
    <% end_if %>
    <h2>Tags</h2>
    <% if $Terms%>
        <% if $ClassName != "App\PageType\NewsPage" %>
            <a id="tag-all" class="tag-box__link btn" href='$BaseHref\news-and-events/' role="button"><p>All</p></a>
        <% end_if %>
        <% loop $Terms %>
            <a id="tag-$ID" class="tag-box__link btn" href='$BaseHref\news-and-events/showTags/$ID' role="button">
                <p>$Name</p>
            </a>
        <% end_loop %>
    <% else %>
        <p>No associated tags.</p>
    <% end_if %>
</tag-box>
