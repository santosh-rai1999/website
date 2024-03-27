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
                <div class="col-md-6">
                    <h4 class="text-center text-primary" style="text-decoration: none">ABOUT ADMINISTRATION</h4>
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
                        stepping stones to make every child flourish and excel in their respective set dreams.</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center text-primary mb-3" style="text-decoration: none">DIRECTOR</h4>
                    <div>
                        <img src="{{ asset($about->image) }}" style="width: 350px; height: 280px; object-fit:contain"
                            alt="">
                    </div>
                    <p class="m-1 text-center text-primary">Prof.Sailesh Puri</p>
                    <p class="text-center text-secondary"><i
                            class="fa-solid fa-envelope text-2xl"></i>Sailesh939@gmail.com</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-location-crosshairs text-2xl"></i>
                        Itahari-20,Tarahara,Sunsari</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-phone text-2xl"></i> +977-25-523467 |
                        9825394959</p>
                </div>
                <div class="col-md-2">
                    <h4 class="btn btn-danger btn-sm border">NOTICE</h4>
                    @foreach ($notices as $notice)
                        <div class="p-1 text-secondary">
                            {!! $notice->description !!}
                            <div class="px-1">
                                <span class="text-xm text-black"><i
                                        class="fa-regular fa-clock"></i>{{ $notice->created_at->diffForHumans() }}</span>
                                        <hr>

                            </div>

                        </div>
                    @endforeach
                    <div class="m-3">
                        <a href="/admission">
                            <h5 class="btn btn-primary btn-sm">Admission Form</h5>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section>
        <div class="col-md-12 background border">
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
    </section>
    <div>
        <h3 class="text-center text-red-600">STAFF MEMBERS</h3>
        <x-owl />
    </div>
    <section class="m-2">
        <h3 class="text-center">OUR FACILITIES</h3>
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
                        <a href="{{ route('facilityus') }}" style="text-decoration: none">
                          <div class="text-center">
                            {{ $facility->title}}
                          </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <h3 class="map pt-3">OUR LOCATION</h3>
        <div class="col-md-12 map p-3">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14256.780136043515!2d87.2709044!3d26.7062156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6be014bf542b%3A0x3a57f2fbfd950179!2sItahari-20%20Tarahara!5e0!3m2!1sen!2snp!4v1710263387749!5m2!1sen!2snp" width="80%" height="500" style="border:0;" allowfullscreen="100%" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
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
