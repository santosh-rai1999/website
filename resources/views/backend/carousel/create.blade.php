<x-app-layout>
  <div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Carousel Create Page</h5>
            <a href="{{route('carousel.index')}}">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('carousel.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
                <div class="form-group">
                    <label for="description">Content</label>
                    <textarea id="description" class="form-control summernote" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </form>
        </div>
    </div>
  </div>
   </x-app-layout>
