@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Menus
            {{-- <a class="btn btn-primary btn-sm" href="{{ route('menu.create') }}">Add New</a> --}}
        </h3>
        <hr>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>
                            {{ $d->name }}
                        </td>
                        <td>
                            {{ $d->type }}
                        </td>
                        <td>
                            <a href="{{ route('menu.edit',$d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            {{-- <button class="btn btn-danger btn-sm">Delete</button> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
