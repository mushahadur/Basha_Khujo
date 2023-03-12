

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{asset('/')}}website/favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('/')}}website/fonts/flaticon/font/fonts_googleapis.css" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('/')}}website/fonts/icomoon/style.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('/')}}website/css/tiny-slider.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/aos.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">

    <title>@yield('title')</title>
</head>
<body>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0 float-start">Basha Khujo</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li class="has-children">
                        <a href="properties.html">Divisions</a>
                        <ul class="dropdown">
                            <li><a href="{{route('division.chattogram')}}">Chattogram</a></li>
                            <li><a href="#">Rajshahi</a></li>
                            <li><a href="#">Khulna</a></li>
                            <li><a href="#">Rangpur</a></li>
                            <li><a href="#">Sylhet</a></li>
                            <li class="has-children">
                                <a href="{{route('dhaka.home')}}">Dhaka</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('dhaka.home')}}">Mirpur</a></li>
                                    <li><a href="{{route('dhaka.home')}}">Dhanmondi</a></li>
                                    <li><a href="{{route('dhaka.home')}}">Mohammadpur</a></li>
                                    <li><a href="{{route('dhaka.home')}}">Tejgaon</a></li>
                                    <li><a href="{{route('dhaka.home')}}">Gulshan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="{{route('signIn')}}">SignIn</a></li>
                </ul>

                <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </div>
</nav>



@yield('content')






@include('website.Layout.footer')

<script src="{{asset('/')}}website/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website/js/tiny-slider.js"></script>
<script src="{{asset('/')}}website/js/aos.js"></script>
<script src="{{asset('/')}}website/js/navbar.js"></script>
<script src="{{asset('/')}}website/js/counter.js"></script>
<script src="{{asset('/')}}website/js/custom.js"></script>
</body>
</html>
