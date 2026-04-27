<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

<div id="wrapper">

    <!-- SIDEBAR -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
            <div class="sidebar-brand-text">My App</div>
        </a>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

    </ul>
    <!-- END SIDEBAR -->


    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <!-- TOPBAR -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

                <ul class="navbar-nav ml-auto">

                    <!-- USER -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <span class="mr-2 text-gray-600 small">User</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow">

                            <!-- LOGOUT -->
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item">
                                    <i class="fas fa-sign-out-alt mr-2"></i>
                                    Logout
                                </button>
                            </form>

                        </div>
                    </li>

                </ul>
            </nav>
            <!-- END TOPBAR -->


            <!-- CONTENT -->
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                <div class="card shadow">
                    <div class="card-body">
                        Selamat datang di Dashboard 🚀
                    </div>
                </div>
            </div>

        </div>

        <!-- FOOTER -->
        <footer class="bg-white text-center py-3">
            <span>© {{ date('Y') }} My App</span>
        </footer>

    </div>
</div>

<!-- JS -->
<script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>

</body>
</html>