<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('customcss')
</head>

<body>
    <div class="flex flex-col md:flex-row">
            @include("layouts.sidebar")
        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5 h-100">
            @yield('content')
        </div>
    </div>
</body>
</html>