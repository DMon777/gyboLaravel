<!--Profile Section-->
<section class="profile-section pb-40">
    <div class="auto-container">

        <div class="row clearfix">

            <!--Column-->
            <div class="col-md-12 column">
                <!--Member Info-->
                <article class="member-info wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="row">
                        <div class="col-md-3 pl-0 pr-0">
                            <figure class="image"><a href="#"><img src="{{ asset('assets/images/team/'.$trainer->img) }}" alt="{{ $trainer->name }}"></a></figure>
                        </div>
                        <div class="col-md-5">
                            <div class="member-title">
                                <h4 class="fs-20">{{ $trainer->name }}</h4>
                                <p><em>{{ $trainer->specialization }}</em></p>
                            </div>
                            <ul class="info">
                                <li><strong>PHONE:</strong>  {{ $trainer->phone }}</li>
                                <li><strong>E-MAIL:</strong>  <a href="mailto:{{ $trainer->email }}">{{ $trainer->email  }}</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi magnam vitae doloremque accusantium maiores, laudantium mollitia quod. Aliquam, vel?</p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="row">
                <div class="col-md-6 column">
                    <h3 class="title-bottom fs-20 pb-5">Overview</h3>
                    {{ $trainer->description }}
                </div>
                <div class="col-md-6">
                    <!-- Appointment Form -->
                    <div class="comment-form appoinment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h3 class="title-bottom fs-20 pb-5 mb-20">Make an Appointment
                            @if(Session::has('email_status'))
                                {{ Session::get('email_status') }}
                            @endif

                        </h3>
                        <!--Comment Form-->
                        <form method="post" action="">
                            <div class="row clearfix">
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-name"><span class="icon fa fa-user"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" name="name" id="your-name" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-email"><span class="icon fa fa-envelope"></span></label></div>
                                        <div class="field-outer">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="email" name="email" id="your-email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="appointment-date"><span class="icon fa fa-clock-o"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" placeholder="Select Appointment Date" name="date" class="date-field">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-category"><span class="icon fa fa-arrow-circle-o-down"></span></label></div>
                                        <div class="field-outer">
                                            <div class="select-input-wrapper">
                                                <select class="select-input" name="category">
                                                    <option value="" selected="selected">Select Category</option>
                                                    @foreach($trainer_classes as $class)
                                                        <option value="{{ $class->name  }}">
                                                            {{ $class->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button class="hvr-bounce-to-right" type="submit" name="submit-form">Send To Layer</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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