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
        <form action="{{ route('post.update',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
            <div class="row">
                <div class="col">
                    <h6>Title:</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->title }}" name ="title">
                </div>
                <div class="col">
                    <h6>Slug/Name</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->name }}" name ="name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h6>Excerpt:</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->excerpt }}" name ="excerpt">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <h6>Status:</h6>
                    <select name="status" id="" class="form-control bg-white">
                        <option value="draft">Draft</option>
                        <option value="publish">Publish</option>
                    </select>
                </div>
                <div class="col">
                    <h6>Featured:</h6>
                    <select name="is_featured" id="" class="form-control bg-white">
                        <option value="0" {{ $data->is_featured == 0 ? 'selected' : '' }}>Not-Featured</option>
                        <option value="1" {{ $data->is_featured == 1 ? 'selected' : '' }}>Featured</option>
                    </select>
                </div>
            </div>
            <br>
             <div >
                <div class="row">
                    <div class="col-md-1">
                        <img src="{{ $data->image ? asset('storage/'.$data->image) : asset('img/noimage.png') }}" height="85" width="85"style=" border: 1px solid #555;"id="imageShow">
                    </div>
                    <div class="col-md-11">
                        <label class="input-group-text">Image</label>
                        <input class="form-select" type="file" name="image" id="image">
                    </div>
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
@section('script')
<script type="text/javascript">
  $('document').ready(function () {
    $("#image").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageShow').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
@endsection
