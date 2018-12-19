<% include PageHeader %>
<div class="container">
    <div class="row">
        <% if $Form %>
            <div class="admin-page col-md-8 col-lg-6">
                $Content
                $Form
            </div>
        <% else %>
            <div class="content-page col-lg-8">
                <div class="typography">
                    <p class="summary">$Summary</p>
                    <% if $FeatureImage && $IsDisplayed %>
                        <picture>
                            <source srcset="$FeatureImage.Fill(1920,1080).URL()" media="(min-width: 992px)" />
                            <img src="$FeatureImage.Fill(800,600).URL()" alt="Feature Image" />
                        </picture>
                    <% end_if %>
                    <div class="content-page__content">
                        $Content
                    </div>
                </div>
            </div>
            <div class="content-page__alert offset-xl-1 col-xl-3 col-lg-4">
                <% include Alert %>
            </div>
        <% end_if %>
    </div>
</div>
