@extends('layouts.app1')
@section('Heading', 'Links')
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
                    <h2>Link Management</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('links.create') }}"> Create New Link</a>
                </div>
            </div>
        </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Social Media Link</th>
            <th scope="col">Icon</th>
        </tr>
        </thead>
        <tbody>
        @foreach($linkData as $link)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$link->network}}</td>
                <td><i class="fa fas-{{$link->icon}}"></i></td>
                <td>
                    <a href="{{route('links.edit', $link->id)}}" class="btn btn-warning edit-link"><i class="fas fa-edit"></i></a>
                    <form action="{{route('links.destroy', $link->id)}}" method="post" style="display:inline-block">
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
