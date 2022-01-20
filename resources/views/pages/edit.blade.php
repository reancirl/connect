@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Edit Page 
            <a class="btn btn-primary btn-sm" href="{{ route('page.index') }}">Back</a>
        </h3>
        <hr>
        <form action="{{ route('page.update',$data->id) }}" method="POST">
            @csrf
            @method('PATCH')
            
            <div class="row">
                <div class="col">
                    <h6>Title</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->title ?? $data->name }}" name ="title">
                </div>
                <div class="col">
                    <h6>Link</h6>
                    <input type="text" class="form-control {{ $data->link == '/' ? '' : 'bg-white' }}" value="{{ $data->link }}" name="link" {{ $data->link == '/' ? 'readonly' : '' }}>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h6>Description</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->description }}" name ="description">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h6>Keywords (Separate by comma)</h6>
                    <input type="text" class="form-control bg-white" value="{{ $data->keywords }}" name="keywords">
                </div>
            </div>
           

            <div class="mt-4">
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection
