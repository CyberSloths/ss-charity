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
<form action="$absoluteBaseURL\search/SearchForm" method="GET" class="header__search-form">
    <input type="text" class="header__search-input" placeholder="Search..." name="q" aria-label="header search input">
    <button type="submit" class="header__search-button" aria-label="header search button">
        <i class="icon icon--search-black"></i>
    </button>
</form>
