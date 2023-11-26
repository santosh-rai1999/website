<x-frontendlayout>
    <section>
        <h4 class="text-center py-2" style="text-decoration: none">About Us</h4>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-7 mx-3 text-secondary">
                    {!!$about->description!!}
                </div>
                <div class="col-md-3">
                    <img src="{{asset($about->image)}}" class="mt-5" alt="">
                    <p class="text-center text-primary">DK Khanal</p>
                </div>
            </div>
        </div>
    </section>
</x-frontendlayout>
