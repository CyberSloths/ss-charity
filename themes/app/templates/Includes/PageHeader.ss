<div class="page-header">
    <div class="container">
        <% if $SearchPageTitle %>
            <div class="row">
                <div class="col-lg-8">
                    <p class="breadcrumb__parents">
                        <a href="$BaseURL">Home</a>
                        <span class="breadcrumb__arrow">&rsaquo;</span>
                    </p>
                    <h1 class="breadcrumb__child">$SearchPageTitle</h1>
                    <form class="input-group search-page__search" action="$absoluteBaseURL\search/SearchForm" method="GET">
                        <input type="text" class="form-control" placeholder="Search" name="q" aria-label="Search" aria-describedby="search-page-search">
                        <div class="input-group-append">
                            <button id="search-page-search" class="btn search-page__search-button" type="submit" aria-label="Search button">
                                <img class="search-page__search-logo" src="$ThemeDir/dist/images/search-grey.svg" alt="Search Icon (Grey)"/>
                            </button>
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
            <h1 class="breadcrumb__child">$NewsTitle</h1>
            <% if $ClassName == "App\PageType\LandingPage" %>
                        $Summary
                    </div>
                </div>
            <% end_if %>
        <% end_if %>
    </div>
</div>
