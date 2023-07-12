
<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>REEEP</h3>
                <p>
                    {{$data['phoneData']->name}}<br>
                    {{$data['phoneData']->location}}<br>
                    <strong>Phone:</strong> {{$data['phoneData']->phone}}<br>
                    <strong>Email:</strong> {{$data['phoneData']->email}}<br>
                </p>
                <div class="img-german" style="display: flex;">
                    <div style="margin-right: 10px"><img src="/assets/img/giz-e1547127585571.png" alt="" srcset="" width="70" height="60"></div>
                    <div><img src="/assets/img/nepal-germany.jpg" alt="" srcset="" width="70" height="60"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    @foreach($data['leafMenus'] as $leafMenu)
                        <li><i class="bx bx-chevron-right"></i> <a href="{{$leafMenu->slug}}">{{$leafMenu->name}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Working Area</h4>
                <ul>
                    @foreach($data['workingArea'] as $workingArea)
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('view.workingarea', $workingArea->id)}}">{{$workingArea->title}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                <div class="social-links mt-3">
                    @foreach($data['socialMedia'] as $social)
                        <a href="{{$social->network}}" class="facebook" style="background-color: #2ba71e;"><i class="bx bxl-{{$social->icon}}" ></i></a>
                    @endforeach
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
        Designed by <a href="https://www.youngminds.com.np/">Young Minds</a>
    </div>
</div>
