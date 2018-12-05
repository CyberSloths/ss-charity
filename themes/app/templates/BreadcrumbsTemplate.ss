<% if $Pages %>
    <p class="breadcrumb__parents">
        <a href="/">Home</a>
        <% loop $Pages %>
            $Up.Delimiter.RAW
            <% if not $Last %>
                <a href="$Link">$MenuTitle.XML</a>
            <% end_if %>
        <% end_loop %>
    </p>
    <h1 class="breadcrumb__child">$MenuTitle.XML</h1>
<% end_if %>
