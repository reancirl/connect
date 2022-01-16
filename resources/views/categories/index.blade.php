@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Categories
            <a class="btn btn-primary btn-sm" href="{{ route('category.create') }}">Add New</a>
        </h3>
        <hr>

        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th>Slug</th>
                    <th># of Posts</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>
                            {{ $d->name }}
                        </td>
                        <td>
                            {{ $d->slug }}
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="{{ url('category/'.$d->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                            
                            <form action="{{ route('category.destroy',$d->id) }}" method="POST" style="display: inline-block; text-align: center; vertical-align: middle;">
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
			      text: "Are you sure you want to delete this Category?",
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
