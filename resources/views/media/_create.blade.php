<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
        @csrf  
        <div class="modal-header">
          <h5 class="modal-title">Add Media</h5>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <span class="input-group-text" >Title</span>
            <input type="text" class="form-control" name="title"required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Alt Text</span>
            <input type="text" class="form-control" name="alt_text" required>
          </div>
          <div class="input-group mb-3">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" name="path" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>  
    </div>
  </div>
</div>