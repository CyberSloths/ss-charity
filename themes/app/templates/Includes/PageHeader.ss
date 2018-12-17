<div class="page-header">
    <div class="container">
        <% if $SearchPageTitle %>
            <div class="row">
                <div class="col-lg-8">
                    <p class="breadcrumb__parents">
                        <a href="$BaseURL">Home</a>
                        &rsaquo;
                    </p>
                    <h1 class="breadcrumb__child">$SearchPageTitle</h1>
                    <form class="input-group" action="$absoluteBaseURL\search/SearchForm" method="GET">
                        <input type="text" class="form-control" placeholder="Search..." name="q" aria-label="Search" aria-describedby="search-page-search">
                        <div class="input-group-append">
                            <button id="search-page-search" class="btn btn-outline-secondary" type="submit" aria-label="Search button">&#x1F50D;</button>
                        </div>
                    </form>
                </div>
            </div>
        <% else %>
            <% if $ClassName == "App\PageType\LandingPage" %>
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
            <% end_if %>
            $Breadcrumbs
            <% if $ClassName == "App\PageType\LandingPage" %>
                        $Summary
                    </div>
                </div>
            <% end_if %>
        <% end_if %>
    </div>
</div>
