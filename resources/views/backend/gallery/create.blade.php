<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Gallery</h5>
                <a href="{{ route('gallery.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Gallery Title</label>
                        <input id="title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>

                    <div class="form-group">
                        <label for="images[]">Upload Images</label>
                        <input id="images[]" class="form-control-file" type="file" name="images[]" multiple>
                    </div>
                    <div class="form-group">
                        <label for="date">Enter Date</label>
                        <input id="date" class="form-control" type="integer" name="date">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
