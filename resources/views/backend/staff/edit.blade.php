<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Staff Edit Page</h5>
                <a href="{{route('staff.index')}}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('staff.update',$staff->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="staff_id">Staff ID</label>
                        <input id="staff_id" class="form-control" type="text" name="staff_id" value="{{$staff->staff_id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Staff Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{$staff->name}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>
                    <div>
                        <img src="{{asset($staff->image)}}" width="200" alt="">
                    </div>
                    <div class="form-group">
                        <label for="qualification">Qualification</label>
                        <input id="qualification" class="form-control" type="text" name="qualification" value="{{$staff->qualification}}">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input id="facebook" class="form-control" type="text" name="facebook" value="{{$staff->facebook}}">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input id="instagram" class="form-control" type="text" name="instagram" value="{{$staff->instagram}}">
                    </div>
                    <div class="form-group">
                        <label for="youtube">Youtube</label>
                        <input id="youtube" class="form-control" type="text" name="youtube" value="{{$staff->youtube}}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
   </x-app-layout>
