<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yayasan Era Suria</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/dist/css/adminlte.min.css">
        <link href="https://lh3.googleusercontent.com/p/AF1QipMQds0kV3gb_Q_wf94PSJPMVhe7Yv9nud8XIfer=s1360-w1360-h1020" rel="shortcut icon" />
        <style>
            .bg-yes{
                background-color:#00093b;
                color:white;
            }

            .text-yes{
                color:#00093b;
            }

            input, textarea { 
                text-transform: uppercase; 
            }
        </style>
        @yield('scriptheader')
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="theme-switch-wrapper nav-link">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" style="display: none;">
                            <span class="slider round"><i class="fas fa-moon"></i></span>
                        </label>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-secondary elevation-1">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{url('')}}/yesimage/YESlogo.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
                <span class="brand-text font-weight-light">YES Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline mt-3 mb-3">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    {{-- <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-cube"></i>
                        <p>
                            Dashboard
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('borang.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            Borang
                        </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Default to the left -->
            <strong>Copyright YES &copy; <span id="copy-year"></span></strong> All rights reserved.
        </footer>
        </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{url('')}}/adminlte3/plugins/jquery/jquery.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/adminlte3/dist/js/adminlte.min.js"></script>
    <script>
        var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        var currentTheme = localStorage.getItem('theme');
        var mainHeader = document.querySelector('.main-header');
      
        if (currentTheme) {
          if (currentTheme === 'dark') {
            if (!document.body.classList.contains('dark-mode')) {
              document.body.classList.add("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-light')) {
              mainHeader.classList.add('navbar-dark');
              mainHeader.classList.remove('navbar-light');
            }
            toggleSwitch.checked = true;
          }
        }
      
        function switchTheme(e) {
          if (e.target.checked) {
            if (!document.body.classList.contains('dark-mode')) {
              document.body.classList.add("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-light')) {
              mainHeader.classList.add('navbar-dark');
              mainHeader.classList.remove('navbar-light');
            }
            localStorage.setItem('theme', 'dark');
          } else {
            if (document.body.classList.contains('dark-mode')) {
              document.body.classList.remove("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-dark')) {
              mainHeader.classList.add('navbar-light');
              mainHeader.classList.remove('navbar-dark');
            }
            localStorage.setItem('theme', 'light');
          }
        }
      
        toggleSwitch.addEventListener('change', switchTheme, false);
      </script>
      @yield('scriptfooter')
    </body>
</html>
