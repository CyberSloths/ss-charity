<% include PageHeader %>
<div class="container py-3">
    <div class="row">
        <div class="col-lg-8">
            <% if $SearchResult.Matches %>
                <h2>Results for &quot;{$Query}&quot;</h2>
                <p>Displaying {$SearchResult.Matches.FirstItem} - {$SearchResult.Matches.LastItem} of {$SearchResult.Matches.TotalItems}</p>
                <% loop $SearchResult.Matches %>
                    <a href="$Link"><h3>$Title</h3></a>
                    <p>$Content.Plain.LimitWordCount(30)</p>
                <% end_loop %>
                <% with $SearchResult.Matches %>
                    <% include Pagination %>
                <% end_with %>
            <% else %>
                <p>Sorry, your search query did not return any results.</p>
            <% end_if %>
        </div>
        <div class="offset-xl-1 col-xl-3 col-lg-4">
            <% include Alert %>
        </div>
    </div>
</div>
