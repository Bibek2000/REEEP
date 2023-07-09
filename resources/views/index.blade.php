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
    <link href="{{asset('assets/img/gov.png')}}" rel="icon">
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
    <div class="col-5">
        <h1 class="logo me-auto">
            <div style="display: flex;">
                <div><img src="assets/img/gov.png" lt="" srcset=""></div>
                <div style="display: flex; flex-direction: column;">
                    <a href="#">REEEP</a><p style="font-size: 10px; color: aliceblue;">Renewable Energy and Energy Efficiency Programme</p>
                </div>
            </div>
        </h1>
    </div>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
<div class="col-6">
        <nav id="navbar" class="navbar">
            @include('partials.menuItems')


{{--                <li><a class="nav-link scrollto" href="#about">About</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#services">Working Areas</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#news">News</a></li>--}}
{{--                <li><a class="nav-link   scrollto" href="#portfolio">Gallery</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#team">Partner</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>--}}
            <form action="{{route('changeLang')}}" method="get">
                <div class="container">
                    <select class="changeLang text-white" name="lang" style="background: none;border:none;">
                        <option style="background: #2D8C59" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option style="background: #2D8C59" value="np" {{ session()->get('locale') == 'np' ? 'selected' : '' }}>
                            नेपाली
                        </option>
                    </select>
                </div>
            </form>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->
</div>
    <div class="col-1">
        <div class="img-german" style="display: flex; margin-left: 10px;">
            <div style="margin-right: 10px;"><img src="/assets/img/giz-e1547127585571.png" alt="" srcset="" width="80" height="50"></div>
            <div><img src="/assets/img/nepal-germany.jpg" alt="" srcset="" width="80" height="50"></div>
        </div>
    </div>
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
    <div class="carousel-inner">
        @foreach($bannerData['records'] as $banner)
            <div class="carousel-item active">
                <img src="{{$banner->image}}" class="d-block w-100" alt="..." style="height: 100vh;">
                <div class="carousel-caption">
                    <h3>{{$banner->title}}</h3>
                    <p>{{$banner->description}}</p>
                </div>
            </div>
        @endforeach
        </div>


{{--        <div class="carousel-item">--}}
{{--            <img src="assets/img/1 banner.JPG" class="d-block w-100" alt="..." style="height: 100vh;">--}}
{{--            <div class="carousel-caption">--}}
{{--                <h3>Second slide label</h3>--}}
{{--                <p>Some representative placeholder content for the second slide.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img src="assets/img/2 banner.JPG" class="d-block w-100" alt="..." style="height: 100vh;">--}}
{{--            <div class="carousel-caption d-none d-md-block">--}}
{{--                <h3>Third slide label</h3>--}}
{{--                <p>Some representative placeholder content for the third slide.</p>--}}
{{--            </div>--}}
{{--        </div>--}}

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
                    <img src="{{$aboutFirstData->image}}" alt="" srcset="" style="width: 100%;">
                </div>
                <div class="col-lg-6">
                    <p>
                        {!! $aboutFirstData->description[App::getLocale()] !!}....
                    </p>
                    <a href="{{route('view.about')}}" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- Working Areas -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Working Areas</h2>
            </div>

            <div class="row">
                <div class="container d-flex align-items-center justify-content-center position-relative flex-wrap working-area ">
                    @foreach($workingAreas as $workingArea)
                        <div class="card d-flex position-relative flex-column">
                            <div class='imgContainer'>
                                <a href="{{route('view.workingarea', $workingArea->id)}}"><img src='{{$workingArea->image}}'><span class="text-center"><p class="p-2 btn-success text-white">Learn More</p></span></a>
                            </div>
                            <div class="content">
                                <h2>{{$workingArea->title}}</h2>
                                <p>{!! substr($workingArea->description, 0, 100)!!}
                                </p>

                            </div>
                        </div>
                    @endforeach
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
                        <div class="hover hover-4 text-white rounded"><img src="{{$newsData->image}}" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-4-content">
                                <a href="{{route('view.news', $newsData->category)}}"><h3 class="hover-4-title text-uppercase font-weight-bold mb-0 "><span class="font-weight-light" style="font-size: x-small">View more</span> NEWS</h3></a>
                                <p class="hover-4-description text-uppercase mb-0 small text-white">{{substr($newsData->description, 0, 50)}}....</p>
                                <p class="hover-4-button text-uppercase mb-0 small"><a href="{{route('view.one', $newsData->id)}}"><button class="btn btn-success">Read More</button></a></p>
                                <p class=" text-uppercase mb-0 small text-center">View More</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- DEMO 4 Item            -->
                    <div class="col-lg-6">
                        <div class="hover hover-4 text-white rounded"><img src="{{$eventsData->image}}" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-4-content">
                                <a href="{{route('view.news', $eventsData->category)}}"><h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light" style="font-size: x-small">View more</span> Events</h3></a>
                                <p class="hover-4-description text-uppercase mb-0 small text-white">{{substr($eventsData->description, 0, 50)}}....</p>
                                <p class="hover-4-button text-uppercase mb-0 small"><a href="{{route('view.one', $eventsData->id)}}"><button class="btn btn-success">Read More</button></a></p>
                            </div>
                        </div>
                        </a>
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
            </div>

<div class="row">
            @foreach($albumData as $album)
                <div class="col-4">
                <div class="content discovery">
                        <div class="content-overlay"></div> <img class="content-image" src="{{$album->image}}" height="250px">
                        <div class="content-details fadeIn-bottom">
{{--                            <p class="content-text"><i class="fa fa-arrow-alt-circle-right"></i>Learn More</p>--}}
                            <button type="button" class="rounded-circle mx-2 centered-button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$album->id}}">
                                <i class="fa-solid fa-camera-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$album->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Image album</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            @foreach($album->gallery as $item)
                            <div class="modal-body">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{$item->image}}" class="d-block w-100" alt="...">
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
                            @endforeach
                        </div>
                    </div>
                </div>

            @endforeach
</div>
            <div style="display: flex; justify-content: center; margin-top: 10px;">
                <a href="{{route('view.gallery.all')}}" style="text-decoration: none;"><button type="submit" style="background-color: #2ba71e; color: white; border:#2ba71e; border-radius: 2px; height: 40px; width: 100px;">View More</button></a>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Partner Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Partners</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                @foreach($partner as $partners)
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{$partners->image}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>{{$partners->name}}</h4>
                            <span>Partner</span>
                            <a href="{{$partners->externallink}}">Visit Us</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Partner Section -->

    <!-- ======= Knowledge and resources ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Knowledge and Resources</h2>
            </div>
            <div class="row">
                <div class="container knowledge">
                    <div class="row">
@foreach($knowledgeDatas as $knowledgeData)
                            <div class="col-md-4">
                                <div class="content discovery" style="height: 250px"> <a href="{{route('view.allKnowledge')}}">
                                        <div class="content-overlay"></div> <img class="content-image" src="{{$knowledgeData->image}}">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">{{$knowledgeData->title}}</h3>
                                            <p class="content-text"><i class="fa fa-arrow-alt-circle-right"></i>Learn More</p>
                                            <p class="content-text"><a href="{{$knowledgeData->pdf}}" style="text-decoration: none; cursor: pointer"><i class="fa fa-eye"></i>View PDF</a></p>
                                        </div>
                                    </a> </div>
                            </div>
@endforeach

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
                        <div class="name">
                            <i class="bi bi-name-alt"></i>
                            <h4>Name:</h4>
                            <p>{{$phoneData->name}}</p>
                        </div>
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{$phoneData->location}}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$phoneData->email}}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{$phoneData->phone}}</p>
                        </div>
                        <div style="height: 290px; width: 100%; overflow: hidden">
                        {!! $phoneData->maps !!}
                        </div>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        {!! Form::open(['route' => 'mail.send', 'enctype' => 'multipart/form-data'], ['class' => 'php-email-form']) !!}
                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Your Name') !!}
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter name']) !!}
                                @error('name')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('email', 'Your Email') !!}
                                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter email']) !!}
                                @error('email')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('subject', 'Subject') !!}
                            {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Enter Subject']) !!}
                            @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('message', 'Message') !!}
                            {!! Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'Enter your message here']) !!}
                            @error('message')<span class="text-danger">{{$message}}</span>@enderror
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-success">Send Message</button></div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

   @include('partials.footer');
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
{{--Language translator--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(e){

        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
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
