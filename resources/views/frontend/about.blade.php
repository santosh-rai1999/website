<x-frontendlayout>
    <section>
        <h4 class="text-center py-2 text-primary" style="text-decoration: none">Message From Director</h4>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-7 mx-5">
                    {!!$about->description!!}
                </div>
                <div class="col-md-3">
                    <img src="{{asset($about->image)}}" style="width: 350px; height: 270px; object-fit:contain" class="mt-4" alt="">
                    <p class="text-center text-primary">Prof.Julliet Rosali</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-envelope text-2xl"></i>Julliet939@gmail.com</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-location-crosshairs text-2xl"></i> Dharan-16 Annapurna Chowk</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-phone text-2xl"></i> +977-25-523467 | 9825394959</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-md-12 p-4 ms-2 background">
            @foreach ($facilities as $index => $facility)
                <div class="row">
                    @if ($index % 2 == 0)
                        <div class="col-md-4 san">
                            <img src="{{ asset($facility->image) }}" alt="">
                            <p class="text-center text-primary">{{ $facility->title }}</p>
                        </div>
                    @else
                        <div class="col-md-4 san order-md-last">
                            <img src="{{ asset($facility->image) }}" alt="">
                            <p class="text-center text-primary">{{ $facility->title }}</p>
                        </div>
                    @endif
                    <div class="col-md-8 py-4">
                        {!! $facility->description !!}
                    </div>
                </div>
            @endforeach

        </div>
    </section>
</x-frontendlayout>
