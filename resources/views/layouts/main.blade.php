<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title trspan="authPortal"></title>
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title trspan="authPortal"></title>

    <meta http-equiv="Content-Script-Type" content="text/javascript">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

    <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="Expires" content="0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

 

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css') }}">

    <script src="{{ asset('assets/js/jquery.preloader.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-confirm.min.css') }}">
    <script src="{{ asset('assets/js/jquery-confirm.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.preloader.min.js') }}"></script>

    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />

    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="icon" type="image/vnd.microsoft.icon"

        sizes="16x16 32x32 48x48 64x64 128x128">

    <link href="https://auth.sso.elephant-vert.com/static/common/favicon.ico" rel="shortcut icon"

        type="image/vnd.microsoft.icon" sizes="16x16 32x32 48x48 64x64 128x128">

</head>

 

<body class="scrollbar CostumScrolBar">

    <!------------------------------------------------------------------------->

    <!--   ****** NavBar ****** -->

 

    <div class="navbarList">

        <div class='navbarItimes'>

            <img src="{{ asset('img/LOGO-EV_FR.png') }}" style="float:left;width: 90px;margin-left:20px;">

<a class="dropbtn ml-5 mr-2" href="{{ url('/') }}" style="border-radius: 3px;font-weight: bold;">Filiale</a>

           <!-- <a class="dropbtn" href="{{ url('/Biens') }}" style="border-radius: 3px; font-weight: bold !important">Biens</a>-->

            @if (Auth::user()->role_id == 1)

            <a class="dropbtn" href="{{ url('Users/') }}" style="border-radius: 4px; font-weight: bold !important ;font-size:; ">Utilisateurs</a>

            @endif

            <div class="dropdownList">

                <a class="dropbtn mr-2" style="border-radius: 4px;padding: 18px 15px;color:white;  font-weight: bold !important">Base de donnée <div

                        class="separ"></div><i class="fa fa-caret-down" aria-hidden="true"></i> </a>

                <div class="dropdownList-one" style=" max-width: 150px;">

                    <a class="dItem " style=" font-weight: bold !important" href="{{ url('/Entreprise') }}">Filiale</a>

                    <a class="dItem" style=" font-weight: bold !important" href="{{ url('Categorie') }}">Categorie</a>

                </div>

            </div>

        </div>

        <div style="float:right;">
            <a style=" color: #f1f3ce;padding:16px;font-size: 14px;" class="text-uppercase">{{ Auth::user()->name }}</a> 
            <div class="dropdownList">

                <div class='userInfoAvatar'>

                    <a class="imgUser "><img style="border-radius:50%"

                            src="{{ asset('img/user.png')}}"></a>

                    <div class="dropdownList-one" style=" right: 0px; ">

                        <!--<a class="dItem" href="{{ url('users/edit') }}">Mon compte</a>-->

                        <a style="color:Black;" class="dItem" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                            @csrf

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="px-3 mx-auto mt-5">

        @yield("content")

    </div>