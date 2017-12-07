<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title  }}</title>
    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/revolution-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{asset('assets/css/bootstrap-margin-padding.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('assets/js/respond.js')}}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- #topbar -->
    <section id="topbar" class="construct header-top">
        <div class="container">
            <div class="row">
                <div class="social pull-right">

                </div> <!-- /.social -->
                <div class="contact-info pull-left">
                    <ul>
                        <li><a href="tel:+1234567890"><i class="fa fa-map-marker"></i>  56, Building- Avenue-96, New York </a></li>
                        <li><a href="mailto:example@gmail.com"><i class="fa fa-envelope"></i> example@gmail.com</a></li>
                        <li><a href="tel:1800654896"><i class="fa fa-phone"></i> + (1800) - 985 - 985</a></li>
                    </ul>
                </div> <!-- /.contact-info -->
            </div>
        </div>
    </section> <!-- /#topbar -->

    <!-- header -->
    <header class="construct header-curvy">
        <div class="search-box">
            <div class="container">
                <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <form action="#">
                        <input type="text" placeholder="Search Here"> <button type="submit"><i class="icon icon-Search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="cart-box">
            <div class="container">
                <div class="pull-right cart col-lg-6 col-xs-12">
                    <p><i class="icon icon-FullShoppingCart"></i> You Have <span>1 Item</span> in your Cart. Price is <span>$199</span></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="clearfix">
                <div class="pull-left logo">
                    <a href="index.html">
                        <img src="{{asset('assets/images/logo1.png')}}" alt="FitClub">
                    </a>
                </div>
                <nav class="pull-right mainmenu-container clearfix">

                    <button class="mainmenu-toggler">

                    </button>


                    @inject('menu',"App\Repositories\MenuRep")
                     {{ $menu->getMenu()  }}

                    {{--<ul class="mainmenu pull-right">--}}
                        {{--<li class="">--}}
                            {{--<a href="index.html">Home</a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="index.html">Home One</a></li>--}}
                                {{--<li><a href="index-2.html">Home Two</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class=""><a href="about.html">About</a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="about.html">About Us</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class=""><a href="#">Classes</a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li class="">--}}
                                    {{--<a href="#">Classes Style One</a>--}}
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="classes-one-3column.html">3column</a></li>--}}
                                        {{--<li><a href="classes-one-4column.html">4column</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="">--}}
                                    {{--<a href="#">Classes Style Two</a>--}}
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="classes-two-3column.html">3column</a></li>--}}
                                        {{--<li><a href="classes-two-4column.html">4column</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="classes-detail.html">Class Details</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class=""><a href="timetable-1.html">Timetable</a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="timetable-1.html">Timetable Style One</a></li>--}}
                                {{--<li><a href="timetable-2.html">Timetable Style Two</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class=""><a href="trainers-1.html">Trainers</a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="trainers-1.html">Trainers Style One</a></li>--}}
                                {{--<li><a href="trainers-2.html">Trainers Style Two</a></li>--}}
                                {{--<li><a href="trainer-details.html">Trainer Details</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                            {{--<a href="#">Pages</a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="upcoming-courses.html">Upcoming Courses</a></li>--}}
                                {{--<li class="">--}}
                                    {{--<a href="#">Shop</a>--}}
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="shop-listing.html">Shop Listing</a></li>--}}
                                        {{--<li><a href="shop-details.html">Shop Details</a></li>--}}
                                        {{--<li><a href="shop-cart.html">Shopping Cart</a></li>--}}
                                        {{--<li><a href="shop-checkout.html">Checkout</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="">--}}
                                    {{--<a href="#">Pricing</a>--}}
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="pricing-1.html">Pricing Style One</a></li>--}}
                                        {{--<li><a href="pricing-2.html">Pricing Style Two</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="">--}}
                                    {{--<a href="#">Gallery</a>--}}
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="gallery-1.html">Gallery Style One</a></li>--}}
                                        {{--<li><a href="gallery-2.html">Gallery Style Two</a></li>--}}
                                        {{--<li><a href="gallery-3.html">Gallery Style Three</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class=""><a href="#">Testimonial</a>--}}
                                    {{--<ul class="submenu">--}}
                                        {{--<li><a href="testimonials-1.html">Testimonial Style One</a></li>--}}
                                        {{--<li><a href="testimonials-2.html">Testimonial Style Two</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="faq.html">Faq</a></li>--}}
                                {{--<li><a href="under-construction.html">Under Construction</a></li>--}}
                                {{--<li><a href="404.html">404 Page</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                            {{--<a href="blog.html">Blog</a>--}}
                            {{--<ul class="submenu">--}}
                                {{--<li><a href="blog.html">Blog</a></li>--}}
                                {{--<li><a href="blog-two-column.html">Blog Two Column</a></li>--}}
                                {{--<li><a href="blog-three-column.html">Blog Three Column</a></li>--}}
                                {{--<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>--}}
                                {{--<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>--}}
                                {{--<li><a href="blog-detail.html">Blog Details</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="contact.html">Contact</a></li>--}}
                    {{--</ul>--}}
                </nav>
            </div>
        </div>
    </header>
    <!--End Main Header -->

    @yield('header')

    @yield('content')


    <!--Main Footer-->
    <footer class="main-footer bg-image theme-overlay overlay-deep-black" data-img-bg="{{ public_path() }}/images/parallax/image-2.jpg')}}">

        <!--Footer Upper-->
        <div class="footer-upper xs-width4-center">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget about-widget">
                            <a href="#">
                                <img src="{{asset('assets/images/logo-white.png')}}" alt="Awesome Image"/>
                            </a>
                            <p class="mt-15">Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
                            <ul class="contact">
                                <li><i class="fa fa-map-marker"></i> <span>60 Grant Ave. Carteret NJ 0708</span></li>
                                <li><i class="fa fa-phone"></i> <span>(880) 1112223334</span></li>
                                <li><i class="fa fa-envelope-o"></i> <span>example@gmail.com</span></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title"><h3>Quick Links</h3></div>
                            <ul>
                                <li><a href="#">Our Classes</a></li>
                                <li><a href="#">Our Courses</a></li>
                                <li><a href="#">Our Timetable</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Our Pricing</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title"><h3>Latest News</h3></div>
                            <div class="widget-news">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{asset('assets/images/blog/f1.jpg')}}" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a class="title" href="#">Etiam dignissim sit amet felis ac sagittis. Sed libero</a>
                                        <h6 class="post-date">31 Dec, 2015</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{asset('assets/images/blog/f2.jpg')}}" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a class="title" href="#">Etiam dignissim sit amet felis ac sagittis. Sed libero</a>
                                        <h6 class="post-date">31 Dec, 2015</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="{{asset('assets/images/blog/f3.jpg')}}" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a class="title" href="#">Etiam dignissim sit amet felis ac sagittis. Sed libero</a>
                                        <h6 class="post-date">31 Dec, 2015</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title"><h3>Contact Form</h3></div>
                            <form action="inc/sendemail.php" class="validated-contact-form contact-form" id="footer-cf">
                                <input type="text" name="name"  placeholder="Full Name">
                                <input type="text" name="email" placeholder="Email Address" >
                                <textarea name="message" placeholder="Your Message"></textarea>
                                <button type="submit">Send</button>
                                <div class="result"></div><!-- /.result -->
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Footer bootom-->
        <div class="footer-bottom">
            <div class="auto-container text-center fs-13">
                <p>Copyright © 2016 <a target="_blank" title="Free CSS Themes" href="http://freecssthemes.com/">FreeCSSThemes</a>  |  All Right Reserved</p>

            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/revolution.min.js')}}"></script>
<!-- MixIt UP JS -->
<script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>

<!-- FancyBox -->
<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.plugin.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.datepick.min.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>

<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>