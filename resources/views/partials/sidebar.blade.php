 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <!-- <img src="adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
         <span class="brand-text font-weight-light">Clasificacion</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">
                     @if (Route::has('login'))
                     <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                         @auth
                         <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Bienvenid@ {{ auth()->user()->name }}</a>
                         <form method="POST" action="{{ route('logout') }}"><br>
                             @csrf

                             <button type="submit" class="btn-primary">
                                 Cerrar sección
                             </button>
                         </form><br>
                         <div class="form-inline">
                             <div class="input-group" data-widget="sidebar-search">
                                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                                 <div class="input-group-append">
                                     <button class="btn btn-sidebar">
                                         <i class="fas fa-search fa-fw"></i>
                                     </button>
                                 </div>
                             </div>
                         </div><br>
                         <!-- Sidebar Menu -->
                         <nav class="row">
                             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                 <!-- Add icons to the links using the .nav-icon class
                                    with font-awesome or any other icon font library -->
                                 <li class="nav-item menu-open">
                                     <!-- <a href="#" class="nav-link active">
                                         <i class="nav-icon fas fa-tachometer-alt"></i>
                                         <p>
                                             Clasificacion
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>-->
                                     <!--<ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="#" class="nav-link active">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Teams</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="#" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Results</p>
                                             </a>
                                         </li>
                                     </ul>-->
                                 </li>
                                 <li class="nav-item">
                                     <a href=" {{ route('team.index') }}" class="nav-link">
                                         <i class="nav-icon fas fa-users-cog"></i>
                                         <p>
                                             Teams
                                             <span class="right badge badge-danger"></span>
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon far fa-calendar-alt"></i>
                                         <p>
                                             Results
                                             <span class="right badge badge-danger"></span>
                                         </p>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                         <!-- /.sidebar-menu -->
                     </div>
                     <!-- /.sidebar -->
                     <!-- Content Wrapper. Contains page content -->
                     <div class="content-wrapper">
                         <!-- Content Header (Page header) -->
                        @yield('header')

                         @else
                         <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                         @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                         @endif
                         @endauth
                     </div>
                     @endif
                 </a>
             </div>
         </div>
 </aside>


 <!-- /.content-header -->
 <!-- SidebarSearch Form -->

 </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->