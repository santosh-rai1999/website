<div>
    <div id="carouselExampleDark" data-bs-ride="carousel" class="carousel carousel-white slide carousel-fade"
        data-interval="500">

        <div class="carousel-inner image">
            @foreach ($carousel as $index => $images)
                @if ($index == 0)
                    <div class="carousel-item active">
                        <img src="{{ asset($images->image) }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-flex align-items-center justify-content-center"
                            style="height: 100%">
                            <div>
                                <h3><span style="color:chocolate">Siddhartha Sishu Sadaan</span></h3>
                                <h5><span style="color:whitesmoke">"Together We Learn, Together We Grow" </span></h5>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{ asset($images->image) }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-flex align-items-center justify-content-center"
                            style="height: 100%">
                            <div>
                                <h3 class="text-white">School Library</h3>
                                <h5><span style="color:chocolate">"Books are the quietest and most constant of friends;
                                        they are the most accessible and wisest
                                        of
                                        counselors, and the most patient of teachers." </span></h5>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach


            {{-- <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/11/14/05/15/academic-1822682_1280.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>"Dedicated to Learning, Committed to Success."</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_1280.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-flex align-items-center justify-content-center"
                    style="height: 100%">
                    <div>
                        <h2><span style="color:chocolate">School Library</span></h2>
                        <p>"Books are the quietest and most constant of friends; they are the most accessible and wisest
                            of
                            counselors, and the most patient of teachers."</p>
                    </div>
                </div>
            </div> --}}

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
