@extends('layouts.app')

@section('content')
@include("developers._create")
<div class="container">
    <div class="row">
        <h3>
            Developers
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_developer">Add new Developer</button>
        </h3>
        <hr>

        <table class="table table-bordered" id="data_table">
            <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th># of Projects</th>
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
                            {{ $d->author->name ?? '' }}
                        </td>
                        <td>
                            {{ date('M d, Y', strtotime($d->created_at)); }}
                        </td>
                        <td>

                        </td>
                        <td>
                            
                            
                            <button class="btn btn-primary btn-sm btn-view" data-url="{{ route('developer.show',$d->id) }}">View</button>
                            <button class="btn btn-secondary btn-sm btn-edit" data-url="{{ route('developer.edit',$d->id) }}">Edit</button>
                                
                            <form action="{{ route('developer.destroy',$d->id) }}" method="POST" style="display: inline-block; text-align: center; vertical-align: middle;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-delete" >Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

<div class="append-developer"></div>

@endsection

@section('script')
<script type="text/javascript">
    $('.btn-view').click(function(){
        var div = $('.append-developer');
        div.empty();

        var url = $(this).data('url');

        $.ajax({
            url: url,
            success:function(data){
                div.append(data);
                $('#view_developer').modal('show');
            }
        });
    });

    $('.btn-edit').click(function(){
        var div = $('.append-developer');
        div.empty();

        var url = $(this).data('url');

        $.ajax({
            url: url,
            success:function(data){
                div.append(data);
                $('#edit_developer').modal('show');
            }
        });
    });

    $('.btn-delete').click(function(e){
			swal ({
			    title: "Are you sure?",
			      text: "Are you sure you want to delete this Developer?",
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
