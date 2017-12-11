<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <aside class="sidebar">

        <!-- Search Form -->
        <div class="widget search-form">

            <form method="post" action="blog.html">
                <div class="form-group">
                    <input type="search" name="search" value="" placeholder="search for something">
                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                </div>
            </form>

        </div>
        <!-- Popular Categories -->
        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title"><h3>Popular Categories</h3></div>

            <ul class="list">

                @foreach($categories as $category)
                    <li><span class="icon fa fa-angle-right"></span>
                        <a href="{{ route('category',['id' => $category->id]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach

            </ul>

        </div>

        <!-- Recent Posts -->
        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title"><h3>Recent Posts</h3></div>

           @foreach($recent_posts as $recent_post)
                <div class="post">
                    <div class="post-thumb"><a href="{{ route('article',['id' => $recent_post->id]) }}"><img src="{{ asset('assets/images/blog/'.$recent_post->image) }}" alt="{{ $recent_post->name }}"></a></div>
                    <h4><a href="{{ route('article',['id',$recent_post->id]) }}">{{ $recent_post->name }}</a></h4>
                    <div class="post-info text-right">
                        {{ date('d/m/Y',$recent_post->date) }}
                    </div>
                </div>

           @endforeach

        </div>

        <!-- Popular Tags -->
        <div class="widget popular-tags">
            <div class="sidebar-title"><h3>Popular Tags</h3></div>
            @foreach($tags as $tag)
                <a href="{{ route('tags',['name' => $tag->link]) }}">{{ $tag->name }}</a>
            @endforeach
        </div>
    </aside>

</div>
<!--Sidebar-->