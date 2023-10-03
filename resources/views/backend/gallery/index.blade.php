<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Gallery Update</h5>
                <a href="{{route('gallery.create')}}" class="btn btn-primary btn-sm">Upload New Image</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Images</th>
                        <th>Posted On</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($gallerys as $gallery)
                    <tr>
                        <td>{{$gallery->title}}</td>
                        <td>
                            <img src="{{asset($gallery->image)}}" width="180" alt="">
                        </td>
                        <td>{{$gallery->created_at->format('d-M-Y')}}</td>
                        <td>
                            <form action="{{route('gallery.update',$gallery->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('gallery.edit',$gallery->id)}}" class="btn btn-primary btn-sm">Edit</a>
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
