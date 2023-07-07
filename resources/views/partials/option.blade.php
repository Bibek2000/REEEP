<option value="{{ $childMenu->id }}" {{($childMenu->id == $parent_id) ? 'selected': ''}}>
    {!! str_repeat('&nbsp;', $depth * 4) !!}{{ $childMenu->name }}

</option>
@if ($childMenu->children->isNotEmpty())ß
    @foreach ($childMenu->children as $grandChildMenu)
        @include('partials.option', ['childMenu' => $grandChildMenu, 'depth' => $depth + 1])
    @endforeach
@endif



