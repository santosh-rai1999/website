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

    <link rel="stylesheet" href="/owl/owl.carousel.css">
    <style>
        .img {
            mix-blend-mode: multiply;
        }

        .font {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 60px;

        }

        .color {
            background-color: lightslategray;
        }

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

        main {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            min-height: 100vh;

        }

        #owl-demo .item {
            /* background: #42bdc2; */
            padding: 30px 0px;
            margin: 10px;
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
        }
        .item img {
            height: 300px;
            width: 60%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div class="main">
        <header class="color">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 p-2 img">
                        <img src="https://play-lh.googleusercontent.com/SHE9kapapV5giaqOm7iyVSbCngHJG5zScOq0yvOKdjIZmr3RGSV3v0tyw-BlyxK08cJl"
                            height="200" width="200" alt="">
                    </div>
                    <div class="col-md-10 py-5">
                        <h1 class="font" style="color: brown">Siddhartha Shishu Sadan<h1>
                                <h5 class="p-1 me-4" style="color:brown">"Together We Learn, Together We Grow"</h5>
                    </div>
                </div>
            </div>
            <x-navbar-component />
        </header>

        <main class="wrapper">
            {{ $slot }}

        </main>

        <footer class="footer" style="background-color: gray;">
            <div class="container">
                <div class="row p-2">
                    <div class="col-md-4">
                        <h5 class="py-2">Contact Us</h5>
                        <p> Siddhartha Sishu Sadan</p>
                        <p><i class="fa-solid fa-location-crosshairs text-2xl"></i> Dharan-16 Annapurna Chowk</p>
                        <p><i class="fa-solid fa-envelope text-2xl"></i> info@siddharthashishusadan.com</p>
                        <p><i class="fa-solid fa-phone text-2xl"></i> +977-25-523467 | 9825394959</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Quick Link</h5>
                        <a href="/" class="text-black">Home</a><br>
                        <a href="/aboutus" class="text-black">About</a><br>
                        <a href="" class="text-black">Gallery</a><br>
                        <a href="" class="text-black">Notice</a><br>
                        <a href="" class="text-black">Contact</a><br>

                    </div>
                    <div class="col-md-4">
                        <h5>Location</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14242.648482944307!2d87.2862987!3d26.8188851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef4175e4f26a95%3A0x9b8526c7c4c7bc1c!2sCode%20IT!5e0!3m2!1sen!2snp!4v1694776849040!5m2!1sen!2snp"
                            width="100%ss" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
            <div class="foot">
                <p class="text-center m-2 text-white">Powered By:Code IT</p>
                <p class="text-center px-3 text-white">Prithvi Path, Dharan, Sunsari | +977-25-525163</p>
            </div>

        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-QAc08ipPd7ElgrEsKMj9mFi1LOYhEBBeusKfVSXktZSjlm5BIThey5q7IEYtZVixxC+lIN6CnSZCfI4s00Dq3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script src="/owl/owl.carousel.js"></script>
    <script>
        // $(document).ready(function() {
        //     $(".owl-carousel").owlCarousel();
        // });
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({
                navigation: true
            });

        });
    </script>

</body>

</html>
