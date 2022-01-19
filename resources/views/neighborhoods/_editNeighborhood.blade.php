@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="row">
        <h3>
            Edit Post
            <a class="btn btn-primary btn-sm" href="{{ url()->previous() }}">Back</a>
        </h3>
        <hr>
        <form action="{{ route('neighborhood.update',$data->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <h6>Title:</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->title}}" name="title">
                </div>
                <div class="col">
                    <h6>Slug/Name</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->name }}" name="name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h6>Excerpt:</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->excerpt }} " name="excerpt">
                </div>
            </div>
            

            <div class="row mt-3">
                <div class="col">
                    <h6>Status:</h6>
                    <select name="status" id="" class="form-control bg-white">
                        <option value="">Draft</option>
                        <option value="">Publish</option>
                    </select>
                </div>
                <div class="col">
                    <h6>Featured:</h6>
                    <select name="is_featured" id="" class="form-control bg-white">
                        <option value="">Not-Featured</option>
                        <option value="">Featured</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <h6>Content:</h6>
                    <textarea name="content" id="wysiwyg" cols="30" rows="10" class="form-control" style="background-color:#fff !important;">
                        {!! $data->content !!} 
                    </textarea>
                </div>
            </div>

            <div class="mt-4">
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
