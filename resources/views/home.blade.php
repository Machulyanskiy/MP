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
            <img class="slide-1" src={{ asset('images/0001.jpg') }} alt="">
        </li>
        <li>
            <img class="slide-2" src={{ asset('images/0001.jpg') }} alt="">
        </li>
    </ul>

@stop
