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
                    <img src="https://images.giant-bicycles.com/b_white,c_fill,h_450,q_80,w_600/jhzrzg0aanwscpxcslpt/JPOV_20170526_00429.jpg" alt="" width="300px" height="500px">
                    <img src="" alt="" width="300px" height="500px">
                    <img src="" alt="" width="300px" height="500px">
                </div>
            </section>
        @endsection

    </body>
</html>
