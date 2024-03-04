<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @stack('head-scripts')
    @stack('head-css')
</head>
<body>
    
    <div class="container mt-5">
        @yield('content')
    </div>

    @stack('body-script')
</body>
</html>