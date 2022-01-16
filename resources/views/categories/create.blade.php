@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="row">
        <h3>
            Add New Category
            <a class="btn btn-primary btn-sm" href="{{ url()->previous() }}">Back</a>
        </h3>

        <form action ="{{ route('category.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" name ="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Slug/Name</span>
                    <input type="text" class="form-control" name ="slug" placeholder="Slug/Name" aria-label="Username" required aria-describedby="basic-addon1">
                </div>
                
                
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
        </form>
        
       
    </div>
</div>
@endsection