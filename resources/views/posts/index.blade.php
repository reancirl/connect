@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Posts
            <a class="btn btn-primary btn-sm" href="{{ route('post.create') }}">Add New</a>
        </h3>
        <hr>

        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th width="30%">Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>
                            {{ $d->title }}
                        </td>
                        <td>
                            {{ $d->author->name ?? '' }}
                        </td>
                        <td>

                        </td>
                        <td>
                            
                        </td>
                        <td>

                        </td>
                        <td>
                            <a class="btn btn-success btn-sm">View</a>
                            <a href="{{ route('post.edit',$d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
