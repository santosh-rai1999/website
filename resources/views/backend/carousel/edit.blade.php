<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Edit Page</h5>
                <a href="{{route(carousel.index)}}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('carousel.update',$carousel->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title" value="{{$carousel->title}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>
                    <div>
                        <img src="{{asset($carousel->image)}}" height="200" alt="">
                    </div>
                    <div class="form-group">
                        <label for="description">Content</label>
                        <textarea id="description" class="form-control summernote" name="description" rows="3">{{$carousel->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
