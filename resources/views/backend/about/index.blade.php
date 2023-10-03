<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Index Page</h5>
                <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">Create New</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($abouts as $about)
                        <tr>
                            <td>{{ $about->id }}</td>
                            <td>{{ $about->title }}</td>
                            <td>{!! $about->description !!}</td>
                            <td>
                                <img src="{{ asset($about->image) }}" width="250" alt="">
                            </td>
                            <td>
                                <form action="{{route('about.destroy',$about->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('about.edit',$about->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
