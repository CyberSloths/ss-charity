<% include PageHeader %>
<div class="container">
    <div class="row">
        <div class="typography col-lg-8">
            <% if $FeatureImage && $IsDisplayed %>
                <picture>
                    <source srcset="$FeatureImage.Fill(1920,1080).URL()" media="(min-width: 992px)" />
                    <img src="$FeatureImage.Fill(800,600).URL()" alt="Feature Image" />
                </picture>
            <% end_if %>
            $Content
        </div>
        <div class="offset-xl-1 col-xl-3 col-lg-4">
            <% include Alert %>
        </div>
    </div>
    $Form
</div>
