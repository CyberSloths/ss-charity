<div class="staff">
    <div class="staff__photo">
        $StaffPhoto.Fit(150,150)
    </div>
    <div class="staff__info">
        <div class="staff__title">
            <% if $PrevStaff %>
                <a href="$PrevStaff.Link"><h3>Previous</h3></a>
            <% end_if %>
            <h3>$StaffName</h3>
            <% if $NextStaff %>
                <a href="$NextStaff.Link"><h3>Next</h3></a>
            <% end_if %>
        </div>
        <p>$StaffDesc</p>
    </div>
</div>
