<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="csrfToken" content="{{ csrf_token() }}">
        <title>Album</title>

        <link href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
