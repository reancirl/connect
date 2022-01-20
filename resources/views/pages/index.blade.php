@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Pages
            {{-- <a class="btn btn-primary btn-sm" href="{{ route('page.create') }}">Add New</a> --}}
        </h3>
        <hr>
        <table class="table table-bordered" id="">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody6
                @foreach ($data as $d)
                    <tr>
                        <td>
                            {{ $d->name }}
                        </td>
                        <td>
                            {{ $d->title }}
                        </td>
                        <td>
                            <a href="{{ url($d->link) }}" target="_blank" style="color:#3A3594;text-decoration:none;font-weight:600;">{{ $d->link }}</a>
                        </td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{ url($d->link) }}" target="_blank">View</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('page.edit',$d->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
