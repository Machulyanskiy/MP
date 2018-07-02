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
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

    </head>
    <body id="page-top">
        <h1>Will be hot</h1>
        <nav id="main-nav">
            <ul class=" ml-auto" id="nav-container">
                <li class="mx-0 mx-lg-1">
                    <a class="js-scroll-trigger" href="#page-top">Maxim Vitenchuk</a>
                </li>
                <li class="mx-0 mx-lg-1">
                  <a class="js-scroll-trigger" href="#">Portfolio</a>
                </li>
                <li class="mx-0 mx-lg-1">
                  <a class="js-scroll-trigger" href="#">About</a>
                </li>
                <li class="mx-0 mx-lg-1">
                  <a class="js-scroll-trigger" href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </body>
</html>
