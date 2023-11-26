<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Gallery Edit Page</h5>
                <a href="{{ route('gallery.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Text</label>
                        <input id="title" class="form-control-file" type="file" name="title"
                            value="{{ $gallery->title }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Text</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>
                    <div>
                        <img src="{{ asset($gallery->image) }}" width="200" alt="">
                    </div>
                    <br>
                    <div>
                        <div class="row">
                            @foreach ($gallery->gallery_images as $gallery)
                                <div class="col-md-4 p-2">
                                    <img src="{{ asset($gallery->name) }}" height="300" style="object-fit: cover"
                                        width="100%" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
</x-app-layout>
