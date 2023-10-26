<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> 🤙🏼 PBKK Laravel 🤟🏼</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=" {{ asset('components/css/styles.css') }}" rel="stylesheet" />
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    @auth
        @if (auth()->user()->role == 'admin')
            <a href="{{ route('admin.index') }}" class="btn rounded menu-admin"><i class="fa-solid fa-house"></i></a>
        @endif
    @endauth
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Menu Navigasi</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Beranda</a></li>
            <li class="sidebar-nav-item"><a href="#tentang">Tentang</a></li>
            <li class="sidebar-nav-item"><a href="#flo">Flo!</a></li>
            @auth
                @if (auth()->user()->role == 'admin')
                    <li class="sidebar-nav-item"><a href="/admin" class="btn btn-info m-3" style="color: #ffffff"><i
                                class="fa-solid fa-house"></i> Dashboard Admin</a></li>
                @endif
                <li class="sidebar-nav-item">
                    <a class="btn btn-info m-3" style="color: #ffffff" onclick="event.preventDefault(); confirmLogout()"><i
                            class="fa-solid fa-right-from-bracket fa-lg"></i> Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <li class="sidebar-nav-item"><a href="/login" class="btn btn-info m-3" style="color: #ffffff"><i
                            class="fa-solid fa-right-to-bracket fa-lg"></i> Login</a></li>
            @endauth
        </ul>
    </nav>

    @yield('content')

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/alalghzy"><i
                            class="fa-brands fa-github-alt fa-bounce fa-lg" style="color: #ffffff;"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; <a href="https://github.com/alalghzy">alalghzy</a> 2023
            </p>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="components/js/scripts.js"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    {{-- Sweer Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Konfirmasi Logout',
                text: 'Anda yakin ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        }
    </script>

</body>

</html>
