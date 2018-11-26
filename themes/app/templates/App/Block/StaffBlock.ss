<% loop $StaffProfiles %>
    <div class="staff">
        <div class="staff__photo">
            <a href="$Link">$StaffPhoto.Fit(150,150)</a>
        </div>
        <div class="staff__info">
            <h3><a href="$Link">$StaffName</a></h3>
            <p>$StaffDesc.LimitWordCount(50)</p>
        </div>
    </div>
<% end_loop %>
