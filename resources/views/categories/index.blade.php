@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Categories
            <a class="btn btn-primary btn-sm" href="{{ route('category.create') }}">Add New</a>
        </h3>
        <hr>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th>Description</th>
                    <th>Count</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
    </div>
</div>
@endsection
