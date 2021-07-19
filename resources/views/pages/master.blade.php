<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        SMK PGRI INDRAMAYU
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    @include('includes.home.style')
    @include('includes.home.scripthead')
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    @include('includes.home.navbar')
    <div class="pt-24 my-10 lg:my-20">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start sm:text-center text-center md:text-left">
                <p class="uppercase tracking-loose w-full">Lorem ipsum dolor sit amet.</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Lorem ipsum dolor sit amet consectetur.
                </h1>
                <p class="leading-normal text-2xl mb-8 text-center">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Daftar PPDB ONLINE SEKARANG..!
                </button>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
                <div class="sliderAx max-h-full w-auto mx-5">
                    <div id="slider-1" class="container mx-auto">
                        <div class="bg-cover bg-center rounded-md  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
                            <div class="md:w-1/2">
                                <p class="font-bold text-sm uppercase">Services</p>
                                <p class="text-3xl font-bold">Hello world</p>
                                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                            </div>  
                        </div> <!-- container -->
                        <br>
                    </div>
                    
                    <div id="slider-2" class="container mx-auto">
                        <div class="bg-cover bg-top rounded-md h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
                            
                            <p class="font-bold text-sm uppercase">Services</p>
                            <p class="text-3xl font-bold">Hello world</p>
                            <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                            <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                            
                        </div> <!-- container -->
                        <br>
                    </div>
                </div>
                <div  class="flex justify-between w-12 mx-auto pb-2">
                    <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
                    <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
                </div>
            </div>
        </div>
    </div>
<!--Hero-->
@yield('content')
<!--Footer-->
@include('includes.home.footer')
<!-- jQuery if you need it
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
@include('includes.home.script')
</body>
</html>
