<div id="owl-demo" class="owl-carousel owl-theme">
    {{-- <div class="item"> <img src="/assets/photo/1.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/2.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/3.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/2.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/3.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/1.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/3.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/2.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/1.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/2.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/3.jpeg" alt=""> </div>
    <div class="item"> <img src="/assets/photo/1.jpeg" alt=""> </div> --}}
    @foreach ($staffs as $staff)
        <div class="item text-black border" > <img src="{{ asset($staff->image) }}" alt="">
            <div>
                {{ $staff->name }}</div>
            <div>{{ $staff->qualification }}</div>
        </div>
    @endforeach


</div>
