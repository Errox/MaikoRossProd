<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MaikoRoss Productions</title>
        <!-- Loading in bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{URL('/css/main.css') }}" >
        <link rel="stylesheet" href="{{URL('/css/fixed.css') }}" >
        
        <!-- Loading in font awesome -->
        <script src="https://kit.fontawesome.com/73201f4522.js" crossorigin="anonymous"></script>
    </head>
    <!-- <img src="{{ URL('/images/640x360.png') }}" alt="" title=""> -->
    <body>
        <nav class="navbar navbar-dark fixed">
            <a class="navbar-brand mx-auto" href="#"><image src="{{URL('/images/MaikoRossProdLogoWit.png')}}"></a>
        </nav>

        <div class="video-background">
            <div class="video-wrap">
                <div id="video">
                    <video id="bgvid" autoplay loop muted>
                        <source src="{{ URL('/video/Site Preview V2 (720p).mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div id="course" class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1> Test header plus </h1>
                <p class="lead"> NDWUIAHDUWAHDUIWAHDUWAIH hWUDIHA hwdui hdwuaiA WHui udhqwih uiqd hu </p>
            </div>
        </div>

    </body>
</html>
