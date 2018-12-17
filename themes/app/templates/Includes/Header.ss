<header>
    <main-nav>
        <img slot="hamburger" src="$ThemeDir/dist/images/hamburger.svg" alt="Hamburger Icon"/>
        <a slot="logo" href="$BaseHref">
            <picture class="col-lg-6">
                <img class="main-nav__logo" src="$SiteConfig.HeaderLogo.URL()" alt="Header Logo" />
            </picture>
        </a>
        <form slot="form" action="$absoluteBaseURL\search/SearchForm" method="GET" class="main-nav__search input-group">
            <input type="text" class="form-control" placeholder="Search" name="q" aria-label="Search" aria-describedby="main-nav-search">
            <div class="input-group-append">
                <button id="main-nav-search" class="main-nav__search-button btn" type="submit" aria-label="Search button">
                    <img class="main-nav__search-logo" src="$ThemeDir/dist/images/search-blue.svg" alt="Search Icon (Blue)"/>
                </button>
            </div>
        </form>
        <ul slot="pages-mobile">
            <% loop $Menu(1) %>
                <% if $MenuTitle != "Home" %>
                    <div class="main-nav__main-items">
                        <li class="main-nav__lists">
                            <a class="main-nav__links" href="$Link">
                                <span>$MenuTitle</span>
                            </a>
                        </li>
                    </div>
                <% end_if %>
            <% end_loop %>
        </ul>
        <div slot="pages-desktop" class="container">
            <div class="d-flex justify-content-between">
                <% loop $Menu(1) %>
                    <% if $MenuTitle != "Home" %>
                        <a class="main-nav__links $LinkingMode" href="$Link">
                            <span>$MenuTitle</span>
                        </a>
                    <% end_if %>
                <% end_loop %>
            </div>
        </div>
        <div slot="button" class="main-nav__button">
            <a class="btn" href="$SiteConfig.HeaderButtonLink.Link" role="button">$SiteConfig.HeaderButtonText</a>
        </div>
    </main-nav>
</header>
