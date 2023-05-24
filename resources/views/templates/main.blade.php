<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
<body>
    {{-- Header Section --}}
    @include('layouts.header')
    {{-- End Header --}}

    {{-- Navbar Section --}}
    @include('layouts.navbar')
    {{-- End Navbar --}}

    {{-- Content Section --}}
    <div class="container mb-3">
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                @yield('content')
            </div>
            <div class="col"></div>
        </div>
    </div>
    {{-- End Content Section --}}
    
    {{-- Footer Section --}}
    @include('layouts.footer')
    {{-- End Footer Section --}}
    
    </body>
</html>