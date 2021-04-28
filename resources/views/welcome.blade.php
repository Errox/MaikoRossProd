<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MaikoRoss Productions</title>
        <!-- Loading in bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{URL('/css/main.css') }}" >
        <link rel="stylesheet" href="{{URL('/css/fixed.css') }}" >
        <link rel="stylesheet" href="{{URL('/css/buttons.css')}}" >
        
        <!-- Loading in font awesome -->
        <script src="https://kit.fontawesome.com/73201f4522.js" crossorigin="anonymous"></script>

        <!-- Jquery loading -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                setTimeout(function(){
                    $('body').addClass('loaded');
                    $('#bgvid').trigger('play');
                    $('.navbar').addClass("fixed-top", 500);
                }, 1500);
            });
        </script>
    </head>
    <!-- <img src="{{ URL('/images/640x360.png') }}" alt="" title=""> -->
    <body>
        <!-- Beginning of our preloader -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>


        <!-- Beginning of our content. -->
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- <div class="container"> -->
                    <a class="navbar-brand" href="#"><image src="{{URL('/images/MaikoRossProdLogoWit.png')}}"></a>
                <!-- </div> -->
            </nav>

            <div class="video-background">
                <div class="video-wrap">
                    <div id="video">
                        <video id="bgvid" preload="metadata" loop muted >
                            <source src="{{ URL('/video/Site Preview V2 (720p).mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="caption text-center">
                <div class="section__box">
                    <a href="#0" class="r-link ai-element ai-element_type1 ai-element1 homePageCaption">
                        <span class="ai-element__label ">Over ons</span>
                    </a>
                </div>
            </div>
            <div class="arrow bounce">
                <i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
            </div>

            <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div>
            <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div> <div id="klanten" class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1> Test header plus </h1>
                    
                </div>
            </div>
        </div>
    <script>
        $(window).scroll(function(){
            $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250); 
            $(".caption").css("opacity", 1 - $(window).scrollTop() / 250); 
        //250 is fade pixels
        }); 
  </script>    
</body>
</html>
