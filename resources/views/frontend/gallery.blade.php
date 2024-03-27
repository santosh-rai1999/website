<x-frontendlayout>
   <div class="container">
    <div class="row">
          @foreach ($galleries as $gallery)
          <a href="singlegallery/{{ $gallery->id }}" style="text-decoration:none">
                <div class="col-md-3">
                    <img src="{{ asset($gallery->image) }}" class="m-1" height="200px" width="300px"
                        alt="">
                    <div class="text" style="text-align: center">
                        {{ $gallery->title }}
                    </div>

                </div>
            </a>
           </div>

        @endforeach
    </div>
   </div>

</x-frontendlayout>
