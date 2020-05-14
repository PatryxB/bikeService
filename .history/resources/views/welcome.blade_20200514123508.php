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
                <div class="photos">
                    <div class="more">
                        <img src="https://images.giant-bicycles.com/b_white,c_fill,h_450,q_80,w_600/ws6dqdmvkkdlnnvhlqvr/JPOV_20170605_00145.jpg" height="400px">
                        <div class="look">
                            <h2>Bikes</h2>
                            <button class="btn">Look now</button>
                        </div>
                    </div>
                    <div class="more">
                        <img src="https://images.giant-bicycles.com/b_white,c_fill,h_450,q_80,w_600/jhzrzg0aanwscpxcslpt/JPOV_20170526_00429.jpg" height="400px">
                        <div class="look">
                            <h2>inventory</h2>
                            <button class="btn">Look now</button>
                        </div>
                    </div>
                    <div class="more">
                        <img src="https://joyride.pl/wp-content/uploads/2018/05/18740286_1551003108245489_1854662247973467351_n.jpg" height="400px">
                        <div class="look">
                            <h2>Adventure</h2>
                            <button class="btn">Look now</button>
                        </div>
                    </div>
                </div>
            </section>
            <br style="clear: both;"></br>
            <section>
                <h1 class="h1">With us it is like a hill!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                    libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!</p>
            </section>

        @endsection

    </body>
</html>
