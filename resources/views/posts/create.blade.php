@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="row">
        <h3>
            Add New Post
            <a class="btn btn-primary btn-sm" href="{{ url()->previous() }}">Back</a>
        </h3>

        <form action ="{{ route('post.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                    <input type="text" class="form-control" name ="title" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Slug/Name</span>
                    <input type="text" class="form-control" name ="name" placeholder="Name" aria-label="Username" required aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="basic-addon1">Content</span>
                    <textarea name="content" cols="30" rows="10" class="form-control" required id="wysiwyg" required></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Excerpt</span>
                    <input type="text" class="form-control" name ="excerpt" placeholder="Excerpt" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                    <select class="form-select" name="status" id="inputGroupSelect01">
                        <option selected>-- Choose Status --</option>
                        <option value="publish">Publish</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Featured?</label>
                    <select class="form-select" name="is_featured" id="inputGroupSelect01">
                        <option selected>-- Select Feature Status --</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                 <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Post</button>
            </div>
        </form>
        
       
    </div>
</div>
@endsection