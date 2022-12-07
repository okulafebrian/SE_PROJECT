<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/Meal2Go.png">
    <title>Meal2Go - {{ $title ?? 'Home' }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css"
        rel="stylesheet">
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
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#directions'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#ingredients'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
