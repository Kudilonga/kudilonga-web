<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>KudilongaApp | @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico')}}">
    @include('layouts.head')
</head>

@section('body')
@show
<body data-layout="detached" data-topbar="colored">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>
 
    <div class="container-fluid">
        <div id="layout-wrapper">
             @include('layouts.topbar') 
            @include('layouts.lateral')
 
            <div class="main-content">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('layouts.right-sidebar')

    @include('layouts.footer-script')
</body>

</html>
