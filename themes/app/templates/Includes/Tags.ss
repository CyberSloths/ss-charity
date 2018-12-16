<div class="alert-box">
    <h2>Years</h2>
    <a class="alert-box__tags btn" href='$BaseHref\news-and-events/' role="button"><p>All</p></a>
    <% loop $Dates %>
        <a class="alert-box__tags btn" href='$BaseHref\news-and-events/showTags/$ID' role="button"><p>$Name</p></a>
    <% end_loop %>
    <h2>Tags</h2>
    <a class="alert-box__tags btn" href='$BaseHref\news-and-events/' role="button"><p>All</p></a>
    <% loop $Terms %>
        <a class="alert-box__tags btn" href='$BaseHref\news-and-events/showTags/$ID' role="button"><p>$Name</p></a>
    <% end_loop %>
</div>
