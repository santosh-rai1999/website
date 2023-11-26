<x-frontendlayout>
    <section>
        <div class="col-md-12 border">
            <div class="row">
                @foreach ($notices as $notice)
                    <div class="col-md-4 p-4 text-danger">
                        {{ $notice->title }}
                    </div>
                    <div class="col-md-6 p-4 text-primary">
                        {{ $notice->description }}
                    </div>
                    <div class="col-md-2 p-4 text-secondary">
                        {{\Carbon\Carbon::parse($notice->date)->format('d-M-y')}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>


</x-frontendlayout>
