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

        <h1 class="logo me-auto">
            <div style="display: flex;">
                <div><img src="assets/img/gov.png" lt="" srcset=""></div>
                <div style="display: flexbox; flex-direction: column;">
                    <a href="index.html">REEEP</a><p style="font-size: 10px; color: aliceblue;">Renewable Energy and Energy Efficiency Programme</p>
                </div>
            </div>
        </h1>


        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            @include('partials.menuItems')


{{--                <li><a class="nav-link scrollto" href="#about">About</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#services">Working Areas</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#news">News</a></li>--}}
{{--                <li><a class="nav-link   scrollto" href="#portfolio">Gallery</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#team">Partners</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>--}}



            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <div class="img-german" style="display: flex; margin-left: 10px;">
            <div style="margin-right: 10px"><img src="/assets/img/giz-e1547127585571.png" alt="" srcset="" width="60" height="40"></div>
            <div><img src="/assets/img/nepal-germany.jpg" alt="" srcset="" width="60" height="40"></div>
        </div>
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->


<!-- <div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h1>Powering Our Tomorrow.</h1>
      <h2>Igniting a Greener Revolution: Empowering a Sustainable Future.</h2>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </div>
</div> -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/3.jpg" class="d-block w-100" alt="..." style="height: 100vh;">
            <div class="carousel-caption">
                <h3>Powering Our Tomorrow</h3>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/1 banner.JPG" class="d-block w-100" alt="..." style="height: 100vh;">
            <div class="carousel-caption">
                <h3>Second slide label</h3>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/2 banner.JPG" class="d-block w-100" alt="..." style="height: 100vh;">
            <div class="carousel-caption d-none d-md-block">
                <h3>Third slide label</h3>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <img src="./assets/img/1.jpeg" alt="" srcset="" style="width: 100%;">
                </div>
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul>
                    <a href="aboutus.html" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- Working Areas -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Working Areas</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="container d-flex align-items-center justify-content-center position-relative flex-wrap working-area ">
                    <div class="card d-flex position-relative flex-column">
                        <div class='imgContainer'>
                            <a href="working areas.html"><img src='https://images.pexels.com/photos/1456268/pexels-photo-1456268.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'></a>
                        </div>
                        <div class="content">
                            <h2>Card One</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>
                            <a href="#"><button class="btn btn-success learn-area">Learn More</button></a>
                        </div>
                    </div>
                    <div class="card d-flex position-relative flex-column">
                        <div class='imgContainer'>
                            <a href="working areas.html"><img src='https://images.pexels.com/photos/196667/pexels-photo-196667.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'></a>
                        </div>
                        <div class="content">
                            <h2>Card Two</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>

                        </div>
                    </div>
                    <div class="card d-flex position-relative flex-column">
                        <div class='imgContainer'>
                            <a href="working areas.html"><img src='https://images.pexels.com/photos/847483/pexels-photo-847483.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'></a>
                        </div>
                        <div class="content">
                            <h2>Card Three</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>
                        </div>
                    </div>
                    <div class="card d-flex position-relative flex-column">
                        <div class='imgContainer'>
                            <a href="working areas.html"><img src='https://images.pexels.com/photos/847483/pexels-photo-847483.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'></a>
                        </div>
                        <div class="content">
                            <h2>Card Four</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>
                        </div>
                    </div>
                    <div class="card d-flex position-relative flex-column">
                        <div class='imgContainer'>
                            <a href="working areas.html"><img src='https://images.pexels.com/photos/847483/pexels-photo-847483.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'></a>
                        </div>
                        <div class="content">
                            <h2>Card Five</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique, sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh.  Morbi in leo in eros commodo volutpat ac sed dolor.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End working area Section -->


    <!-- ======= News ======= -->
    <section id="news" class="news section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>News and Events</h2>
            </div>

            <div class="row">
                <div class="container d-flex align-items-center justify-content-center position-relative flex-wrap working-area ">

                    <!-- DEMO 4 Item-->
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="hover hover-4 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-7.jpg" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-4-content">
                                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Image </span>Caption</h3>
                                <p class="hover-4-description text-uppercase mb-0 small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
                                <p class="hover-4-button text-uppercase mb-0 small"><a href="news.html"><button class="btn btn-success">Continue...</button></a></p>
                            </div>
                        </div>
                    </div>
                    <!-- DEMO 4 Item            -->
                    <div class="col-lg-6">
                        <div class="hover hover-4 text-white rounded"><img src="https://bootstrapious.com/i/snippets/sn-img-hover/hoverSet-8.jpg" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-4-content">
                                <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light">Image </span>Caption</h3>
                                <p class="hover-4-description text-uppercase mb-0 small">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
                                <p class="hover-4-button text-uppercase mb-0 small"><a href="news.html"><button class="btn btn-success">Continue...</button></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
    </section>




    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Importance of Renewable Energy</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div style="position: relative; display: inline-block;" class="m-2 img-hover">
                <!-- Button trigger modal -->
                <div class="img-hovereffect">
                    <img src="/assets/img/1 banner.JPG" alt="image" height="400" width="400" class="rounded">
                </div>
                <button type="button" class="rounded-circle mx-2 centered-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-camera-alt"></i>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Image album</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/assets/img/1 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/2 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/3 (1).JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/3 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="position: relative; display: inline-block;" class="m-2 img-hover">
                <!-- Button trigger modal -->
                <div class="img-hovereffect">
                    <img src="/assets/img/1 banner.JPG" alt="image" height="400" width="400" class="rounded">
                </div>
                <button type="button" class="rounded-circle mx-2 centered-button" data-bs-toggle="modal" data-bs-target="#exampleModal">

                    <i class="fa-solid fa-camera-alt"></i>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Image album</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/assets/img/1 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/2 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/3 (1).JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/3 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="position: relative; display: inline-block;" class="m-2 img-hover">
                <!-- Button trigger modal -->
                <div class="img-hovereffect">
                    <img src="/assets/img/1 banner.JPG" alt="image" height="400" width="400" class="rounded">
                </div>
                <button type="button" class="rounded-circle mx-2 centered-button" data-bs-toggle="modal" data-bs-target="#exampleModal">

                    <i class="fa-solid fa-camera-alt"></i>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Image album</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/assets/img/1 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/2 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/3 (1).JPG" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/3 banner.JPG" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center; margin-top: 10px;">
                <a href="gallery.html" style="text-decoration: none;"><button type="submit" style="background-color: #2ba71e; color: white; border:#2ba71e; border-radius: 2px; height: 40px; width: 100px;">View More</button></a>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Partners Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Partners</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Partners Section -->

    <!-- ======= Knowledge and resources ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Knowledge and Resources</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="container knowledge">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content discovery"> <a href="#">
                                    <div class="content-overlay"></div> <img class="content-image" src="./assets/img/2.jpg">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Wisdom</h3>
                                        <p class="content-text"><i class="fa fa-map-marker"></i>####</p>
                                    </div>
                                </a> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content discovery "> <a href="#">
                                    <div class="content-overlay"></div> <img class="content-image image-heignt" src="./assets/img/3 (1).JPG">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Knowledge</h3>
                                        <p class="content-text"><i class="fa fa-map-marker"></i>####</p>
                                    </div>
                                </a> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content discovery"> <a href="#">
                                    <div class="content-overlay"></div> <img class="content-image" src="./assets/img/3.jpg">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Dicovery</h3>
                                        <p class="content-text"><i class="fa fa-map-marker"></i>####</p>
                                    </div>
                                </a> </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Knowledge and resources Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" style="background-color: #2ba71e;">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>REEEP</h3>
                    <p>
                        Ministry of Energy<br>
                        Singadurbar<br>
                        <strong>Phone:</strong> 9898989898<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                    <div class="img-german" style="display: flex;">
                        <div style="margin-right: 10px"><img src="/assets/img/giz-e1547127585571.png" alt="" srcset="" width="70" height="60"></div>
                        <div><img src="/assets/img/nepal-germany.jpg" alt="" srcset="" width="70" height="60"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter" style="background-color: #2ba71e;"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook" style="background-color: #2ba71e;"><i class="bx bxl-facebook" ></i></a>
                        <a href="#" class="instagram" style="background-color: #2ba71e;"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus" style="background-color: #2ba71e;"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin" style="background-color: #2ba71e;"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>REEEP</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="#">Young Minds</a>
        </div>
    </div>
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
