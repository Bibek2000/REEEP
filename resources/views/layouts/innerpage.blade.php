<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>REEEP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- News -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png" rel="apple-touch-icon')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dropdownstyle.css')}}">


    <!-- =======================================================
    * Template Name: Arsha
    * Updated: May 30 2023 with Bootstrap v5.3.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <!-- CSS -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="logo me-auto">
                    <div style="display: flex;">
                        <div><img src="/assets/img/gov.png" lt="" srcset=""></div>
                        <div style="display: flex; flex-direction: column;">
                            <a href="#">REEEP</a><p style="font-size: 10px; color: aliceblue;">Renewable Energy and Energy Efficiency Programme</p>
                        </div>
                    </div>
                </h1>
            </div>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <div class="col-lg-6">
                <nav id="navbar" class="navbar">

                    @include('partials.menuItems')


                    <i class="bi bi-list mobile-nav-toggle"></i>

                </nav><!-- .navbar -->
            </div>
            <div class="col-lg-2 d-flex align-items-center justify-content-end">
                <div class="img-german" style="display: flex;">
                    <div style="margin-right: 10px;"><img src="/assets/img/giz-e1547127585571.png" alt="" srcset="" width="80" height="50"></div>
                    <div><img src="/assets/img/nepal-germany.jpg" alt="" srcset="" width="80" height="50"></div>
                </div>
                <ul><li><form action="{{route('changeLang')}}" method="get">
                            <div class="container">
                                <select class="changeLang text-white" name="lang" style="background: none;border:none;">
                                    <option style="background: #2D8C59" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                    <option style="background: #2D8C59" value="np" {{ session()->get('locale') == 'np' ? 'selected' : '' }}>
                                        नेपाली
                                    </option>
                                </select>
                            </div>
                        </form></li></ul>
            </div>
        </div>
    </div>
</header><!-- End Header -->


<main id="main">

    <!-- ======= Title Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-5" style="height: 80px">
                <h2>@yield('heading')</h2>
            </div>
            @yield('content')

        </div>
    </section><!-- End title Section -->

    <!-- Content Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    @include('partials.footer')
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>
