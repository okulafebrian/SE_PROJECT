<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/Meal2Go.png">
    <title>Meal2Go - {{ $title ?? 'Home' }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
    <div id="app">

        @if (!Auth::guest())
            <x-navbar-user></x-navbar-user>
        @else
            <x-navbar></x-navbar>
        @endif

        <main>
            {{ $slot }}
        </main>

    </div>
    <script src="dist/bundle.js"></script>

</body>

</html>
