<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="modal hide fade" id="edit_project" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('project.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $data->title }}" required aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="basic-addon1">Content</span>
                    <textarea name="content" cols="30" rows="10" class="form-control" required id="wysiwyg" required>{{ $data->content }}</textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Excerpt</span>
                    <input type="text" class="form-control" placeholder="Excerpt" name="excerpt" value="{{ $data->excerpt }}" required aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                    <select class="form-select" required name="status" id="inputGroupSelect01">
                        <option selected>-- Choose Status --</option>
                        <option value="Publish" @php if($data->status == "Publish") echo 'selected' @endphp>Publish</option>
                        <option value="Draft" @php if($data->status == "Draft") echo 'selected' @endphp>Draft</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $data->name }}" required aria-label="Username" aria-describedby="basic-addon1">
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
                    <input type="text" class="form-control" placeholder="Address" name="address" value="{{ $data->address }}" required aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Sales Status</label>
                    <select class="form-select" required name="sales_status" id="inputGroupSelect01">
                        <option selected>-- Choose Sales Status --</option>
                        <option value="For Sale" @php if($data->sales_status == "For Sale") echo 'selected' @endphp>For Sale</option>
                        <option value="Under Development" @php if($data->sales_status == "Under Development") echo 'selected' @endphp>Under Development</option>
                        <option value="Sold" @php if($data->sales_status == "Sold") echo 'selected' @endphp>Sold</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Neighborhoods</label>
                    <select class="form-select" required name="neighborhood_id" id="inputGroupSelect01">
                        <option selected>-- Choose Neighborhoods --</option>
                        @foreach ($neighborhoods as $neighborhoods)
                            <option value="{{ $neighborhoods->id }}" @php if($data->neighborhood_id == $neighborhoods->id) echo 'selected' @endphp>{{ $neighborhoods->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Developers</label>
                    <select class="form-select" required name="developer_id" id="inputGroupSelect01">
                        <option selected>-- Choose Developers --</option>
                        @foreach ($developers as $developers)
                            <option value="{{ $developers->id }}" @php if($data->developer_id == $developers->id) echo 'selected' @endphp>{{ $developers->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js" integrity="sha512-t4CFex/T+ioTF5y0QZnCY9r5fkE8bMf9uoNH2HNSwsiTaMQMO0C9KbKPMvwWNdVaEO51nDL3pAzg4ydjWXaqbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#wysiwyg').trumbowyg();
    });
    $('#edit_project').modal({backdrop: 'static', keyboard: false}) 
</script>