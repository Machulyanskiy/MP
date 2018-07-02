<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maxim Vitenchuk</title>

        <!--<link href="public/css/bootstrap.min.css" rel="stylesheet">-->
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/main.css') }}


    </head>
    <body id="page-top">
        <section id="navbar">
            <nav id="main-nav">
                <ul class="" id="nav-container">
                    <li class="mx-0 mx-lg-1">
                        <a class="js-scroll-trigger" href="#page-top">Maxim Vitenchuk</a>
                    </li>
                    <li class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger" href="#">Portfolio</a>
                    </li>
                    <li class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger" href="#">Exhibitions</a>
                    </li>
                    <li class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </section>

        <section id="container">
            <ul id="home-album">
                <li>
                    <img src={{ asset('images/0001.jpg') }} alt="">
                </li>
                <li>
                    <img src={{ asset('images/0001.jpg') }} alt="">
                </li>
            </ul>
        </section>
    </body>
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/mousewheel.js') }}
</html>
