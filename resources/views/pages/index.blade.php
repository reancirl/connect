@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Pages
            <a class="btn btn-primary btn-sm" href="{{ route('page.create') }}">Add New</a>
        </h3>
        <hr>

        <table class="table table-bordered">
            <thead>
                <tr>
                    {{-- <th width="30%">Name</th>
                    <th>Neighborhood</th>
                    <th>Developer</th>
                    <th>Address</th>
                    <th>Sales Status</th>
                    <th width="10%">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
    </div>
</div>
@endsection
