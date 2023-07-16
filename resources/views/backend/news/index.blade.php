@extends('layouts.app1')
@section('Heading', 'News and Event')
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
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>News/Events Management</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('news.create') }}"> Create New News/Events</a>
                </div>
            </div>
        </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($newsData as $news)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td style="width: 20%">{{$news->title}}</td>
                <td style="width: 30%">{{substr($news->description, 0, 150)}}...</td>
                <td>
                @if($news->category === 1)
                    News
                @elseif($news->category === 2)
                    Events
                @endif
                </td>
                <td><img src="{{$news->image}}" alt="Image" height="100" width="100"></td>
                <td>
                    <a href="{{route('news.show', $news->id)}}" class="btn btn-primary edit-link"><i class="fas fa-eye"></i></a>
                    <a href="{{route('news.edit', $news->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                    <form action="{{route('news.destroy', $news->id)}}" method="post" style="display:inline-block">
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
    </div>
@endsection
