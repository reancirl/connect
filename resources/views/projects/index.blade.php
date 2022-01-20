@extends('layouts.app')

@section('content')
@include('projects._create')
<div class="container">
    <div class="row">
        <h3>
            Projects
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectModal">
                Add New Projects
            </button>
        </h3>
        <hr>

        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th width="5%">Image</th>
                    <th width="30%">Title</th>
                    <th>Neighborhood</th>
                    <th>Developer</th>
                    <th>Address</th>
                    <th>Sales Status</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                         <td>
                            <img src="{{asset('storage/'.$d->image) }}" alt="image" width="40" height="40">
                        </td>
                        <td>
                            {{ $d->title }}
                        </td>
                        <td>
                            {{ $d->neighborhoodsTitle }}
                        </td>
                        <td>
                            {{ $d->devTitle }}
                        </td>
                        <td>
                            {{ $d->address }}
                        </td>
                        <td>
                            {{ $d->sales_status }}
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm">View</button>
                            {{-- <button class="btn btn-primary btn-sm btn-edit" data-url="{{ route('project.edit',$d->id) }}">Edit</button> --}}
                            <a class="btn btn-primary btn-sm" href="{{ route('project.edit',$d->id) }}">Edit</a>
                            
                            <form action="{{ route('project.destroy',$d->id) }}" method="post" style="display: inline-block; text-align: center; vertical-align: middle;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>
                            </form>	
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
<div class="append-projects"></div>

@endsection

@section('script')
<script type="text/javascript">
    $('.btn-edit').click(function(){
        var div = $('.append-projects');
        div.empty();

        var url = $(this).data('url');

        $.ajax({
            url: url,
            success:function(data){
                div.append(data);
                $('#edit_project').modal('show');
            }
        });
    });
    $('.btn-delete').click(function(e){
        swal ({
            title: "Are you sure?",
                text: "Are you sure you want to delete this project?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
        }).then((result) => {
            if (result) {
                $(this).closest('form').submit();
            }
        })
    });
</script>
@endsection
