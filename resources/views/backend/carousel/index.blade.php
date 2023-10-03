<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Carousel Post</h5>
                <a href="{{route('carousel.create')}}">Upload New</a>
            </div>
            <div class="card-body">
               <table class="table">
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Images</th>
                    <th>Content</th>
                    {{-- <th>Action</th> --}}
                </tr>
                @foreach ($carousels as $carousel)
                <tr>
                    <td>{{$carousel->id}}</td>
                    <td>{{$carousel->title}}</td>
                    <td>
                        <img src="{{asset($carousel->image)}}" width="200" alt="">
                    </td>
                    <td>{!!$carousel->description!!}</td>
                </tr>

                @endforeach
               </table>
            </div>
        </div>
    </div>
   </x-app-layout>
