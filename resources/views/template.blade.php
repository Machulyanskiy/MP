<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maxim Vitenchuk</title>

        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/main.css') }}


    </head>
    <body id="page-top">
        <section id="navbar">
            <nav id="main-nav">
                <ul class="" id="nav-container">
                    <li class="mx-0 mx-lg-1">
                        <a class="js-scroll-trigger" href="/">Maxim Vitenchuk</a>
                    </li>
                    <li id="portfolio" class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger {{ $menu == 'p' ? 'active' : ''}}" href="#">Portfolio<i class="arrow"></i></a>
                        <ul id="portfolio-menu">
                            <li><a href="plf" class="{{ isset($item) &&  $item == 'plf' ? 'active' : ''}}">Plastic Life Form</a></li>
                            <li><a href="lorem" class="{{ isset($item) &&  $item == 'lorem' ? 'active' : ''}}">Lorem ipsum</a></li>
                        </ul>
                    </li>
                    <li class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger {{ $menu == 'e' ? 'active' : ''}}" href="exhibitions">Exhibitions</a>
                    </li>
                    <li class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger {{ $menu == 'c' ? 'active' : ''}}" href="contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </section>



        <section id="container">
            @yield('content')
        </section>

        <footer>
                <p> Created by <i>Red-Eyed Chief</i> in 2018. Photos is copyright © 2018 Vitenchuk. All rights reserved. </p>
        </footer>
    </body>


    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/mousewheel.js') }}
</html>
