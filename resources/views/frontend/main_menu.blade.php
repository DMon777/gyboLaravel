<ul class="mainmenu pull-right">
    @foreach($menu as $val)
        <li class="">
            <a href="{{ $val->url  }}">{{ $val->name  }}</a>
        </li>
    @endforeach
</ul>