@extends('template')

@section('content')
    <section id="description">
        <p id="desc-title">Lorem ipsum dolor sit amet</p>
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

    <ul id="home-album">
        <li>
            <img class="slide-1"  src={{ asset('images/plf/01.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-2" src={{ asset('images/plf/02.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-3" src={{ asset('images/plf/03.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-4" src={{ asset('images/plf/04.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-5" src={{ asset('images/plf/05.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-6" src={{ asset('images/plf/06.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-7" src={{ asset('images/plf/6.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-8" src={{ asset('images/plf/07.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-9" src={{ asset('images/plf/7.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-10" src={{ asset('images/plf/08.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-11" src={{ asset('images/plf/09.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-12" src={{ asset('images/plf/010.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-13" src={{ asset('images/plf/011.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-14" src={{ asset('images/plf/012.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-15" src={{ asset('images/plf/013.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-16" src={{ asset('images/plf/014.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-17" src={{ asset('images/plf/015.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-18" src={{ asset('images/plf/15.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-19" src={{ asset('images/plf/16.jpg') }} alt="">
        </li>
    </ul>

@stop
