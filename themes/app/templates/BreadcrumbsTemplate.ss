<% if $Pages %>
    <div class="breadcrumb">
        <div class="container">
            <p class="breadcrumb__parents">
                <a href="$BaseURL">Home</a>
                <% loop $Pages %>
                    $Up.Delimiter.RAW
                    <% if not $Last %>
                        <a href="$Link">$MenuTitle.XML</a>
                    <% end_if %>
                <% end_loop %>
            </p>
            <h1 class="breadcrumb__child">$MenuTitle.XML</h1>
        </div>
    </div>
<% end_if %>
