<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <div class="container">

            @extends('layouts.app')
            @section('content')

            <div class="banner">
                <img src="{{asset('/img/bikebanner.jpg')}}" alt="">
            </div>

            @endsection

        </div>

    </body>
</html>
