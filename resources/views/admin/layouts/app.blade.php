<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>furniture</title>
    @stack('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href= {{asset('css/styles.css')}} rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('admin#dashboard')}}">Admin Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" value="log out" class="btn btn-danger mx-3 w-75">
                </form>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('admin#profile')}}">
                            <div class="d-flex gap-2">
                                <p><i class="fa-solid fa-user"></i><p>
                                    <p> profile</p>
                            </div>
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('admin#changepassword')}}">
                            <div class="d-flex gap-2">
                                <p><i class="fa-solid fa-key"></i><p>
                                    <p>Change Password</p>
                            </div>
                        </a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <input type="submit" value="log out" class="btn btn-danger mx-3 w-75">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('admin#dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a href="{{route('admin#selectors')}}" class="nav-link collapsed">

                                <i class="fa-solid fa-envelope"></i>Reviews

                            </a>
                            <a href="{{route('admin#details#list')}}" class="nav-link collapsed" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                List Details
                            </a>
                            <a class="nav-link" href="{{route('admin#add#details')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 Add details
                            </a>
                            <a class="nav-link" href="{{route('admin#posts')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pen"></i></div>
                                  Blog
                            </a>
                            <a  class="nav-link collapsed" href="{{route('admin#users')}}">
                                <i class="fa-solid fa-user"></i>
                                Users</a>
                            <a  class="nav-link collapsed"href="{{route('admin#product')}}">
                                <i class="fa-brands fa-product-hunt"></i>products</a>
                            <a href="{{route('admin#orders')}}" class="nav-link collapsed">Orders</a>
                            <a href="{{route('admin#category')}}" class="nav-link collapsed">Categories</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{auth()->user()->name}}
                    </div>
                </nav>
            </div>
           @yield('Content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src={{asset('js/scripts.js')}}></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src={{asset('assets/demo/chart-area-demo.js')}}></script>
        <script src={{asset('assets/demo/chart-bar-demo.js')}}></script>
       <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src={{asset('js/datatables-simple-demo.js')}}></script>
        <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        @stack('scripts')
        @stack('addDetails')
        @stack('formlayoutes')
        @stack('formadd')
    </body>
</html>
