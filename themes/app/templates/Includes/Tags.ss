<div class="alert-box">
    <% if $ClassName != "App\PageType\NewsPage" %>
        <h2>Years</h2>
        <a class="alert-box__tags btn" href='$BaseHref\news-and-events/' role="button"><p>All</p></a>
        <% loop $Dates %>
            <a class="alert-box__tags btn" href='$BaseHref\news-and-events/showTags/$ID' role="button"><p>$Name</p></a>
        <% end_loop %>
    <% end_if %>
    <h2>Tags</h2>
    <% if $Terms%>
        <% if $ClassName != "App\PageType\NewsPage" %>
            <a class="alert-box__tags btn" href='$BaseHref\news-and-events/' role="button"><p>All</p></a>
        <% end_if %>
        <% loop $Terms %>
            <a class="alert-box__tags btn" href='$BaseHref\news-and-events/showTags/$ID' role="button"><p>$Name</p></a>
        <% end_loop %>
    <% else %>
        <p>No associated tags.</p>
    <% end_if %>
</div>
