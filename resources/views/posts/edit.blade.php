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
        <form action="{{ route('post.update',$data->id) }}" method="POST">
            <div class="row">
                <div class="col">
                    <h6>Title:</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->title }}">
                </div>
                <div class="col">
                    <h6>Slug/Name</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->name }}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h6>Excerpt:</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->excerpt }}">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <h6>Status:</h6>
                    <select name="" id="" class="form-control bg-white">
                        <option value="">Draft</option>
                        <option value="">Publish</option>
                    </select>
                </div>
                <div class="col">
                    <h6>Featured:</h6>
                    <select name="" id="" class="form-control bg-white">
                        <option value="">Not-Featured</option>
                        <option value="">Featured</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <h6>Content:</h6>
                    <textarea name="" id="wysiwyg" cols="30" rows="10" class="form-control" style="background-color:#fff !important;">
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
