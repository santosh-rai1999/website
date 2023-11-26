<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Events Index Page</h5>
                <a href="{{ route('event.create') }}" class="btn btn-primary btn-sm">Create New</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Posted On</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($event as $event)
                   <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{!! $event->description !!}</td>
                    <td><img src="{{ asset($event->image) }}" width="200" alt=""></td>
                    <td>{{ $event->created_at->format('d-M-Y') }}</td>
                    <td>
                        <form action="{{ route('event.update', $event->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('event.update',$event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                   </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
