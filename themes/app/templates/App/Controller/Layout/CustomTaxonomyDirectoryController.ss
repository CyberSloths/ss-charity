<% include PageHeader %>
<div class="container">
    <div class="row">
        <div class="typography col-lg-8">
            <p>Displaying
            <% if $PaginatedPages.TotalItems > 9 %>
                <% loop $PaginatedPages.Pages %>
                    <% if $CurrentBool %>
                        $Top.createPageRange($PageNum, $Top.PaginatedPages.TotalItems)
                    <% end_if %>
                <% end_loop %>of $PaginatedPages.TotalItems</p>
                <% if $Title == 'News and Events' %>
                <% else_if $Title %>
                    <h2>Results for '$Title'</h2>
                <% end_if %>
            <% else %>
                1-$PaginatedPages.TotalItems of $PaginatedPages.TotalItems </p>
            <% end_if %>
            <% include PaginatedList %>
        </div>
        <div class="offset-xl-1 col-xl-3 col-lg-4 col-sm-12">
            <div class="fluid-container">
                <div class="row">
                    <div class="news__base-alerts col-lg-12 col-md-8 d-flex">
                        <% include Tags %>
                    </div>
                    <div class="news__base-alerts col-lg-12 col-md-4 d-flex">
                        <% include Alert %>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


