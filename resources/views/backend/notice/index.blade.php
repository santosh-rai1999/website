<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Notice Index Page</h5>
                <a href="{{route('notice.create')}}" class="btn btn-primary btn-sm">Create New</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Posted On</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($notices as $notice)
                    <tr>
                        <td>{{$notice->id}}</td>
                        <td>{{$notice->title}}</td>
                        <td>{{$notice-> description}}</td>
                        <td>{{\Carbon\Carbon::parse($notice->date)->format('d-M-y')}}</td>
                        {{-- <td>{{ \Carbon\Carbon::parse($notice->created_at)->format('d-M-y') }}</td> --}}
                        <td>{{$notice->created_at->format('d-Y-M')}}</td>
                        <td>
                            <form action="{{route('notice.destroy',$notice->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('notice.edit',$notice->id)}}" class="btn btn-primary btn-sm">Edit</a>
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
