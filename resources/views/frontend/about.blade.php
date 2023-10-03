<x-frontendlayout>
    <section>
        <div class="container">
            <div class="col-md-12">
                <div class="row gap-10">
                    {{-- <h5>About page</h5>
        <h1>{{$about->title}}</h1> --}}
                    <div class="col-md-8 d-flex justify-content-end gap-5">
                        <div>
                            {!! $about->description !!}
                        </div>
                        <div>
                            <img src="{{ asset($about->image) }}" class="mt-5" height="200" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="background-color:#9e9e9e ;width:2px;height:80%" class="mx-2 mt-5">
                            <div class="px-3">
                               
                            </div>
                        </div>
                        {{-- <h5>{{ $about->title }}</h5> --}}

                    </div>
                </div>

            </div>
        </div>
    </section>
</x-frontendlayout>
