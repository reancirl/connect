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
                @foreach ($media as $medias)
                <tr>
                    <td>
                        <img src="{{asset('storage/'.$medias->path) }}" alt="{{ $medias->alt_text }}" width="100%" height="100%">
                    </td>
                    <td>{{ $medias->title }}</td>
                    <td>{{ $medias->alt_text }}</td>
                    <td>
                        <form action="{{ route('media.destroy',$medias->id) }}" method="post">
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
    </div>
</div>
@endsection


