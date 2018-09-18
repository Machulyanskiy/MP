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
        <li class="slide-1">
            <img class="img-part-left"  src={{ asset('public/images/plf/mid/01(1).jpg') }} alt="">
            <img class=""  src={{ asset('public/images/plf/mid/01(2).jpg') }} alt="">
            <img class="img-part-right"  src={{ asset('public/images/plf/mid/01(3).jpg') }} alt="">
        </li>
        <li class="slide-2">
            <img class="test-size" src={{ asset('public/images/plf/mid/02.jpg') }} alt="">
        </li>
        <li class="slide-3">
            <img src={{ asset('public/images/plf/mid/03.jpg') }} alt="">
        </li>
        <li class="slide-4">
            <img  src={{ asset('public/images/plf/mid/04.jpg') }} alt="">
        </li>
        <li class="slide-5">
            <img class="indent" src={{ asset('public/images/plf/mid/05(1).jpg') }} alt="">
            <img src={{ asset('public/images/plf/mid/05(2).jpg') }} alt="">
        </li>
        <li class="slide-6">
            <img class="slide-9" src={{ asset('public/images/plf/mid/06.jpg') }} alt="">
        </li>
        <li class="slide-7">
            <img class="nasty" src={{ asset('public/images/plf/mid/06(1).jpg') }} alt="">
            <img src={{ asset('public/images/plf/mid/06(2).jpg') }} alt="">
        </li>
        <li class="slide-7 mobile">
            <img class="indent" src={{ asset('public/images/plf/mid/06(1).jpg') }} alt="">
            <img src={{ asset('public/images/plf/mid/06(2).jpg') }} alt="">
        </li>
        <li class="slide-8">
            <img src={{ asset('public/images/plf/mid/07.jpg') }} alt="">
        </li>
        <li class="slide-9">
            <img class="indent" src={{ asset('public/images/plf/mid/7(1).jpg') }} alt="">
            <img src={{ asset('public/images/plf/mid/7(2).jpg') }} alt="">
        </li>
        <li class="slide-10">
            <img src={{ asset('public/images/plf/mid/08.jpg') }} alt="">
        </li>
        <li class="slide-11">
            <img src={{ asset('public/images/plf/mid/09.jpg') }} alt="">
        </li>
        <li class="slide-12">
            <img src={{ asset('public/images/plf/mid/010.jpg') }} alt="">
        </li>
        <li class="slide-13">
            <img class="indent" src={{ asset('public/images/plf/mid/011(1).jpg') }} alt="">
            <img src={{ asset('public/images/plf/mid/011(2).jpg') }} alt="">
        </li>
        <li class="slide-14">
            <img src={{ asset('public/images/plf/mid/012.jpg') }} alt="">
        </li>
        <li class="slide-15">
            <img src={{ asset('public/images/plf/mid/013.jpg') }} alt="">
        </li>
        <li class="slide-16">
            <img src={{ asset('public/images/plf/mid/014.jpg') }} alt="">
        </li>
        <li class="slide-17">
            <img src={{ asset('public/images/plf/mid/015.jpg') }} alt="">
        </li>
        <li class="slide-18">
            <img src={{ asset('public/images/plf/mid/15.jpg') }} alt="">
        </li>
        <li class="slide-19">
            <img src={{ asset('public/images/plf/mid/16.jpg') }} alt="">
        </li>
    </ul>

@stop
