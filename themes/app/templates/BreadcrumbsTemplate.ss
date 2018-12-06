<% if $Pages %>
    <p class="breadcrumb__parents">
        <a href="$BaseURL">Home</a>
        <% loop $Pages %>
            &rsaquo;
            <% if not $Last %>
                <a href="$Link">$MenuTitle.XML</a>
            <% end_if %>
        <% end_loop %>
    </p>
    <h1 class="breadcrumb__child">$MenuTitle.XML</h1>
<% end_if %>
