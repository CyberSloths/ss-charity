<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand col-xs-12 col-md-1">
            <a href="$BaseHref">Company A</a>
        </div>
        <ul class="navbar-nav mr-auto">
            <% loop $Menu(1) %>
            <li class="nav-item">
                <a class="nav-link" href="$Link">$MenuTitle</a>
            </li>
            <% end_loop %>
        </ul>
    </nav>
</header>
