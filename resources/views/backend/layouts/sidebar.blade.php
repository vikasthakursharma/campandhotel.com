<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/admin/home') }}"> <img alt="image" src={{ url('backend/img/logo.png') }}
                    class="header-logo" /> <span class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            @php
                $activeHome = '';
                if (url()->current() == url('/admin/home')) {
                    $activeHome = 'active';
                }
            @endphp
            <li class="dropdown {{ $activeHome }}">
                <a href="{{ url('/admin/home') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            @php
                $activeBanner = '';
                if (url()->current() == url('/admin/banner/') || url()->current() == url('/admin/banner/create')) {
                    $activeBanner = 'active';
                }
            @endphp
            <li class="dropdown {{ $activeBanner }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Banner</span></a>
                <ul class="dropdown-menu">
                    <li @if (url()->current() == url('/admin/banner/')) class="active" @endif><a class="nav-link"
                            href="{{ url('/admin/banner/') }}">all banner</a>
                    </li>
                    <li @if (url()->current() == url('/admin/banner/create/')) class="active" @endif><a class="nav-link"
                            href="{{ url('/admin/banner/create/') }}">add
                            banner</a></li>
                </ul>
            </li>

            @php
                $activeUser = '';
                if (url()->current() == url('/admin/users')) {
                    $activeUser = 'active';
                }
            @endphp
            <li class="dropdown {{ $activeUser }}">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>Users</span></a>
                <ul class="dropdown-menu">
            </li>
            <li @if (url()->current() == url('/admin/users')) class="active" @endif><a class="nav-link" href="{{ url('/admin/users') }}">All User</a>
            </li>
        </ul>
        </li>

        @php
            $activeMedia = '';
            if (url()->current() == url('/admin/gallery')) {
                $activeMedia = 'active';
            }
        @endphp
        <li class="menu-header">Media</li>
        <li class="dropdown {{ $activeMedia }}">
            <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="image"></i><span>Gallery</span>
            </a>
            <ul class="dropdown-menu">
                <li @if (url()->current() == url('/admin/gallery')) class="active" @endif>
                    <a class="nav-link" href="{{ url('/admin/gallery') }}">Gallery</a>
                </li>
            </ul>

                <li @if (url()->current() == url('/admin/contact-queries')) class="active" @endif>
                    <a href="{{ url('/admin/contact-queries') }}" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        Contact Queries
                    </a>
                </li>

        </li>
        </ul>
    </aside>
</div>
