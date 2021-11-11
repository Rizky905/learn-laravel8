<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <div class="flex h-screen text-gray-900 bg-gray-100">
            @include('layouts.sidebar')
            <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
                <!-- Navbar -->
                @include('layouts.headapp')
                <!-- Main content -->
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<script>
</script>
</html>