@extends('layouts.app1')
@section('Heading', 'About')
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
    <div class="btn btn-success"><a href="{{route('abouts.create')}}">
        <i class="fas fa-plus text-white"></i></a>
    </div>
        <h2 style="text-align:center">View Abouts</h2>
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
        @foreach($aboutData as $about)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$about->title[App::getLocale()]}}</td>
                <td style="width: 30%">{{substr($about->description[App::getLocale()], 0, 150)}}...</td>
                <td><img src="{{$about->image}}" alt="Image" height="100" width="100"></td>
                <td>
                    <a href="{{route('abouts.show', $about->id)}}" class="btn btn-primary edit-link"><i class="fas fa-eye"></i></a>
                    <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                    <form action="{{route('abouts.destroy', $about->id)}}" method="post" style="display:inline-block">
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
