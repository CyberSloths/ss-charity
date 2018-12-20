<% include PageHeader %>
<div class="container">
    <div class="row">
        <div class="offset-lg-2 col-lg-8">
            <% loop $Children %>
                <div class="page-preview">
                    <% if $FeatureImage %>
                        <div class="typography page-preview__image">
                            <img src="$FeatureImage.Fill(800,600).URL()" alt="Feature Image" />
                        </div>
                    <% end_if %>
                    <div class="<% if $FeatureImage %>page-preview__text<% end_if %>">
                        <a class="page-preview__link" href="$Link">
                            <h2 class="page-preview__header">$MenuTitle</h2>
                        </a>
                        <p>$Summary</p>
                    </div>
                </div>
            <% end_loop %>
            <div class="page-preview__alert">
                <% include Alert %>
            </div>
        </div>
    </div>
</div>
