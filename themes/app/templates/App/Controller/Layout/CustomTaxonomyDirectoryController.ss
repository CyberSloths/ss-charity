<% include PageHeader NewsTitle=$NewsTitle %>
<div class="container">
    <div class="row">
        <div class="typography col-lg-8">
            <p class="results__count">Displaying {$PaginatedPages.FirstItem} - {$PaginatedPages.LastItem} of {$PaginatedPages.TotalItems}</p>
            <% if $ClassName == SilverStripe\CMS\Model\SiteTree && $Title != '' %>
                <p>$checkTitle($Title)</p>
            <% end_if %>
            <% loop $PaginatedPages %>
                <a class="news-listing__link" href="$Link"><h2 class="news-listing__title">$Title</h2></a>
                <p>$Created.Format(dd) $Created.Month $Created.Year</p>
                <p class="typography summary">$Summary</p>
            <% end_loop %>
            <% with $PaginatedPages %>
                    <% include Pagination %>
            <% end_with %>
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


