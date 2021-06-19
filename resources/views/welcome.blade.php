<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    </head>
    <body class="antialiased">
        <div class="container">
            <h1 class="alert alert-success">Ola mundo</h1>
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/custom.js') }}"></script>
    </body>
</html>
