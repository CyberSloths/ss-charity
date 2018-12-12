<header>
    <main-nav>
        <a slot="logo" href="$BaseHref">
            <picture class="col-6">
                <source srcset="$SiteConfig.HeaderLogo.ScaleHeight(40).URL()" media="(min-width: 768px)" />
                <img src="$SiteConfig.HeaderLogo.ScaleHeight(35).URL()" alt="Logo" />
            </picture>
        </a>
        <form slot="form" action="$absoluteBaseURL\search/SearchForm" method="GET" class="main-nav__search input-group">
            <input type="text" class="form-control" placeholder="Search..." name="q" aria-label="Search" aria-describedby="main-nav-search">
            <div class="input-group-append">
                <button id="main-nav-search" class="btn btn-outline-secondary" type="submit" aria-label="Search button">&#x1F50D;</button>
            </div>
        </form>
        <ul slot="pages-mobile">
            <% loop $Menu(1) %>
                <% if $MenuTitle != "Home" %>
                    <div class="main-nav__main-items">
                        <li class="container">
                            <a class="row" href="$Link">
                                <span class="col-12">$MenuTitle</span>
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
                        <a href="$Link">
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
