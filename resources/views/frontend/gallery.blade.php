<x-frontendlayout>
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4">
                    <a href="singlegallery/{{ $gallery->id }}" style="text-decoration:none">
                      <div class="gallery-container">
                        <img src="{{ asset($gallery->image) }}" class="m-3" style="height: 250px" alt="">
                      </div>
                        <div class="text-center mb-2">
                            {{ $gallery->title }}
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
</x-frontendlayout>
