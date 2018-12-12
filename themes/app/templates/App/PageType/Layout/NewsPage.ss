<% include PageHeader %>
<div class="container">
    <div class="row">
        <div class="typography col-lg-8">
            <p>$Created.Format(dd) $Created.Month $Created.Year<p>
            <p class="lead summary">$Summary</p>
            <% if $FeatureImage && $IsDisplayed %>
                $FeatureImage
            <% end_if %>
            $Content
        </div>
        <div class="offset-xl-1 col-xl-3 col-lg-4 col-sm-12">
            <div class="fluid-container">
                <div class="row">
                    <div class="news__base-alerts col-lg-12 col-md-6 col-12 d-flex">
                        <% include Tags %>
                    </div>
                    <div class="news__base-alerts col-lg-12 col-md-6 col-12 d-flex">
                        <% include Alert %>
                    </div>
                <div class="row">
            </div
        </div>
    </div>
</div>
