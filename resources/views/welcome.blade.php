<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MaikoRoss Productions</title>
    <!-- Loading in bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{URL('/css/main.css') }}">
    <link rel="stylesheet" href="{{URL('/css/fixed.css') }}">
    <link rel="stylesheet" href="{{URL('/css/buttons.css')}}">
    <link rel="stylesheet" href="{{URL('/css/cards.css')}}">

    <!-- Loading in font awesome -->
    <script src="https://kit.fontawesome.com/73201f4522.js" crossorigin="anonymous"></script>

    <!-- Jquery loading -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('body').addClass('loaded');
                $('#bgvid').trigger('play');
                $('.navbar').addClass("fixed-top", 500);
                $('body').removeClass("scrollLock", 500);
                $('.hidden').removeClass();
            }, 1500);
        });

    </script>
</head>
<!-- <img src="{{ URL('/images/640x360.png') }}" alt="" title=""> -->

<body class="scrollLock">
    <!-- Beginning of our preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>


    <!-- Beginning of our content. -->
    <div class="content hidden">

        <!-- Start of navbar -->
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="d-flex w-50 order-0">
                <a class="navbar-brand" href="#">
                    <image src="{{URL('/images/MaikoRossProdLogoWit.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <div class="section__box">
                            <a href="#0" class="r-link ai-element ai-element_type1 ai-element1 navItems">
                                <span class="ai-element__label ">Home</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="section__box">
                            <a href="#0" class="r-link ai-element ai-element_type1 ai-element1 navItems">
                                <span class="ai-element__label ">Ons Team</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="section__box">
                            <a href="#0" class="r-link ai-element ai-element_type1 ai-element1 navItems">
                                <span class="ai-element__label ">Contact</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"><a
                    href="{{URL('/login')}}"> Coming Soon</a></span>
        </nav>
        <!-- End of navbar -->

        <!-- Start of front page -->
        <div class="front-page">
            <div class="video-background">
                <div class="video-wrap">
                    <div id="video">
                        <video id="bgvid" preload="metadata" loop muted>
                            <source src="{{ URL('/video/Site Preview V2 (720p).mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <!-- End of video background -->
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
        </div>

        <!-- Start rest of the page -->
        <div class="bg-white contentBody container">

            <div class="klanten">
                <h1 class="text-center">Klanten</h1>

                <div class="container mt-100 mt-60">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245"
                                            class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245"
                                            class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245"
                                            class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245"
                                            class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Joey van Bonkelen</h4>
                                        <small class="text-muted">Streamer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245"
                                            class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Martin Sobhe</h4>
                                        <small class="text-muted">Youtuber</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245"
                                            class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Bobby DE</h4>
                                        <small class="text-muted">Developer</small>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                            <div class="mt-4 pt-2">
                                <div class="team card position-relative d-block text-center">
                                    <div class="image position-relative d-block overflow-hidden">
                                        <img src="https://via.placeholder.com/245"
                                            class="img-fluid rounded" alt="">
                                        <div class="overlay rounded bg-dark"></div>
                                    </div>
                                    <div
                                        class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                        <h4 class="title mb-0">Cristino Murphy</h4>
                                    </div>
                                    <ul class="list-unstyled team-social social-icon social mb-0">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!--end icon-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <hr>

            <div class="container overOns">
                <h1 class="text-center align-middle">Over ons</h1>
                <br>
                <p class="text-center">
                    MaikoRoss Productions is het bedrijf voor alle grote en upcoming YouTubers. Wij ontzorgen de
                    YouTuber van de stress dat komt kijken bij het editten van de video's. MaikoRoss Productions
                    produceert vanuit onbewerkte videobeelden de complete content. Dat wil zeggen een volledig geëditte
                    video inclusief thumbnail.<br><br>

                    Veel Youtubers editten zelf, hebben een freelance editor of een stagiair waarmee zij samenwerken.
                    Youtubers lopen hierbij tegen meerdere problemen aan. Zelf editten kost veel tijd en geeft je minder
                    tijd om creatief bezig te zijn met het bedenken van nieuwe content. Een freelance editor heeft niet
                    24/7 de tijd, want die heeft nog ander werk ernaast. Een stagiair kost veel tijd om te begeleiden en
                    op te leiden. Als de stagiair er eenmaal klaar voor is, dan is hun stageperiode voorbij en ben je
                    hem kwijt.<br><br>

                    Ben jij een Youtuber die geen tijd heeft om zich zorgen te maken over de edits? Heb jij behoefte aan
                    24/7 contact en zekerheid dat jouw content van hoge kwaliteit is. <br>Neem dan nu contact met ons op.
                    <br>
                    <br>
                    <div class="text-center">
                        <div class="section__box">
                            <a href="#0" class="r-link ai-element ai-element_type1 ai-element1 homePageCaption">
                                <span class="ai-element__label ">Neem contact op!</span>
                            </a>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
    <script>
        $(window).scroll(function () {
            $(".arrow").css("opacity", 1 - $(window).scrollTop() / 150);
            $(".caption").css("opacity", 1 - $(window).scrollTop() / 150);
        });

    </script>
</body>

</html>
