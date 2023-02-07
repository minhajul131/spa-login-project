<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPA Login</title>
        <link rel="stylesheet" href="{{('css/app.css')}}">
    </head>
    <body>

        <div id="app">
            <app-header class="mb-5"></app-header>
            <router-view></router-view>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
