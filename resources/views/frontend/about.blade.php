<x-frontendlayout>
    <section>
        <h4 class="text-center py-2 text-primary text-rounded" style="text-decoration: none">Message From Director</h4>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-7 mx-5">
                    {!!$about->description!!}
                </div>
                <div class="col-md-3">
                    <img src="{{asset($about->image)}}" style="width: 350px; height: 270px; object-fit:contain" class="mt-4" alt="">
                    <p class="text-center text-primary"> Prof.Sailesh Puri</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-envelope text-2xl"></i>Sailesh939@gmail.com</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-location-crosshairs text-2xl"></i> Itahari-20,Tarahara,Sunsari</p>
                    <p class="text-center text-secondary"><i class="fa-solid fa-phone text-2xl"></i> +977-25-523467 | 9825394959</p>
                </div>
            </div>
        </div>
    </section>

</x-frontendlayout>
