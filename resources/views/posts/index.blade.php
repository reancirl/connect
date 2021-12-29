@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Posts
            <a class="btn btn-primary btn-sm" href="{{ route('post.create') }}">Add New</a>
        </h3>
        <hr>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="30%">Title</th>
                    <th>Author</th>
                    <th>Categories</th>
                    <th>Date</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
    </div>
</div>
@endsection
