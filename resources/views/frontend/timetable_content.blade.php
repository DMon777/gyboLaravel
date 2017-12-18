<!--Class Time Table Section-->
<section class="bg-image theme-overlay overlay-white pt-90 pb-80" style="background-image:url('../../../public/assets/images/parallax/image-1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="class-schedule">
                    <ul>

                        @foreach($schedules as $key => $value)

                            <!--Class Schedule Row Start-->
                                <li class="class-row">
                                    <div class="class-day"> {{ $key }} </div>
                                    @foreach($value as $item)
                                        @if($item->flag == 1)
                                            <!--Single Class Start-->
                                                <div class="single-class">
                                                    <div class="single-class-inner">
                                                        <div class="class-img">
                                                            <img src="{{asset('assets/images/photos/'.$item->classes->img)}}" alt="">
                                                        </div>
                                                        <div class="caption">
                                                            <h6 class="title">{{ $item->classes->name }}</h6>
                                                            <p class="class-hours"><i class="fa fa-clock-o"></i> {{ $item->time }}</p>
                                                            <p class="class-room"><i class="fa fa-map-marker"></i> Room 01</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Single Class End-->

                                            @else
                                            <!--Single Class Start-->
                                                <div class="single-class class-absence">
                                                    <div class="single-class-inner">
                                                        <div class="class-img">
                                                            <img src="{{asset('assets/images/photos/'.$item->classes->img)}}" alt="">
                                                        </div>
                                                        <div class="caption">
                                                            <h6 class="title">{{ $item->classes->name }}</h6>
                                                            <p class="class-hours"><i class="fa fa-clock-o"></i> {{ $item->time }}</p>
                                                            <p class="class-room"><i class="fa fa-map-marker"></i> Room 01</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Single Class End-->
                                            @endif
                                    @endforeach
                                </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>