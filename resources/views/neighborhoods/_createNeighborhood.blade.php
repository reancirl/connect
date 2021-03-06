<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="modal fade" id="create_neighborhood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Neighborhood</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action ="{{ route('neighborhood.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                    <input type="text" class="form-control" name ="title" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Slug/Name</span>
                    <input type="text" class="form-control" name ="name" placeholder="Name" aria-label="Username" required aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <span class="input-group-text" id="basic-addon1">Content</span>
                    <textarea name="content" cols="30" rows="10" class="form-control" required id="wysiwyg" required></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Excerpt</span>
                    <input type="text" class="form-control" name ="excerpt" placeholder="Excerpt" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                    <select class="form-select" name="status" id="inputGroupSelect01">
                        <option selected>-- Choose Status --</option>
                        <option value="publish">Publish</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Featured?</label>
                    <select class="form-select" name="is_featured" id="inputGroupSelect01">
                        <option selected>-- Select Feature Status --</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                 <div class="input-group mb-3">
                    <label class="input-group-text">Image</label>
                    <input class="form-select" type="file" name="image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Neighborhood</button>
            </div>
        </form>
      </div>
    </div>
  </div>