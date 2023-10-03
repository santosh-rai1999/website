<x-app-layout>
   <div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Staff Index Page</h5>
            <a href="{{route('staff.create')}}" class="btn btn-primary btn-sm">Create New</a>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>SN</th>
                    <th>Staff ID</th>
                    <th>Name</th>
                    <th>Qualification</th>
                    <th>Image</th>
                    <th>Posted On</th>
                    <th>Action</th>
                </tr>
                @foreach ($staffs as $staff)
                <tr>
                    <td>{{$staff->id}}</td>
                    <td>{{$staff->staff_id}}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->qualification}}</td>
                    <td>
                        <img src="{{asset($staff->image)}}" width="150" alt="image">
                    </td>
                    <td>{{$staff->created_at}}</td>
                    <td>
                        <form action="{{route('staff.update',$staff->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{route('staff.edit',$staff->id)}}" class="btn btn-primary btn-sm">Edit</a>
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
