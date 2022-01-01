@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Categories
            <a class="btn btn-primary btn-sm" href="{{ route('category.create') }}">Add New</a>
        </h3>
        <hr>

        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th>Slug</th>
                    <th># of Posts</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>
                            {{ $d->name }}
                        </td>
                        <td>
                            {{ $d->slug }}
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm">View</button>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
