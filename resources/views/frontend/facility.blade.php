<x-frontendlayout>
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
                            <p class="text-center text-primary" style="text-decoration: none;">{{ $facility->title }}</p>
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
