<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="https://seeklogo.com/images/T/takashi-murakami-logo-A3E27DC9E7-seeklogo.com.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cozy Knot Creations</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
