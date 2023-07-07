

<ul>
    @php
        $counter = 0;
        $remainingMenus = [];
    @endphp 
    @foreach ($menus as $menu)
        @if ($menu->parent_id === null)
            @if ($counter < 4)
                <li class="dropdown" >
                    <a class="nav-link" href="/{{$menu->slug}}">{{ $menu->name }}</a>
                    @if ($menu->children->isNotEmpty())
                        <ul>
                            @foreach ($menu->children as $child)
                                @include('partials.dropdown', ['childMenu' => $child])
                            @endforeach
                        </ul>
                    @endif
                </li>
            @else
                @php
                    $remainingMenus[] = $menu;
                @endphp
            @endif
            @php
                $counter++;
            @endphp
        @endif
    @endforeach
    @if (count($remainingMenus) > 0)
        <li class="dropdown">
            <a class="nav-link" href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @foreach ($remainingMenus as $menu)
                    <li class="dropdown">
                        <a class="nav-link" href="{{$menu->slug}}">{{ $menu->name }}</a>
                        @if ($menu->children->isNotEmpty())
                            <ul>
                                @foreach ($menu->children as $child)
                                    @include('partials.dropdown', ['childMenu' => $child])
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </li>
    @endif
</ul>


