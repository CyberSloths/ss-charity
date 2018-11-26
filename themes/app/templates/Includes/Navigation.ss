<nav class="topbar">
    <ul class="primary">
        <%--
            $Menu gets the navbar items, and the parameter provided states which level of items to get
            i.e. 1 would get the top level items.
        --%>
        <% loop $Menu(1) %>
            <li>
                <a class="<% if $IsCurrent %>current<% end_if %>" href="$Link">
                    $MenuTitle
                </a>
            </li>
        <% end_loop %>
        <% if $CurrentMember.FirstName %>
            <p class="user-status">Welcome, $CurrentMember.FirstName $CurrentMember.Surname</p>
        <% else %>
            <a class="user-status" href="/admin"><p>Log in</p></a>
        <% end_if %>
    </ul>
</nav>
