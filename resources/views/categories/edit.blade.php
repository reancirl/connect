@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="row">
        <h3>
            Edit Category
            <a class="btn btn-primary btn-sm" href="{{ url()->previous() }}">Back</a>
        </h3>
        <hr>
        <form action="{{ route('category.update',$data->id) }}" method="POST">
            @csrf
            @method('PATCH')
            
            <div class="row">
                <div class="col">
                    <h6>Name</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->name }}" name ="name">
                </div>
                <div class="col">
                    <h6>Slug/Name</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->slug }}" name ="slug">
                </div>
            </div>
           

            <div class="mt-4">
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
