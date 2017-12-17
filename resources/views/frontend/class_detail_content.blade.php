<!--Sidebar Page-->
<div class="sidebar-page pb-0">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="col-lg-12 col-md-8 col-sm-6 col-xs-12">
                <section class="blog-container blog-detail">
                    <!--Blog Post-->
                    <div class="featured-blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <article class="inner-box">
                            <figure class="image">
                                <a href="blog-detail.html"><img src="{{ asset('assets/images/photos/'.$class->img) }}" alt="{{ $class->name }}"></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date pt-20"><span class="day icon flaticon-silhouette-3"></span></div>
                                    <h3 class="title fs-24"><a href="blog-detail.html">{{ $class->name  }}</a></h3>
                                    <ul class="post-info">

                                      @foreach($trainers as $trainer)
                                            <li><span class="icon fa fa-user"></span> <a href="{{route('trainer',['id' => $trainer->id])}}"> {{ $trainer->name }} </a></li>
                                      @endforeach
                                        <br>
                                        @foreach($schedules as  $schedule)
                                              <li><span class="icon fa fa-calendar-o"></span> {{ $schedule->day }} : {{ $schedule->time }}</li>
                                        @endforeach
                                        {{--<li><span class="icon fa fa-user"></span> <a href="#"></a></li>--}}
                                        {{--<li><span class="icon fa fa-calendar-o"></span> <a href="#">7.00 - 10:00</a></li>--}}
                                    </ul>
                                </div>
                                <div class="post-desc">
                                    {{ $class->description  }}
                                </div>
                            </div>
                        </article>

                        <!--About Author-->

                        @foreach($trainers as $trainer)
                            <div class="about-author mt-60 wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="author-desc">
                                    <div class="author-thumb"><img src="{{ asset('assets/images/team/'.$trainer->img) }}" alt=""></div>
                                    <div class="author-info fw-b lh-20 mb-0">{{ $trainer->name }}</div>
                                    <p class="color-theme fs-12 fw-600 mb-0"><em>{{ $trainer->specialization }}</em></p>
                                    <div class="text fs-13 lh-20">“{{ $trainer->description }}”</div>
                                </div>
                            </div>
                        @endforeach



                        <!-- Comment Form -->
                        <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                            <div class="sec-title"><h4 class="title-bottom mb-30 pt-20">Confirm Your <strong>Sit</strong></h4></div>

                            <!--Comment Form-->
                            <form method="post" action="blog.html">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-name"><span class="icon fa fa-user"></span></label></div>
                                            <div class="field-outer">
                                                <input type="text" name="username" id="your-name" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-email"><span class="icon fa fa-envelope"></span></label></div>
                                            <div class="field-outer">
                                                <input type="email" name="email" id="your-email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                        <button class="hvr-bounce-to-right" type="submit" name="submit-form">Submit Now</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>

            </div>

        </div>
    </div>
</div>

<!--Parallax Section-->
<section class="parallax-section" style="background-image:url(../../../public/assets/images/parallax/image-1.jpg);">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <h2 class="mb-20">Start a personal training session with us</h2>
            <p class="fs-16">Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante in,<br> elementum scelerisque arcu. Curabitur sagittis non justo at ultri</p>
            <div class="color-theme fs-18 mt-20">Get an Appointment - <a class="color-black fw-b text-uppercas" href="#">Contact Us <span class="fa fa-caret-right"></span></a></div>
        </div>
    </div>
</section>