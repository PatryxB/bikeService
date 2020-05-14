<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <div class="banner">
            <img src="{{asset('/img/bikebanner.jpg')}}" alt="">
            <div class="logo"><img src="{{asset('/img/MotoBike.png')}}"></div>
            <div class="banner-text">
                <h1>Start your amazing</h1>
                <h1>journey now</h1>
            </div>
        </div>

        @extends('layouts.app')
        @section('content')
            <section>
                <div>
                    <img src="data:image/jpeg;base64,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" alt="" width="300px" height="500px">
                    <img src="" alt="" width="300px" height="500px">
                    <img src="" alt="" width="300px" height="500px">
                </div>
            </section>
        @endsection

    </body>
</html>
