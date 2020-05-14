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
            <br style="clear: both;">
            <section id="sec2">
                <h1 class="h1">With us it is like a hill!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!<br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In enim voluptatibus sunt consequatur pariatur <br>
                libero nam sapiente, optio harum. Ad ullam eveniet dicta sit cum in quasi neque soluta eius!</p>
            </section>

            <section>
                <div class="photos">
                    <div class="more">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTk8BNSzq7FYZcvN1U66xo2GXI1IlWOlSNwh8uIDFncSBa2t9ND&usqp=CAU" height="400px">
                        <div class="look">
                            <h2>Bikes</h2>
                            <button class="btn">Look now</button>
                        </div>
                    </div>
                    <div class="more">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRolmGZEZGioYV9HCMJZWJpHWEYsj-rb72lfUgy82BjUBapD3ez&usqp=CAU" height="400px">
                        <div class="look">
                            <h2>inventory</h2>
                            <button class="btn">Look now</button>
                        </div>
                    </div>
                    <div class="more">
                        <img src="https://u.profitroom.com/2018-aparthotel-czarnagora-pl/thumb/0x700/uploads/APH_atrakcje/DSC_0572.jpg" height="400px">
                        <div class="look">
                            <h2>Adventure</h2>
                            <button class="btn">Look now</button>
                        </div>
                    </div>
                </div>
            </section>
            <br style="clear: both;">
            <section>
                <div class="buy">
                    <img src="https://www.dobrerowery.com/images/2013/rower/bulls/1/mini/100px_bulls_wild_cup-2_532-52643.jpg" alt="">
                    <img src="https://www.dobrerowery.com/images/2019/bmx/1/mini/100px_diamontback_ampt.jpeg" alt="">
                    <img src="https://www.dobrerowery.com/images/2019/rower/diamant/1/mini/100px_diamant_ubari_plus.jpg" alt="">
                    <img src="https://www.dobrerowery.com/images/2011/dzieci/rower/specialized/mini/100px_specialized_HTRK_20_cstr.jpg" alt="">
                    <img src="https://www.dobrerowery.com/images/2013/rower/bulls/1/mini/100px_bulls_wild_cup-2_532-52643.jpg" alt="">
                    <img src="https://www.dobrerowery.com/images/2019/rower/diamant/1/mini/100px_diamant_ubari_plus.jpg" alt="">
                </div>
            </section>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4118.1161997476775!2d7.103380362519576!3d49.477179242928216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4795957cf2ce1ae5%3A0xe10ec515c02e2f62!2sFerienwohnung%20Kim!5e1!3m2!1spl!2spl!4v1589454373544!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        @endsection

    </body>
</html>
