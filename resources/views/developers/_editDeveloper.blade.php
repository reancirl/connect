<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Developer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action ="{{ route('developer.update', $developer->id)}}" method='POST' enctype="multipart/form-data" >
            @csrf
            @method('PATCH')
            <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" name ="name" value="{{ $developer->name }}"  aria-label="Username" required aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title</span>
                        <input type="text" class="form-control" name ="title" value="{{ $developer->title }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Content</span>
                        <input type="text" class="form-control" name ="content" value="{{ $developer->content }}"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Excerpt</span>
                        <input type="text" class="form-control" name ="excerpt" value="{{ $developer->excerpt }}"  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        <select class="form-select" name="status" value="{{ $developer->status }}"  id="inputGroupSelect01">
                            <option value="publish" @php if( $developer->status == "publish") echo 'selected' @endphp>Publish</option>
                            <option value="draft" @php if( $developer->status == "draft") echo 'selected' @endphp>Draft</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Featured?</label>
                        <select class="form-select" name="featured" value="{{ $developer->is_featured }}" id="inputGroupSelect01">
                            <option value="1"  @php if( $developer->is_featured == "1") echo 'selected' @endphp>Yes</option>
                            <option value="0"  @php if( $developer->is_featured == "0") echo 'selected' @endphp>No</option>
                        </select>
                    </div>
                    <div >
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{asset('storage/'.$developer->image) }}" height="85" width="85"style=" border: 1px solid #555;"id="imageShow">
                        </div>
                        <div class="col-md-11">
                            <label class="input-group-text">Image</label>
                            <input class="form-select" type="file" name="image" id="image">
                        </div>
                    </div>
                    
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit Changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
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
   