<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> Dashboard </a>
        <button href class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-palette"></i>
                        <span class="d-lg-none">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-planet"></i>
                        <span class="notification">5</span>
                        <span class="d-lg-none">Notification</span>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Notification 1</a>
                        <a class="dropdown-item" href="#">Notification 2</a>
                        <a class="dropdown-item" href="#">Notification 33</a>
                        <a class="dropdown-item" href="#">Notification 4</a>
                        <a class="dropdown-item" href="#">Another notification</a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nc-icon nc-zoom-split"></i>
                        <span class="d-lg-block">&nbsp;Search</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav   d-flex align-items-center">
                <li>
                    <a class="btn btn-success mt-2" target="_blank"
                        href="https://light-bootstrap-dashboard-laravel.creative-tim.com/docs/tutorial-components.html?_ga=2.96850911.1572690349.1606999439-1953910635.1585824794"><i
                            class="tim-icons icon-book-bookmark"></i> Documentation</a>
                </li>
                <li>
                    <a class="btn btn-info mt-2" target="_blank"
                        href="https://www.creative-tim.com/product/light-bootstrap-dashboard-laravel"><i
                            class="tim-icons icon-cloud-download-93"></i> Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href=" https://light-bootstrap-dashboard-laravel.creative-tim.com/profile ">
                        <span class="no-icon">Account</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com"
                        id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="no-icon">Dropdown</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form id="logout-form"
                        action="https://light-bootstrap-dashboard-laravel.creative-tim.com/logout"
                        method="POST">
                        <input type="hidden" name="_token"
                            value="un0pK8uR3sEfrBssASvFplJXjFt0FaBjIhQSD7uv" autocomplete="off"> <a
                            class="text-danger"
                            href="https://light-bootstrap-dashboard-laravel.creative-tim.com/logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log out </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
