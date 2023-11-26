<x-frontendlayout>
    <section>
        @foreach ($events as $event)
    <div class="col-md-12 border">
        <div class="row">
            <div class="col-md-3 m-2 py-3">
                <img src="{{asset($event->image)}}" style="width: 300px; height: 200px; object-fit:cover" alt="">
                <h6 class="text-center p-2 me-5">{{$event->title}}</h6>
            </div>
            <div class="col-md-6 m-2">
                {!! $event->description!!}
            </div>
        </div>
    </div>
@endforeach
    </section>
</x-frontendlayout>
