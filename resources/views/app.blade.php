<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset("css/app.css")}}">


    </head>
    <body style="background-color: whitesmoke">
        <div class="text-center" id="app" style="direction: rtl; ">

        </div>
    </body>
<script src="{{asset("js/app.js")}}"></script>
</html>

