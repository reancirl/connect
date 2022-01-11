




<div class="modal fade" id="view_developer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View Developer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" name ="name" value="{{ $data->name }}" disabled  aria-label="Username" required aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title</span>
                        <input type="text" class="form-control" name ="title" value="{{ $data->title }}" disabled  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Content</span>
                        <input type="text" class="form-control" name ="content" value="{{ $data->content }}" disabled  aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Excerpt</span>
                        <input type="text" class="form-control" name ="Excerpt" value="{{ $data->excerpt }}" disabled  aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Featured</span>
                        @if($data->is_featured == null)
                            

                            <input type="text" class="form-control" name ="featured" value="No"disabled  aria-label="Username" aria-describedby="basic-addon1">
                        @else
                          

                            <input type="text" class="form-control" name ="featured" value="Yes "disabled  aria-label="Username" aria-describedby="basic-addon1">
                        @endif
                        
                    </div>
                    
                
            </div>
      </div>
    </div>
  </div>