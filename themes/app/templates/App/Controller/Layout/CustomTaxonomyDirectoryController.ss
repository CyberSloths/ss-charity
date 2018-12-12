<h1>News Listing Page</h1>

<% if $Title != ''%>
    <h2>Results for '$Title'</h2>
<% end_if %>

<ul>
<% loop $Pages %>
    <li><a href="$Link">$Title</a></li>
<% end_loop %>
</ul>
