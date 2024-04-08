<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/owl/owl.carousel.css">
    <style>
        .img {
            mix-blend-mode: multiply;
        }

        /* .font {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 60px;

        } */

        .foot {
            background-color: blue;

        }

        .image {
            height: 700px;
            width: 100%;
        }

        .image img {
            height: 650px;
            width: 100%;
            object-fit: cover;
        }


        /* */
        #owl-demo .item {
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 5px;
            text-align: center;
        }

        */ .item img {
            height: 350px;
            width: 60%;
            margin-top: -30px;
            object-fit: cover;
        }

        .san img {
            height: 250px;
            width: 100%;
            mix-blend-mode: multiply;
            object-fit: cover;
            text-decoration: none;

        }


        /* .san img:hover {
            transition: 1s;
            transform: scale(1.1)
        } */

        p {
            margin-bottom: 0;
        }

        .map {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }

        .owl-carousel {
            object-fit: contain;
        }
        .shade img:hover {
            transition: 1s;
            transform: scale(1.1);
        }
        .circle-container {
        width: 210px; /* Adjust the size of the circle as needed */
        height: 250px; /* Adjust the size of the circle as needed */
        border-radius: 50%; /* This creates the circle shape */
        overflow: hidden;
        margin-left: 55px  /* This ensures the image doesn't overflow */
    }

    .circle-container img {
        width: 100%; /* Make the image fill the container */
        height: auto; /* Maintain aspect ratio */
        display: block;
        /* Remove extra space below image */
    }
    /* .gallery-container
    {
        margin: 0;
        padding: 0;
    } */
    .gallery-container img {
        height: 250px;
        width: 100%;
        object-fit: cover;

    }


    </style>
</head>

<body>
    <div class="main">
        <header style="background-color: lightslategray;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 p-2 img">
                        <img src="data:image/jpeg;base64,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"
                            height="200" width="200" alt="">


                    </div>
                    <div class="col-md-8 py-5">
                        <h1 class="font" style="color: brown">Him Shikhar English School<h1>
                                <h5 class="p-1 me-4" style="color:black">"Together We Learn, Together We Grow"</h5>

                    </div>
                    {{-- <div class="col-md-2 d-flex justify-content-center align-items-center ">
                        <h6 class="text-black" style="margin-top: 80%"> Contact no:-+977-25-523467</h6>
                    </div> --}}

                </div>
            </div>
        </header>
        <div>
            <x-navbar-component />
        </div>

        <main class="wrapper">
            {{ $slot }}

        </main>
        <footer class="footer" style="background-color: gray;">
            <div class="container">
                <div class="row p-2">
                    <div class="col-md-4">
                        <h5 class="py-2 text-white">CONTACT US</h5>
                        <p> Him Shikhar English School</p>
                        <p><i class="fa-solid fa-location-crosshairs text-2xl"></i> Itahari-20,Tarahara, Sunsari</p>
                        <p><i class="fa-solid fa-envelope text-2xl"></i> info@himshikharenglish.com</p>
                        <p><i class="fa-solid fa-phone text-2xl"></i> +977-25-523467 | 9825394959</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-white">QUICK LINK</h5>
                        <a href="/" class="text-black m-2" style="text-decoration: none">Home</a><br>
                        <a href="/aboutus" class="text-black m-2" style="text-decoration: none">About</a><br>
                        <a href="/galleryus" class="text-black m-2" style="text-decoration: none">Gallery</a><br>
                        <a href="/notices" class="text-black m-2" style="text-decoration: none">Notice</a><br>
                        <a href="/staffus" class="text-black m-2" style="text-decoration: none">Staffs</a><br>
                        {{-- <a href="" class="text-black">Events</a><br> --}}
                        <a href="/facilityus" class="text-black m-2" style="text-decoration: none">Facilities</a><br>



                    </div>
                    <div class="col-md-4">
                        <h5 class="text-white">ACCOUNT DETAILS</h5>
                    </div>
                </div>

            </div>
            <div class="foot">
                <p class="text-center m-2 text-white">Powered By:Him Shikhar English School</p>
                <p class="text-center px-3 text-white">Itahari-20, Tarahara, Sunsari | +977-25-525163</p>
            </div>

        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/owl/owl.carousel.js"></script>
    <script>
        // $('.owl-carousel').owlCarousel({
        //     loop: true,
        //     margin: 10,
        //     nav: true,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 3
        //         },
        //         1000: {
        //             items: 5
        //         }
        //     }
        // })
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 8,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script>

</body>

</html>
