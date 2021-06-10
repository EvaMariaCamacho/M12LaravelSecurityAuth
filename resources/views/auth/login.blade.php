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

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

</head>

<body class="hold-transition sidebar-mini">

    <!-- Navbar -->
    @include('partials.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <!--<a href="index3.html" class="brand-link">
            <img src="adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>-->

        <!-- Sidebar -->
      @include('partials.sidebar')
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!--<div class="row">-->
               <!-- <div class="col">-->
                    <!--<div class="hold-transition login-page">-->
                     <div class="login-box">
                <!-- /.login-logo -->
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="adminlte/index2.html" class="h1"><b>Results</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <!--<form action="../../index3.html" method="post">-->

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- E-Mail -->

                            <div class="input-group mb-3">
                                <!--<input type="email" class="form-control" placeholder="Email">-->
                                <!--<x-label for="email" :value="__('Email')" />-->

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Password -->

                            <div class="input-group mt-4">

                                <!--<input type="password" class="form-control" placeholder="Password">-->
                                <!-- <div class="mt-4">-->
                                <!--<x-label for="password" :value="__('Password')" />-->
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                <!--</div>-->
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Remember Me -->

                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <!--<input type="checkbox" id="remember">-->
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
                                        <!-- <label for="remember">Remember Me </label>-->
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif

                               <!-- <x-button class="ml-3">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>-->
                        </form>

                        <!--<div class="social-auth-links text-center mt-2 mb-3">
                            <a href="#" class="btn btn-block btn-primary">
                                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                            </a>
                            <a href="#" class="btn btn-block btn-danger">
                                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                            </a>
                        </div>-->
                        <!-- /.social-auth-links -->

                        <!-- <p class="mb-1">
                            <a href="forgot-password.html">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="register.html" class="text-center">Register a new membership</a>
                        </p>
                    </div>-->
                        <!-- /.card-body -->
                    <!--</div>-->
                    <!-- /.card -->
                </div>
                <!-- /.login-box -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
                   
                    <!--</div>-->
                
                
                </div>
                

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlte/js/adminlte.min.js"></script>
</body>

</html>

<!--formulario de login de Laravel Breeze-->

<!--<x-guest-layout>-->
    <!--<x-auth-card>-->
       <!-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>-->

        <!-- Session Status -->
        <!--<x-auth-session-status class="mb-4" :status="session('status')" />-->

        <!-- Validation Errors -->
      <!--  <x-auth-validation-errors class="mb-4" :errors="$errors" />-->

       <!-- <form method="POST" action="{{ route('login') }}">
            @csrf-->

            <!-- Email Address -->
           <!-- <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>-->

            <!-- Password -->
           <!-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>-->

            <!-- Remember Me -->
          <!--  <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>-->