<% if $Pages %>
    <p class="breadcrumb__parents">
        <a href="$baseURL">Home</a>
        <% loop $Pages %>
            <span class="breadcrumb__arrow">&rsaquo;</span>
            <% if not $Last %>
                <a href="$Link">$MenuTitle.XML</a>
            <% end_if %>
        <% end_loop %>
    </p>
    <% if $ClassName != "App\PageType\TaxonomyDirectory" %>
        <h1 class="breadcrumb__child">$MenuTitle.XML</h1>
    <% end_if %>
<% end_if %>
