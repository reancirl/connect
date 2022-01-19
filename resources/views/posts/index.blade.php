@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Posts
            <a class="btn btn-primary btn-sm" href="{{ route('post.create') }}">Add New</a>
        </h3>
        <hr>

        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th width="30%">Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>
                            {{ $d->title }}
                        </td>
                        <td>
                            {{ $d->author->name ?? Auth::user()->name }}
                        </td>
                        <td>

                        </td>
                        <td>
                            {{ $d->status}}
                        </td>
                        <td>
                            {{ date('M d, Y', strtotime($d->created_at)) }}
                        </td>
                        <td>
                            <a class="btn btn-success btn-sm">View</a>
                            <a href="{{ url('post/'.$d->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                            {{-- <a href="{{ route('post.edit',$d->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                            

                            <form action="{{ route('post.destroy',$d->id) }}" method="POST" style="display: inline-block; text-align: center; vertical-align: middle;">
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
			      text: "Are you sure you want to delete this Post?",
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
