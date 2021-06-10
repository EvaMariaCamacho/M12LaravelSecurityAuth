 <!DOCTYPE html>
 <!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminLTE 3 | Starter</title>

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
     <!-- jsGrid -->
     <link rel="stylesheet" href="adminlte/plugins/jsgrid/jsgrid.min.css">
     <link rel="stylesheet" href="adminlte/plugins/jsgrid/jsgrid-theme.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">



 </head>

 <body class="hold-transition sidebar-mini">

     <!-- Navbar -->
 @include('partials.nav')

         <!-- Right navbar links -->
        <!-- <ul class="navbar-nav ml-auto">-->
             <!-- Navbar Search -->
             <!--<li class="nav-item">
                 <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                     <i class="fas fa-search"></i>
                 </a>
                 <div class="navbar-search-block">
                     <form class="form-inline">
                         <div class="input-group input-group-sm">
                             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                             <div class="input-group-append">
                                 <button class="btn btn-navbar" type="submit">
                                     <i class="fas fa-search"></i>
                                 </button>
                                 <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                     <i class="fas fa-times"></i>
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </li>-->

             <!-- Messages Dropdown Menu -->
             <!--<li class="nav-item dropdown">
                 <a class="nav-link" data-toggle="dropdown" href="#">
                     <i class="far fa-comments"></i>
                     <span class="badge badge-danger navbar-badge">3</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <a href="#" class="dropdown-item">-->
                         <!-- Message Start -->
                         <!--<div class="media">
                             <img src="adminlte/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                             <div class="media-body">
                                 <h3 class="dropdown-item-title">
                                     Brad Diesel
                                     <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                 </h3>
                                 <p class="text-sm">Call me whenever you can...</p>
                                 <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                             </div>
                         </div>-->
                         <!-- Message End -->
                     <!--</a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">-->
                         <!-- Message Start -->
                         <!--<div class="media">
                             <img src="adminlte/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                             <div class="media-body">
                                 <h3 class="dropdown-item-title">
                                     John Pierce
                                     <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                 </h3>
                                 <p class="text-sm">I got your message bro</p>
                                 <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                             </div>
                         </div>-->
                         <!-- Message End -->
                   <!--  </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">-->
                         <!-- Message Start -->
                       <!--  <div class="media">
                             <img src="adminlte/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                             <div class="media-body">
                                 <h3 class="dropdown-item-title">
                                     Nora Silvester
                                     <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                 </h3>
                                 <p class="text-sm">The subject goes here</p>
                                 <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                             </div>
                         </div>-->
                         <!-- Message End -->
                     <!--</a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                 </div>
             </li>-->
             <!-- Notifications Dropdown Menu -->
             <!--<li class="nav-item dropdown">
                 <a class="nav-link" data-toggle="dropdown" href="#">
                     <i class="far fa-bell"></i>
                     <span class="badge badge-warning navbar-badge">15</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <span class="dropdown-header">15 Notifications</span>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                         <i class="fas fa-envelope mr-2"></i> 4 new messages
                         <span class="float-right text-muted text-sm">3 mins</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                         <i class="fas fa-users mr-2"></i> 8 friend requests
                         <span class="float-right text-muted text-sm">12 hours</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                         <i class="fas fa-file mr-2"></i> 3 new reports
                         <span class="float-right text-muted text-sm">2 days</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                 </div>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                     <i class="fas fa-expand-arrows-alt"></i>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                     <i class="fas fa-th-large"></i>
                 </a>
             </li>
         </ul>
     </nav>-->
     <!-- /.navbar -->

     <!-- Main Sidebar Container -->
     @include('partials.sidebar')
             <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
     </aside>

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        

         <!-- Main content -->

         <!-- Content Wrapper. Contains page content -->

         <!-- Main content -->
         <section class="content">
             <div class="card">
                 <div class="card-header">
                     <h3 class="card-title">Listado Teams</h3>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body">
                     <div id="jsGrid1"></div>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->
         </section>
         <!-- /.content -->
     </div>
     <!-- /.content-wrapper -->

     </div>


     <!-- /.content -->
     </div>
     <!-- /.content-wrapper -->

     <!-- Control Sidebar -->
     <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
         <div class="p-3">
             <h5>Title</h5>
             <p>Sidebar content</p>
         </div>
     </aside>
     <!-- /.control-sidebar -->

     <!-- Main Footer -->
     <footer class="main-footer">
         <!-- To the right -->
         <div class="float-right d-none d-sm-inline">
             Anything you want
         </div>
         <!-- Default to the left -->
         <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
     </footer>
     </div>
     <!-- ./wrapper -->

     <!-- REQUIRED SCRIPTS -->

     <!-- jQuery -->
     <script src="adminlte/plugins/jquery/jquery.min.js"></script>
     <!-- Bootstrap 4 -->
     <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- AdminLTE App -->
     <script src="adminlte/js/adminlte.min.js"></script>

     <!-- jsGrid -->
     <script src="adminlte/plugins/jsgrid/demos/db.js"></script>
     <script src="adminlte/plugins/jsgrid/jsgrid.min.js"></script>

     <!-- AdminLTE for demo purposes -->
     <script src="adminlte/dist/js/demo.js"></script>
     <!-- Page specific script -->
     <script>
         $(function() {
             $("#jsGrid1").jsGrid({
                 height: "100%",
                 width: "100%",

                 sorting: true,
                 paging: true,

                 data: db.clients,

                 fields: [{
                         name: "Name",
                         type: "text",
                         width: 150
                     },
                     {
                         name: "Age",
                         type: "number",
                         width: 50
                     },
                     {
                         name: "Address",
                         type: "text",
                         width: 200
                     },
                     {
                         name: "Country",
                         type: "select",
                         items: db.countries,
                         valueField: "Id",
                         textField: "Name"
                     },
                     {
                         name: "Married",
                         type: "checkbox",
                         title: "Is Married"
                     }
                 ]
             });
         });
     </script>
 </body>

 </html>