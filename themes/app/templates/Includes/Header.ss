<header>
    <main-nav>
        <form slot="form" action="$absoluteBaseURL\search/SearchForm" method="GET" class="main-nav__search input-group">
            <input type="text" class="form-control" placeholder="Search..." name="q" aria-label="Search" aria-describedby="main-nav-search">
            <div class="input-group-append">
                <button id="main-nav-search" class="btn btn-outline-secondary" type="submit" aria-label="Search button">&#x1F50D;</button>
            </div>
        </form>
        <% loop $Menu(1) %>
            <% if $MenuTitle != "Home" %>
                <a class="<% if $IsCurrent %>current<% end_if %>" href="$Link">
                    <li>
                        <span>$MenuTitle</span>
                    </li>
                </a>
            <% end_if %>
        <% end_loop %>
        <button slot="button" class="main-nav__donate btn btn-outline-secondary" type="button">DONATE NOW</button>
    </main-nav>
</header>
