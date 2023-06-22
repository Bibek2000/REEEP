@extends('layouts.app1')
@section('Heading', 'Menu')
@section('content')

    <h2 style="text-align:center">View Menus</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Parent Id</th>
            <th scope="col">Order</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $menu)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$menu->name}}</td>
                <td>{{$menu->slug}}</td>
                <td>{{$menu->product_id}}</td>
                <td>{{$menu->order}}</td>
                <td>{{$menu->order}}</td>
                <td>
                    <form id="toggle-form-{{$menu->id}}" action="{{ route('status.approval', $menu->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="button" onclick="toggleAppStatus({{$menu->id}})" class="btn {{$menu->status ? 'btn-success' : 'btn-danger'}}">
                            {{$menu->status ? 'Approved' : 'Not Approved'}}
                        </button>
                    </form>
                </td>
                <td>
                <td>
                    <a href="{{route('menus.show', $menu->id)}}" class="btn btn-primary edit-link"><i class="fas fa-eye"></i></a>
                    <a href="{{route('menus.edit', $menu->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                    <form action="{{route('menus.destroy', $menu->id)}}" method="post" style="display:inline-block">
                        @method("delete")
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger sa-warning remove_row">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        function toggleAppStatus(doctorId) {
            $('#toggle-form-' + doctorId).submit();
        }
    </script>
@endsection
