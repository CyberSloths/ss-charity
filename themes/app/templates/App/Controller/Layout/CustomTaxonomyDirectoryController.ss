<h1>News Listing Page</h1>

<h2>Results for '$Title'</h2>

<ul>
<% loop $Pages %>
    <li><a href="$Link">$Title</a></li>
<% end_loop %>
</ul>