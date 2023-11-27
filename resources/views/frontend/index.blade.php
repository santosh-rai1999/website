<x-frontendlayout>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <h5 class="text-secondary">Notice:</h5>
                </div>
                <div class="col-md-10">
                    <div class="text-primary">
                        <marquee behavior="scroll" direction="right"><i class="fa-solid fa-bullhorn"></i>Admission
                            Open!!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-bullhorn"></i>Admission
                            Open!!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-bullhorn"></i>Admission
                            Open!!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa-solid fa-bullhorn"></i>Admission
                            Open!!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-bullhorn"></i>Admission Open!!!
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-carousel />
    <section>
        <div class="col-md-12" style="background-color: white">
            <div class="row">
                {{-- <div class="col-md-4 m-2 text-secondary">
                    <img src="{{ asset($about->image) }}" class="mt-5" alt="">
                    <p class="text-center text-primary">Principal DK Khanal</p>
                </div> --}}
                <div class="col-md-6">
                    <h4 class="text-center text-primary" style="text-decoration: underline">About Administration</h4>
                    {{-- {!! $about->description !!} --}}
                    <p class="m-4">Siddhartha Sishu Sadaan School, Dharan is the fore runner of quality education in
                        Nepal. To date, the campus has produced more than 500 highly qualified students.The scope of
                        food technology education in Nepal has increased dramatically in the past few years.Dream,
                        Believe, Achieve... are three simple yet very powerful words for our belief-system to succeed.
                        We believe, Dreams are there to be Achieved. Contemporary education is not only about imparting
                        education but it's more about acquiring it with life skills such as Leadership Skills,
                        Communication Skills, Decision-Making Skills, Risk-Taking Skills, Resilience, Creativity etc. to
                        name the few.Once Albert Einstein said "Imagination is more important than Knowledge". "We must
                        encourage kids to think beyond the box e.g. To Be Imaginative. In our society, our young minds
                        and souls are deprived of being Imaginative, hence limiting their growth. Dreams and
                        Imaginations are complementary to each-other and my job as a Principal is to provide them that
                        stepping stones to make every child flourish and excel inn their respective set dreams.</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center text-primary mb-3" style="text-decoration: underline">Director</h4>
                    <div>
                        <img src="{{ asset($about->image) }}" style="width: 322px; height: 200px; object-fit:cover"
                            alt="">
                    </div>
                   <p class="m-1 text-center text-primary">Prof.Julliet Rossali</p>
                   <p class="text-center text-secondary"><i class="fa-solid fa-envelope text-2xl"></i>Julliet939@gmail.com</p>
                   <p class="text-center text-secondary"><i class="fa-solid fa-location-crosshairs text-2xl"></i> Dharan-16 Annapurna Chowk</p>
                   <p class="text-center text-secondary"><i class="fa-solid fa-phone text-2xl"></i> +977-25-523467 | 9825394959</p>
                </div>
                <div class="col-md-2">
                    <h4 class="text-primary" style="text-decoration: underline">Notice</h4>
                    @foreach ($notices as $notice)
                        <div class="p-1 text-secondary">
                            {!! $notice->description !!}
                            <div class="px-1">
                                <span class="text-xm text-black"><i
                                        class="fa-regular fa-clock"></i>{{ $notice->created_at->diffForHumans() }}</span>

                            </div>

                        </div>
                    @endforeach
                    <div class="m-3">
                       <a href="">
                        <h5 class="btn btn-primary btn-sm">Admission Form</h5>
                       </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section>
        <div class="col-md-12 background">
            <div class="row p-3">
                <div class="col-md-3">
                    <div class="text-center 2xs"><i class="fa-solid fa-lightbulb fa-2x"></i></div>
                    <h3 class="text-center">Our Mission</h3>
                    <p>
                        "Our school empowers all our students to dream big, believe in their abilities to achieve the
                        dreams through their academic excellence along with their emotional, social and physical
                        well-being."</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center"> <i class="fa-solid fa-diagram-successor fa-2x"></i></div>
                    <h3 class="text-center">Our Vision</h3>
                    <p>"We understand ever individual child is unique with their own god gifted potentials. We aim to
                        hone their talent to excel in life and make a rich for themselves through love, care and
                        inspiration."</p>
                </div>
                <div class="col-md-5">
                    <div class="text-center"><i class="fa-solid fa-chalkboard-user fa-2x"></i></div>
                    <h3 class="text-center">Teaching-Learning Pedagogies</h3>
                    <li>Project Based Learning</li>
                    <li>Using Multiple Intelligence in teaching-learning</li>
                    <li>Lecture, Role-Play, Interactive-Learning,Group-Works, Task-Based Learning,
                        Cross-Curricular-Method are used while teaching-learning</li>
                    <li>A blend of Eastern and Western educational philosophies are applied</li>
                    <li>Emphasis is on learning by doing,rather than rot learning</li>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div>
        <h3 class="text-center text-secondary font-serif">Staff Members</h3>
        <x-owl />
    </div>
    <section class="border m-2 background">
        <h3 class="text-center">Our Facilities</h3>
        <h6 class="text-center text-secondary">"Providing the best school facilities involves a holistic approach that
            takes into account the physical environment, educational resources, and the well-being of students and
            staff. It's about creating a nurturing and inspiring environment where students can learn, grow, and
            thrive."</h6>
        <div class="col-md-12">
            <div class="row">
                @foreach ($facilities as $facility)
                    <div class="col-md-3">
                        <a href="{{ route('facilityus') }}">
                            <div class="san">
                                <img src="{{ asset($facility->image) }}" class="image-fluid" alt="">
                            </div>
                        </a>
                        <a href="{{ route('facilityus') }}">
                            <div class="text-center text-primary">
                                {{ $facility->title }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- <section>
        <h3 class="text-center">School Events</h3>
        <div class="col-md-12 m-2">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-3">
                        <a href="{{ route('eventus') }}">
                            <div class="san">
                                <img src="{{ asset($event->image) }}" class="image-fluid" alt="">
                            </div>
                        </a>
                        <a href="{{ route('eventus') }}">
                            <div class="text-center text-primary">
                                {{ $event->title }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
 --}}


</x-frontendlayout>
