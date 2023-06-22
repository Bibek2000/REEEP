<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Portfolio Details - Arsha Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon" />
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link
        href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}"
        rel="stylesheet"
    />
    <link
        href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
        rel="stylesheet"
    />
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link
        href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}"
        rel="stylesheet"
    />
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto">
            <img src="{{asset('assets/img/gov.png')}}" alt="" srcset="" />
            <a href="#">REEEP</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            @include('partials.menuItems')
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li>@yield('content')</li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="assets/img/1 banner.JPG" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/1 banner.JPG" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/3 (1).JPG" alt="" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>What we do?</h3>
                        <ul>
                            <li><strong>Vision</strong>: #####</li>
                            <li><strong>Client</strong>: #####</li>
                            <li><strong>Projects</strong>: #####</li>
                            <li>
                                <strong>More works of REEEP</strong>:
                                <a href="#">www.example.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>This is an example of about us</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos
                            itaque inventore commodi labore quia quia. Exercitationem
                            repudiandae officiis neque suscipit non officia eaque itaque
                            enim. Voluptatem officia accusantium nesciunt est omnis
                            tempora consectetur dignissimos. Sequi nulla at esse enim cum
                            deserunt eius.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>REEEP</h3>
                    <p>
                        Ministry of Energy<br />
                        Singadurbar<br />
                        <strong>Phone:</strong> 9898989898<br />
                        <strong>Email:</strong> info@example.com<br />
                    </p>
                    <div class="img-german" style="display: flex">
                        <div style="margin-right: 10px">
                            <img
                                src="/assets/img/giz-e1547127585571.png"
                                alt=""
                                srcset=""
                                width="70"
                                height="60"
                            />
                        </div>
                        <div>
                            <img
                                src="/assets/img/nepal-germany.jpg"
                                alt=""
                                srcset=""
                                width="70"
                                height="60"
                            />
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Terms of service</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Privacy policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Web Development</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Product Management</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Graphic Design</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>
                        Cras fermentum odio eu feugiat lide par naso tierra videa magna
                        derita valies
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter" style="background-color: #2ba71e"
                        ><i class="bx bxl-twitter"></i
                            ></a>
                        <a href="#" class="facebook" style="background-color: #2ba71e"
                        ><i class="bx bxl-facebook"></i
                            ></a>
                        <a href="#" class="instagram" style="background-color: #2ba71e"
                        ><i class="bx bxl-instagram"></i
                            ></a>
                        <a
                            href="#"
                            class="google-plus"
                            style="background-color: #2ba71e"
                        ><i class="bx bxl-skype"></i
                            ></a>
                        <a href="#" class="linkedin" style="background-color: #2ba71e"
                        ><i class="bx bxl-linkedin"></i
                            ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>REEEP</span></strong
            >. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="#">Young Minds</a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a
    href="#"
    class="back-to-top d-flex align-items-center justify-content-center"
><i class="bi bi-arrow-up-short"></i
    ></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>
