<div class="sidebar-page pb-0">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                <!--Default Section-->
                <section class="default-section blog-section pt-0 pb-0">

                        @forelse($search_data as $article)

                            <article class="blog-post hvr-float-shadow">
                                <div class="row clearfix">

                                    <div class="col-md-12">
                                        <div class="content pl-30 pb-30">
                                            <h3 class="title"><a href="blog-detail.html">{{ $article->name }}</a></h3>
                                            <ul class="post-info list-inline fs-13">
                                                <li><span class="icon fa fa-user"></span> <a href="{{ route('trainer',['id' => $article->author->id]) }}">{{ $article->author->name }}</a></li>
                                                <li><span class="icon fa fa-tag"></span> <a href="{{ route('category',['id' => $article->category->id]) }}">{{ $article->category->name }}</a></li>
                                            </ul>
                                            <div class="text">
                                                <p>{{ $article->intro }}</p>
                                            </div>
                                            <a href="{{route('article',['id' => $article->id])}}" class="read-more">Read more<i class="ml-5 fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @empty
                            <p> по вашему запросу ничего не найдено!!!</p>
                        @endforelse

                <!--Pagination-->
                    <div class="pager-outer">
                    </div>
                </section>

            </div>
            <!--Content Side-->
            @inject('sidebar','App\Repositories\SidebarRep')
            {{ $sidebar->getSidebar() }}

        </div>
    </div>
</div>