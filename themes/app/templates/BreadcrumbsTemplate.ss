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
    <% if $ClassName != SilverStripe\CMS\Model\SiteTree %>
        <h1 class="breadcrumb__child">$MenuTitle.XML</h1>
    <% else %>
        <h1 class="breadcrumb__child">Results for </h1>
    <% end_if %>
<% end_if %>
