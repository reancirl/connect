@extends('layouts.app')

@section('content')

@include("neighborhoods._createNeighborhood")

<div class="container">
    <div class="row">
        <h3>
            Neighborhoods
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_neighborhood">Add new Neighborhood</button>
        </h3>
        <hr>

        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th width="5%">Image</th>
                    <th width="30%">Title</th>
                    <th>Author</th>
                    <th># of Projects</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>
                            <img src="{{ $d->image ? asset('storage/'.$d->image) : asset('img/noimage.png') }}" alt="image" width="40" height="40">
                        </td>
                        <td>
                            {{ $d->title }}
                        </td>
                        <td>
                            {{ $d->author->name ?? Auth::user()->name }}
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm">View</button>
                            <a href="{{ route('neighborhood.edit',$d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                         

                            <form action="{{ route('neighborhood.destroy',$d->id) }}" method="POST" style="display: inline-block; text-align: center; vertical-align: middle;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-delete" type="button" >Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="append-neighborhood"></div>

@endsection

@section('script')
<script type="text/javascript">
   
    $('.btn-delete').click(function(e){
			swal ({
			    title: "Are you sure?",
			      text: "Are you sure you want to delete this Neighborhood?",
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
