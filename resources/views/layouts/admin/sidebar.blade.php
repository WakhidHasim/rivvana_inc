<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('admin/assets/img/profile.jpg') }}" alt="..."
                        class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('admin/services') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Services</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('admin/categories') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Categories</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('admin/portfolios') ? 'active' : '' }}">
                    <a href="{{ route('portfolios.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Portfolios</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
