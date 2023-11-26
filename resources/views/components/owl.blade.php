<div id="owl-demo" class="owl-carousel owl-theme">
    @foreach ($staffs as $staff)
        <div class="item text-black"> <img src="{{ asset($staff->image) }}" style="width: 100%; height: 350px; object-fit:cover" alt="">
            <div class="justify-content-center align-items-center p-2 m-0">
                <p class="text-primary text-center">{{ $staff->name }}</p>
                <p class="text-center text-secondary"> {{ $staff->qualification }}</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="https://www.facebook.com"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    <a href="https://www.youtube.com"><i class="fa-brands fa-youtube fa-2x text-danger"></i></a>

                </div>

            </div>


        </div>
    @endforeach


</div>
