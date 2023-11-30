<x-frontend-layout>
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h5>ADMISSION FORM</h5>
            </div>
            <div class="card-body">
              <form action="/postadmission" method="post">
                @csrf
               <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input id="first_name" class="form-control" type="text" name="first_name" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="middle_name">Middle Name</label>
                        <input id="middle_name" class="form-control" type="text" name="middle_name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" class="form-control" type="text" name="last_name" required>
                    </div>
                </div>
               </div>
               <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact">Contact No</label>
                        <input id="contact" class="form-control" type="number" name="contact" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="permanent_address">Permanent Address</label>
                        <input id="permanent_address" class="form-control" type="text" name="permanent_address" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="temporary_address">Temporary Address</label>
                        <input id="temporary_address" class="form-control" type="text" name="temporary_address" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="guardian_name">Guardian</label>
                        <input id="guardian_name" class="form-control" type="text" name="guardian_name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="grade">Grade</label>
                        <input id="grade" class="form-control" type="text" name="grade" required>
                    </div>
                </div>
               </div>


                <button type="submit" class="btn btn-primary btn-sm m-3">Post</button>
              </form>
            </div>
        </div>
    </div>
</x-frontend-layout>
