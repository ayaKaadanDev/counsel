<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- for bootstrap's file for style -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- for my style file -->
    <link rel="stylesheet" href="assets/css/counsel.css">
     <!-- for link compression file -->
     <link rel="stylesheet" href="assets/css/all.min.css">
    <title>welcome page</title>
</head>
<body>

    {{-- start navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top ">
        <div class="container">
        <a class="navbar-brand text-white" href="#">counsel</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about_us">about us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact_us">contact us</a>
            </li>


            <li class="nav-item ">
                    @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif

                        @endauth
                    </div>
                    @endif
            </li>

        </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- start main phpto --}}
    <div class="carousel-inner">
        <div class="main_image">
            <div class="carousel-item active" data-bs-interval="10000">
                <img class="img-fluid bg-wight" src="assets/images/our_photo.jpg"  alt="...">
                <div class="carousel-caption ">
                    <h1 class="">Welcome To The <span>COUNSEL WEBSITE</span></h1>
                </div>
            </div>
        </div>
    </div>
    {{-- end main phpto --}}

        {{-- start about us --}}
        <div id="about_us" class="about_us rounded"> {{--class="rounded-circle"--}}
            <h1 class="caption">About us</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <img class="img-fluid bg-wight rounded-circle" src="assets/images/handcheck.jpg" alt="">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <h3>we provide an environment for people to share their experiences and knowledge with each other</h3>
                    </div>
                </div>
            </div>
        </div>
        {{-- end about us --}}

    {{-- start footer --}}
    <footer id="contact_us" class="contact_us">
        <h1 class="caption">contact us</h1>
        <div class="container">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>ayakaadan17@gmail.com</span> <br>
        </div>

        <div class="end">
            <div class="container">
              <p class="lead">Copyright &copy; 2022.All rights reserved, designed and developed by <span>Aya kaadan</span></p>
            </div>
            </div>
      </footer>
      {{-- end footer --}}


    <!-- any bootstrap need jquery file for work  -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- bootstrap file in js -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
