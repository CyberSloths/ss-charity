<div class="alert-box">
    <h2>Tags</h2>
    <% loop $Terms %>
        <a class="btn" href='$BaseHref\news-and-events/showTags/$ID' role="button"><p>$Name</p></a>
    <% end_loop %>
</div>
