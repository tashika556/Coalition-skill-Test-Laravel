<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />


</head>

<body>

<header class="header position-relative w-100">
        <div class="container">
            <nav class="cssmenu d-flex align-items-center p-0">
                <ul class="menu_ul d-flex justify-content-end w-100">
<h2 class=" text-white text-center">@yield('page_title')</h2>

               

                </ul>
            </nav>
        </div>
    </header>

    @section('container')
                    @show



<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
</body>

</html>