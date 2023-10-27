<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description"
        content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 5 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description"
        content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('admin/css/main.css') }} ">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="/"
            style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">FLOWR</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>

        <!-- Navbar Right Menu-->
        {{-- <ul class="app-nav">
        <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="bi bi-search"></i></button>
        </li>

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-gear me-2 fs-5"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a></li>
          </ul>
        </li>
      </ul> --}}
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="https://icons.iconarchive.com/icons/iconoir-team/iconoir/128/profile-circle-icon.png"
                width="128" height="128" alt="User Image">
            <div>
                <p class="app-sidebar__user-name">Admin FLOWR</p>
                <p class="app-sidebar__user-designation">----------</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item {{ Request::is('dashboard_admin') ? 'active' : '' }}"
                    href="/dashboard_admin"><i class="app-menu__icon bi bi-speedometer"></i><span
                        class="app-menu__label">Dashboard</span></a></li>
            <li><a class="app-menu__item {{ Request::is('crud') ? 'active' : '' }}" href="{{ route('crud.index') }}"><i
                        class="app-menu__icon bi bi-table"></i><span class="app-menu__label">CRUD</span></a></li>
            <li><a class="app-menu__item" onclick="event.preventDefault(); confirmLogout()" href="#"><i
                        class="bi bi-box-arrow-right me-2 fs-5"></i><span class="app-menu__label">Logout</span></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
        </ul>
    </aside>
    <main class="app-content">
        @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('admin/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    @stack('script')
</body>

</html>
