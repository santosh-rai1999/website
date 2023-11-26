<x-frontendlayout>
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div>
                    <a href="singlegallery/{{ $gallery->id }}" style="text-decoration:none">
                        <div class="col-md-3">
                            <img src="{{ asset($gallery->image) }}" class="m-3" height="200px" width="300px" alt="">
                    <h6 class=" text-center">We took them out for a walk</h6>

                        </div>

                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-frontendlayout>
