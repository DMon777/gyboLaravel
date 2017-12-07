
<section class="pt-90 pb-60">
    <div class="container">
        <div class="row">

            @foreach($classes as $class)

                <div class="col-sm-6 col-md-4">
                    <div class="practise-area">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/photos/'.$class->img)  }}" alt="">
                            <div class="round-style"></div>
                        </div>
                        <div class="practise-details">
                            <i class="icon flaticon-silhouette"></i>
                            <h4 class="title">{{ $class->name  }}</h4>
                            <p class="details"> {{ $class->short_description }} </p>
                            <a class="btn-thm btn-xs" href="class/{{ $class->id }}">Read more <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach



            {{--<div class="col-sm-6 col-md-4">--}}
                {{--<div class="practise-area">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="images/photos/1.jpg" alt="">--}}
                        {{--<div class="round-style"></div>--}}
                    {{--</div>--}}
                    {{--<div class="practise-details">--}}
                        {{--<i class="icon flaticon-silhouette"></i>--}}
                        {{--<h4 class="title">Running Class</h4>--}}
                        {{--<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing. Odit qui minima praesentium illo obcaecati...</p>--}}
                        {{--<a class="btn-thm btn-xs" href="#">Read more <i class="fa fa-arrow-circle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4">--}}
                {{--<div class="practise-area">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="images/photos/2.jpg" alt="">--}}
                        {{--<div class="round-style"></div>--}}
                    {{--</div>--}}
                    {{--<div class="practise-details">--}}
                        {{--<i class="icon flaticon-silhouette-3"></i>--}}
                        {{--<h4 class="title">Yoga Class</h4>--}}
                        {{--<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing. Odit qui minima praesentium illo obcaecati...</p>--}}
                        {{--<a class="btn-thm btn-xs" href="#">Read more <i class="fa fa-arrow-circle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4">--}}
                {{--<div class="practise-area">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="images/photos/3.jpg" alt="">--}}
                        {{--<div class="round-style"></div>--}}
                    {{--</div>--}}
                    {{--<div class="practise-details">--}}
                        {{--<i class="icon flaticon-silhouette-1"></i>--}}
                        {{--<h4 class="title">Body Bulding</h4>--}}
                        {{--<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing. Odit qui minima praesentium illo obcaecati...</p>--}}
                        {{--<a class="btn-thm btn-xs" href="#">Read more <i class="fa fa-arrow-circle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4">--}}
                {{--<div class="practise-area">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="images/photos/4.jpg" alt="">--}}
                        {{--<div class="round-style"></div>--}}
                    {{--</div>--}}
                    {{--<div class="practise-details">--}}
                        {{--<i class="icon flaticon-gym-1"></i>--}}
                        {{--<h4 class="title">Gym Fitness</h4>--}}
                        {{--<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing. Odit qui minima praesentium illo obcaecati...</p>--}}
                        {{--<a class="btn-thm btn-xs" href="#">Read more <i class="fa fa-arrow-circle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4">--}}
                {{--<div class="practise-area">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="images/photos/5.jpg" alt="">--}}
                        {{--<div class="round-style"></div>--}}
                    {{--</div>--}}
                    {{--<div class="practise-details">--}}
                        {{--<i class="icon flaticon-person"></i>--}}
                        {{--<h4 class="title">Weight Loose</h4>--}}
                        {{--<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing. Odit qui minima praesentium illo obcaecati...</p>--}}
                        {{--<a class="btn-thm btn-xs" href="#">Read more <i class="fa fa-arrow-circle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-md-4">--}}
                {{--<div class="practise-area">--}}
                    {{--<div class="thumb">--}}
                        {{--<img src="images/photos/6.jpg" alt="">--}}
                        {{--<div class="round-style"></div>--}}
                    {{--</div>--}}
                    {{--<div class="practise-details">--}}
                        {{--<i class="icon flaticon-tool"></i>--}}
                        {{--<h4 class="title">Cardio Program</h4>--}}
                        {{--<p class="details">Lorem ipsum dolor sit amet, consectetur adipisicing. Odit qui minima praesentium illo obcaecati...</p>--}}
                        {{--<a class="btn-thm btn-xs" href="#">Read more <i class="fa fa-arrow-circle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>

<!--Parallax Section-->
<section class="parallax-section theme-overlay overlay-white p-0" style="background-image:url(images/parallax/image-1.jpg);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-md-offset-0 col-lg-offset-1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="mt-80 mt-md-50 mb-sm-50">
                    <h2 class="title-bottom lg mb-20 pb-10">Start a personal training session with one of our fitness trainers</h2>
                    <p class="color-black fs-16">Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante in, elementum scelerisque arcu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut laudantium aperiam, consectetur. Quos doloribus adipisci, dolores nulla aliquam fugiat harum.</p>
                    <div class="fs-18 fw-b mt-20">Confirm Your Seat - <a class="color-theme text-uppercas" href="#">Contact Us <span class="fa fa-caret-right"></span></a></div>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 pr-0 bg-half-d1">
            </div>
        </div>
    </div>
</section>