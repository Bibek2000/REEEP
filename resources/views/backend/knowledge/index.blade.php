@extends('layouts.app1')
@section('Heading', 'Knowledge and Resources')
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
                    <h2>Knowledge and Resource Management</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('knowledges.create') }}"> Create New Knowledge and Resource</a>
                </div>
            </div>
        </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">PDF</th>
        </tr>
        </thead>
        <tbody>
        @foreach($knowledgeData as $knowledge)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$knowledge->title}}</td>
                <td style="width: 30%">{!! substr($knowledge->description, 0, 150) !!}...</td>
                <td><img src="{{$knowledge->image}}" alt="Image" height="100" width="100"></td>
                <td><a href="{{$knowledge->pdf}}" target="_blank" class="btn btn-outline-success">View PDF</a></td>

                <td>
                    <a href="{{route('knowledges.show', $knowledge->id)}}" class="btn btn-primary edit-link"><i class="fas fa-eye"></i></a>
                    <a href="{{route('knowledges.edit', $knowledge->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                    <form action="{{route('knowledges.destroy', $knowledge->id)}}" method="post" style="display:inline-block">
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
