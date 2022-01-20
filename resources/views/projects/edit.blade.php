@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container">
    <div class="row">
        <h3>
            Edit Project
            <a class="btn btn-primary" href="{{ url()->previous() }}">
                Back
            </a>
        </h3>
        <hr>

        <form action="{{ route('project.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $data->title }}" required>
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="basic-addon1">Content</span>
                <textarea name="content" cols="30" rows="10" class="form-control" required id="wysiwyg">{{ $data->content }}</textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Excerpt</span>
                <input type="text" class="form-control" placeholder="Excerpt" name="excerpt" value="{{ $data->excerpt }}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Status</label>
                <select class="form-select" required name="status" id="inputGroupSelect01">
                    <option value="Draft" @php if($data->status == "Draft") echo 'selected' @endphp>Draft</option>
                    <option value="Publish" @php if($data->status == "Publish") echo 'selected' @endphp>Publish</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Slug/Name</span>
                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $data->name }}" required>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Is Featured?</label>
                <select class="form-select" required name="is_featured" id="inputGroupSelect01">
                    <option selected>-- Choose --</option>
                    <option value="1" @php if($data->is_featured == "1") echo 'selected' @endphp>True</option>
                    <option value="0" @php if($data->is_featured == "0") echo 'selected' @endphp>False</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Address</span>
                <input type="text" class="form-control" placeholder="Address" name="address" value="{{ $data->address }}" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Number of Beds</span>
                <input type="number" class="form-control" placeholder="Beds" name="beds" value="{{ $data->beds }}" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Number of Baths</span>
                <input type="number" class="form-control" placeholder="Baths" name="baths" value="{{ $data->baths }}" required>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Sales Status</label>
                <select class="form-select" required name="sales_status" id="inputGroupSelect01">
                    <option selected>-- Choose Sales Status --</option>
                    <option value="Under Development" @php if($data->sales_status == "Under Development") echo 'selected' @endphp>Under Development</option>
                    <option value="Coming soon" @php if($data->sales_status == "Coming soon") echo 'selected' @endphp>Coming soon</option>
                    <option value="VIP Access" @php if($data->sales_status == "VIP Access") echo 'selected' @endphp>VIP Access</option>
                    <option value="Available" @php if($data->sales_status == "Available") echo 'selected' @endphp>Available</option>
                    <option value="Sold-out" @php if($data->sales_status == "Sold-out") echo 'selected' @endphp>Sold-out</option>
                    <option value="Cancelled" @php if($data->sales_status == "Cancelled") echo 'selected' @endphp>Cancelled</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Neighborhoods</label>
                <select class="form-select" name="neighborhood_id" id="inputGroupSelect01">
                    <option selected value="">-- Choose Neighborhoods --</option>
                    @foreach ($neighborhoods as $neighborhoods)
                        <option value="{{ $neighborhoods->id }}" @php if($data->neighborhood_id == $neighborhoods->id) echo 'selected' @endphp>{{ $neighborhoods->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Developers</label>
                <select class="form-select" name="developer_id" id="inputGroupSelect01">
                    <option selected value="">-- Choose Developers --</option>
                    @foreach ($developers as $developers)
                        <option value="{{ $developers->id }}" @php if($data->developer_id == $developers->id) echo 'selected' @endphp>{{ $developers->title }}</option>
                    @endforeach
                </select>
            </div>
            <div >
                <div class="row">
                    <div class="col-md-1">
                        <img src="{{asset('storage/'.$data->image) }}" height="85" width="85"style=" border: 1px solid #555;"id="imageShow">
                    </div>
                    <div class="col-md-11">
                        <label class="input-group-text">Image</label>
                        <input class="form-select" type="file" name="image" id="image">
                    </div>
                </div>
                    
            </div>
                <br>
            <div class="flex">
                <button type="submit" class="btn btn-primary float-right">Save Changes</button>
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
