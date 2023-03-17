<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yayasan Era Suria</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.css">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/dist/css/adminlte.min.css">
        <link href="https://lh3.googleusercontent.com/p/AF1QipMQds0kV3gb_Q_wf94PSJPMVhe7Yv9nud8XIfer=s1360-w1360-h1020" rel="shortcut icon" />
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <style>
            .bg-yes{
                background-color:#00093b;
                color:white;
            }

            .text-yes{
                color:#00093b;
            }
        </style>
        @yield('scriptheader')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

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
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-secondary elevation-1">
            <a href="index3.html" class="brand-link">
                <img src="{{url('')}}/yesimage/YESlogo.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
                <span class="brand-text font-weight-light">BorangAdmin</span>
            </a>

            <div class="sidebar">
                <div class="form-inline mt-3 mb-3">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        @role('Admin')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                            <p>
                                Admin
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage Role</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('products.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage Product</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endrole
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice"></i>
                            <p>
                                Borang
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('borang.list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Report</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <strong>Copyright YES &copy; <span id="copy-year"></span></strong> All rights reserved.
        </footer>

    </div>
    
    <script src="{{url('')}}/adminlte3/plugins/jquery/jquery.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/adminlte3/dist/js/adminlte.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/jszip/jszip.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="{{url('')}}/adminlte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
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