<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="https://4.bp.blogspot.com/-I7aa6593uJM/Wp8fy-dOZAI/AAAAAAAABuY/Wm87VUW609M5JMj5pCM-s2CPpkZwbtdNwCLcBGAs/s1600/PGRI.CLR..png" type="image/gif" sizes="16x16">
    <title>
        {{ config('app.name') }}
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
<!--Hero-->
@include('pages.home')
<!--Footer-->
@include('includes.home.footer')
<!-- jQuery if you need it
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
@include('includes.home.script')
</body>
</html>
