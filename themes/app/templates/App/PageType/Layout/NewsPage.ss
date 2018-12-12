<% include PageHeader %>
<div class="container">
    <div class="row">
        <div class="typography col-lg-8">
            <p>$Created.Format(dd) $Created.Month $Created.Year<p>
            <p class="lead summary">$Summary</p>
            <% if $FeatureImage && $IsDisplayed %>
                <picture>
                    <source srcset="$FeatureImage.Fill(1920,1080).URL()" media="(min-width: 992px)" />
                    <img src="$FeatureImage.Fill(800,600).URL()" alt="Feature Image" />
                </picture>
            <% end_if %>
            $Content
        </div>
        <div class="offset-xl-1 col-xl-3 col-lg-4 col-sm-12">
            <div class="fluid-container">
                <div class="row">
                    <div class="news__base-alerts col-lg-12 col-md-6 d-flex">
                        <% include Tags %>
                    </div>
                    <div class="news__base-alerts col-lg-12 col-md-6 d-flex">
                        <% include Alert %>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
