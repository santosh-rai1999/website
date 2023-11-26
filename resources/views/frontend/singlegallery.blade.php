<x-frontendlayout>
    <div class="container">
        <div class="row">
            @foreach ($gallery_images as $gallery_image)
                <div class="col-md-3 p-3">
                    <img src="{{ asset($gallery_image->name) }}" style="width: 300px; height: 200px; object-fit:cover" alt="">
                </div>
            @endforeach
        </div>
    </div>
</x-frontendlayout>
