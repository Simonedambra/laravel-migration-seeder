<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/scss/app.scss')

</head>

<body>


    @yield('header')


    @yield('content')


    @yield('footer')

</body>

</html>
