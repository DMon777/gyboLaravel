<div class="sidebar-page">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                <section class="blog-container blog-detail">
                    <!--Blog Post-->
                    <div class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!--Blog Post-->
                        <article class="blog-post hvr-float-shadow">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <figure class="post-header">
                                        <a href="#"><img alt="" src="{{ asset('assets/images/blog/'.$article->image) }}"></a>
                                        <div class="entry-meta">
                                            <ul>
                                                <li class="entry-date"><span>28</span> <br> Dec</li>
                                                <li class="entry-comment"><i class="icon fa fa-comment"></i> 3</li>
                                            </ul>
                                        </div>
                                    </figure>
                                </div>
                                <div class="col-md-12">
                                    <div class="content pl-30 pb-30">
                                        <h3 class="title"><a href="blog-detail.html">{{ $article->name }}</a></h3>
                                        <ul class="post-info list-inline fs-13">
                                            <li><span class="icon fa fa-user"></span> <a href=" {{ route('trainer',['id' => $article->author->id]) }}">{{ $article->author->name }}</a></li>
                                            <li><span class="icon fa fa-tag"></span> <a href="{{ route('category',['id' => $article->category->id]) }}">{{ $article->category->name }}</a></li>
                                        </ul>
                                        <div class="text">
                                            {!! $article->text !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--Blog Post-->

                        <!--About Author-->
                        <div class="about-author mt-20 wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="author-desc">
                                <div class="author-thumb"><img src="{{ asset('assets/images/team/'.$article->author->img) }}" alt="{{ $article->author->name }}"></div>
                                <div class="author-info"><strong>{{ $article->author->name }}</strong> /  {{ count($article->author->articles) }} Blogposts / {{ $article->author->specialization }} / works for Company Inc.</div>
                                <div class="text">{{ $article->author->description }}</div>
                            </div>
                        </div>

                        <!--Comments Area-->

                        <div class="comments-area">

                            @if(count($comments) > 0)
                                <div class="sec-title">
                                    <h4 class="title-bottom mb-30">
                                         {{ $count_comments.' '.Lang::choice('comments.comment',$count_comments) }}  Found
                                    </h4>
                                </div>
                            @endif



                                <div class="comment-box">

                                    {{--@foreach($comments as $comment)--}}

                                    {{--<div class="comment reply-comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
                                    {{--<div class="author-thumb"><img src="{{ asset('assets/images/resource/author-thumb-3.jpg') }}" alt=""></div>--}}
                                    {{--<div class="comment-info"><strong>{{ $comment->login }}</strong> {{ $comment->created_at }}</div>--}}
                                    {{--<div class="text">{{ $comment->comment }}</div>--}}
                                    {{--<a href="#" class="theme-btn dark-btn reply-btn"><span class="icon flaticon-update23"></span>&ensp; Reply</a>--}}
                                    {{--</div>--}}

                                    {{--@endforeach--}}


                                    @inject('com','App\Repositories\Comments')
                                    {{ $com->printComments($comments) }}


                                {{--<div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
                                    {{--<div class="author-thumb"><img src="{{ asset('assets/images/resource/author-thumb-2.jpg') }}" alt=""></div>--}}
                                    {{--<div class="comment-info"><strong>Johnathan Doe</strong> - posted 2 minutes ago</div>--}}
                                    {{--<div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>--}}
                                    {{--<a href="#" class="theme-btn dark-btn reply-btn"><span class="icon flaticon-update23"></span>&ensp; Reply</a>--}}


                                    {{--<div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
                                        {{--<div class="author-thumb"><img src="{{ asset('assets/images/resource/author-thumb-2.jpg') }}" alt=""></div>--}}
                                        {{--<div class="comment-info"><strong>Johnathan Doe</strong> - posted 2 minutes ago</div>--}}
                                        {{--<div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>--}}
                                        {{--<a href="#" class="theme-btn dark-btn reply-btn"><span class="icon flaticon-update23"></span>&ensp; Reply</a>--}}

                                        {{--<div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
                                            {{--<div class="author-thumb"><img src="{{ asset('assets/images/resource/author-thumb-2.jpg') }}" alt=""></div>--}}
                                            {{--<div class="comment-info"><strong>Johnathan Doe</strong> - posted 2 minutes ago</div>--}}
                                            {{--<div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>--}}
                                            {{--<a href="#" class="theme-btn dark-btn reply-btn"><span class="icon flaticon-update23"></span>&ensp; Reply</a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                                {{--<div class="comment reply-comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
                                    {{--<div class="author-thumb"><img src="{{ asset('assets/images/resource/author-thumb-3.jpg') }}" alt=""></div>--}}
                                    {{--<div class="comment-info"><strong>Johnathan Doe</strong> - posted 2 minutes ago</div>--}}
                                    {{--<div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>--}}
                                    {{--<a href="#" class="theme-btn dark-btn reply-btn"><span class="icon flaticon-update23"></span>&ensp; Reply</a>--}}
                                {{--</div>--}}


                                {{--<div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
                                    {{--<div class="author-thumb"><img src="{{ asset('assets/images/resource/author-thumb-2.jpg') }}" alt=""></div>--}}
                                    {{--<div class="comment-info"><strong>Johnathan Doe</strong> - posted 2 minutes ago</div>--}}
                                    {{--<div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>--}}
                                    {{--<a href="#" class="theme-btn dark-btn reply-btn"><span class="icon flaticon-update23"></span>&ensp; Reply</a>--}}
                                {{--</div>--}}

                            </div>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                            <div class="sec-title"><h4 class="title-bottom mb-30">Post a <strong>comment</strong></h4></div>
                           <div id="answer_message">
                               {{--<p>ответиь на комментарий  - Имя комментатора--}}
                                   {{--<button id="reject_comment" class="btn-danger">отменить</button>--}}
                               {{--</p>--}}
                           </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!--Comment Form-->
                            <form method="post" action="">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-name"><span class="icon fa fa-user"></span></label></div>
                                            <div class="field-outer">
                                                <input type="text" name="login" id="your-name" placeholder="Your Name">
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
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="parent_id" id="parent_id" value = "0">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                        <button class="hvr-bounce-to-right" type="submit" name="submit-form">Add Comment</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>

            </div>
            <!--Content Side-->

            <!--Sidebar-->
            @inject('sidebar','App\Repositories\SidebarRep')
            {{ $sidebar->getSidebar() }}

        </div>
    </div>
</div>