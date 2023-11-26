<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Facilities Index</h5>
                <a href="{{ route('facility.create') }}" class="btn btn-primary btn-sm">Add New Services</a>
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
                    @foreach ($facilities as $index=>$facility)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{ $facility->title }}</td>
                            <td>{!! $facility->description !!}</td>
                            <td>
                                <img src="{{ asset($facility->image) }}" width="200" alt="">
                            </td>
                            <td>
                                <form action="{{ route('facility.update', $facility->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('facility.edit', $facility->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
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
