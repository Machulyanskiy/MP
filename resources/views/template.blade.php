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
                        <a class="js-scroll-trigger" href="/">Maxim Vitenchuk</a>
                    </li>
                    <li id="portfolio" class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger" href="#">Portfolio<i class="arrow"></i></a>
                        <ul id="portfolio-menu">
                            <li>lorem</li>
                            <li>ipsum</li>
                        </ul>
                    </li>
                    <li class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger" href="#">Exhibitions</a>
                    </li>
                    <li class="mx-0 mx-lg-1">
                      <a class="js-scroll-trigger" href="contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </section>

        <section id="description">
            <p id="desc-title">Lorem ipsum dolor sit amet</p>
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
            <div id="desc-text">
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                <p>do eiusmod tempor incididunt ut labore et dolore magna</p>
                <p>aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <p>ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                <p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                <p>cupidatat non proident, sunt in culpa qui officia deserunt</p>
                <p>mollit anim id est laborum.</p>
            </div>
        </section>

        <section id="container">
            @yield('content')
        </section>

        <footer>
                <p> Created by <i>Red-Eyed Chief</i> in 2018. Photos is Copyright © 2018 Vitenchuk. All rights reserved. </p>
        </footer>
    </body>


    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/mousewheel.js') }}
</html>
