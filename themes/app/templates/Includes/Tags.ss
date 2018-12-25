<tag-box>
    <% if $ClassName != "App\PageType\NewsPage" %>
        <h2 class="tag-box__years">Years</h2>
        <a id="tag-all-years" class="tag-box__link btn" href='$baseURL\news-and-events/' role="button">
            <p>All</p>
        </a>
        <% loop $Dates %>
            <a id="tag-$ID" class="tag-box__link tag-box__news btn" href='$baseURL\news-and-events/showTags/$ID' role="button">
                <p>$Name</p>
            </a>
        <% end_loop %>
    <% end_if %>
    <% if $ClassName != "App\PageType\NewsPage" %>
        <h2 class="tag-box__tags">Tags</h2>
    <% else %>
        <h2 class="tag-box__tags-news">Tags</h2>
    <% end_if %>
    <% if $Terms%>
        <% if $ClassName != "App\PageType\NewsPage" %>
            <a id="tag-all-terms" class="tag-box__link btn" href='$baseURL\news-and-events/' role="button">
                <p>All</p>
            </a>
        <% end_if %>
        <% loop $Terms %>
            <a id="tag-$ID" class="tag-box__link tag-box__news btn" href='$baseURL\news-and-events/showTags/$ID' role="button">
                <p>$Name</p>
            </a>
        <% end_loop %>
    <% else %>
        <p>No associated tags.</p>
    <% end_if %>
</tag-box>
