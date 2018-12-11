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
        <div class="offset-xl-1 col-xl-3 col-lg-4">
            <% include Tags %>
            <% include Alert %>
        </div>
    </div>
</div>
