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
@include('partials.sidebar')

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
                            <li class="breadcrumb-item"><a href="{{ route('layout')}}">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="register-box">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Register a new membership</p>

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <!--<form action="../../index.html" method="post">-->

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->

                                <div class="input-group mb-3">

                                    <!--<div>
                                        <x-label for="name" :value="__('Name')" />

                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>-->

                                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Email Address -->

                                <!--<div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>-->

                                <div class="input-group mb-3">
                                    <!--<input type="email" class="form-control" placeholder="Email">-->
                                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Password -->
                                <!--<div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>-->

                                <div class="input-group mb-3">

                                    <!--<input type="password" class="form-control" placeholder="Password">-->
                                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Confirm Password -->
                                <!--<div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                                </div>-->

                                <div class="input-group mb-3">
                                    <!--<input type="password" class="form-control" placeholder="Retype password">-->
                                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>

                               <!-- <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-button>
                                </div>-->

                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                           <!-- <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                            <label for="agreeTerms">
                                                I agree to the <a href="#">terms</a>
                                            </label>-->
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <!-- <div class="social-auth-links text-center">
                                <a href="#" class="btn btn-block btn-primary">
                                    <i class="fab fa-facebook mr-2"></i>
                                    Sign up using Facebook
                                </a>
                                <a href="#" class="btn btn-block btn-danger">
                                    <i class="fab fa-google-plus mr-2"></i>
                                    Sign up using Google+
                                </a>
                            </div>-->

                           <!-- <a href="login.html" class="text-center">I already have a membership</a>-->
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->
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

<!--Formulario register Laravel Breeze-->

<!--<x-guest-layout>-->
    <!--<x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>-->

        <!-- Validation Errors -->
        <!--<x-auth-validation-errors class="mb-4" :errors="$errors" />-->

       <!-- <form method="POST" action="{{ route('register') }}">
            @csrf-->

            <!-- Name -->
           <!-- <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>-->

            <!-- Email Address -->
           <!-- <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>-->

            <!-- Password -->
           <!-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>-->

            <!-- Confirm Password -->
           <!-- <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>-->