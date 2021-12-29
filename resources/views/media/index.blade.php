@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Media
            <a class="btn btn-primary btn-sm" href="{{ route('neighborhood.create') }}">Add New</a>
        </h3>
        <hr>

        {{-- <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th>Overview</th>
                    <th>Author</th>
                    <th># of Projects</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table> --}}
    </div>
</div>
@endsection
