<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Edit Page</h5>
                <a href="{{ route('event.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('event.update', $event->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title"
                            value="{{ $event->title }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control summernote" name="description" rows="3">{{ $event->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>
                    <div>
                        <img src="{{ asset($event->image) }}" width="300" alt="">
                    </div>
                    <div class="form-group">
                        <label for="date">Text</label>
                        <input id="date" class="form-control" type="date" name="date"
                            value="{{ $event->date }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
