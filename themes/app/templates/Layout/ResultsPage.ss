<% include PageHeader %>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <% if $SearchResult.Matches %>
                <h2 class="results-page__main-heading">Results for &quot;{$Query}&quot;</h2>
                <p class="results-page__result-text">
                    Displaying {$SearchResult.Matches.FirstItem} - {$SearchResult.Matches.LastItem} of {$SearchResult.Matches.TotalItems}
                </p>
                <% loop $SearchResult.Matches %>
                    <a href="$Link"><h3 class="results-page__result-heading">$Title</h3></a>
                    <p class="results-page__result-text">$Content.Summary.LimitWordCount(30)</p>
                <% end_loop %>
                <% with $SearchResult.Matches %>
                    <% include Pagination %>
                <% end_with %>
            <% else %>
                <p>Sorry, your search query did not return any results.</p>
            <% end_if %>
        </div>
        <div class="results-page__alert offset-xl-1 col-xl-3 col-lg-4">
            <% include Alert %>
        </div>
    </div>
</div>
