<li class="dropdown">
    <a href="{{$childMenu->slug}}">{{ $childMenu->name }}</a>
    @if ($childMenu->children->isNotEmpty())
        <ul>
            @foreach ($childMenu->children as $child)
                @include('partials.dropdown', ['childMenu' => $child]);
            @endforeach
        </ul>
    @endif
</li>

