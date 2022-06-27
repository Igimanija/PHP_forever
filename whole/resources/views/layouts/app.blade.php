<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/newstyle.css')}}">
    <script src="{{url('scripts/script.js')}}"></script>
</head>

<body>
    @yield('header')

    <div class="container">
        <div class="col-1">
            @yield('api_add')
            @yield('api_index')
            @yield('api_update')
        </div>
        <div class="col-2">
            @yield('api_display_all')
            @yield('api_destroy')
        </div>        
    </div>
</body>

</html>