@extends('layouts.app1')
@section('Heading', 'Banner')
@section('content')
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table img {
            height: 100px;
            width: 100px;
        }

        .edit-link {
            margin-right: 5px;
        }

        .remove_row {
            padding: 0;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
    </style>
    <div style="display: flex">
        <div class="btn btn-success mr-1 ml-2" style="height: 40px"><a href="{{route('banners.create')}}">
                <i class="fas fa-plus text-white"></i></a>
        </div>
        <h2 style="text-align:center">View</h2>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bannerData as $banner)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$banner->title}}</td>
                <td style="width: 30%">{{substr($banner->description, 0, 150)}}...</td>
                <td><img src="{{$banner->image}}" alt="Image" height="100" width="100"></td>
                <td>
                    <a href="{{route('banners.show', $banner->id)}}" class="btn btn-primary edit-link"><i class="fas fa-eye"></i></a>
                    <a href="{{route('banners.edit', $banner->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                    <form action="{{route('banners.destroy', $banner->id)}}" method="post" style="display:inline-block">
                        @method("delete")
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger sa-warning">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
