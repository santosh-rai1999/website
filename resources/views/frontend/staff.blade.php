<x-frontendlayout>
    <div class="section m-3">
        <div class="col-md-12 border">
            <div class="row">
                @foreach ($staffs as $staff)
                    <div class="col-md-3 san">
                        <img src="{{ asset($staff->image) }}" class="image" alt="">
                        <span class="text-primary d-flex justify-content-center align-items-center">
                            {{ $staff->name }}</span>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook fa-2x"></i></a>
                            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-2x"></i></a>
                            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube fa-2x text-danger"></i></a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

</x-frontendlayout>
