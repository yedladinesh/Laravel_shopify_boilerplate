
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">Wishly</div>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link @if(Request::path() == '/')active @endif">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Dashboard
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="/products" class="nav-link @if(Request::path() == 'products')active @endif">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Products
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="/users" class="nav-link @if(Request::path() == 'users')active @endif">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Users
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    