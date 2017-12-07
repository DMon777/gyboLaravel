<!--Team Members Section-->
<section class="team-section pt-80 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase">Our Expert <span class="color-theme">Trainers</span></h1>
                <p class="color-theme mb-50">''Lorem ipsum dolor sit amet''</p>
            </div>
        </div>
        <div class="row clearfix team-area-hvr">

            <!--Column-->


            @foreach($trainers as $val)
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="team-area">
                        <div class="row clearfix">
                            <figure class="col-lg-6 col-md-12"><div class="image"><a href="#"><img src="{{asset('assets/images/team/'.$val->img)}}" alt="{{ $val->name  }}"></a></div></figure>
                            <div class="col-lg-6 col-md-12">
                                <div class="content">
                                    <div class="title-box">
                                        <h4>{{ $val->name  }}</h4>
                                        <p>{{ $val->specialization  }}</p>
                                    </div>
                                    <div class="text">
                                        <p>{{ $val->description }}</p>
                                    </div>
                                    <a href="/trainer/{{ $val->id  }}" class="btn-thm btn-xs">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach

        </div>
    </div>
</section>