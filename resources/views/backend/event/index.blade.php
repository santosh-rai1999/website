<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Events Index Page</h5>
                <a href="{{route('event.create')}}" class="btn btn-primary btn-sm">Create New</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Posted On</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
   </x-app-layout>
