<% include PageHeader %>
<div class="container">
    <div class="row">
        <div class="offset-lg-2 col-lg-8">
            <% loop $Children %>
                <div class="page-preview">
                    <% if $FeatureImage %>
                        <div class="typography page-preview_image">
                            <img src="$FeatureImage.Fill(800,600).URL()" alt="Feature Image" />
                        </div>
                    <% end_if %>
                    <div class="<% if $FeatureImage %>page-preview_text<% end_if %>">
                        <p><a href="$Link">$MenuTitle</a> &rsaquo;</p>
                        <p class="summary">$Summary</p>
                    </div>
                </div>
            <% end_loop %>
            <% include Alert %>
        </div>
    </div>
</div>
