@extends('layouts.app')

@section('content')
@include('media._create')
<div class="container">
    <div class="row">
        <h3>
            Media
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New
              </button>
        </h3>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="30%">Image</th>
                    <th>Title</th>
                    <th>Alt Text</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($media as $m)
                <tr>
                    <td>
                        <img src="{{asset('storage/'.$m->path) }}" alt="{{ $m->alt_text }}" width="100%" height="100%">
                    </td>
                    <td>{{ $m->title }}</td>
                    <td>{{ $m->alt_text }}</td>
                    <td>
                        <form action="{{ route('media.destroy',$m->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        {{ $media->links() }}
    </div>
</div>
@endsection


