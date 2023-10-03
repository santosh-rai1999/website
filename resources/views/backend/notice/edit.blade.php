<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Notice Edit Page</h5>
                <a href="{{ route('notice.index') }}">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('notice.update', $notice->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Text</label>
                        <input id="date" class="form-control" type="date" name="date">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
            </form>

        </div>
    </div>
</x-app-layout>
