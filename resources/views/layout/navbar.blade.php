<form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
        </li>
    </ul>
    <div class="search-element">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
        <div class="search-result">
            <div class="search-item">
                <a href="#">
                    <div class="search-icon bg-danger text-white mr-3">
                        <i class="fas fa-code"></i>
                    </div>
                    Stisla Admin Template
                </a>
            </div>
            <div class="search-item">
                <a href="#">
                    <div class="search-icon bg-primary text-white mr-3">
                        <i class="fas fa-laptop"></i>
                    </div>
                    Create a new Homepage Design
                </a>
            </div>
        </div>
    </div>
</form>
<ul class="navbar-nav navbar-right">
    </li>
    <li class="dropdown"><a href="#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/gambar/29.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Rara</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
            </a>

            <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </li>
</ul>
