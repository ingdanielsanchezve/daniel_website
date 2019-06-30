@extends('layout')
@section('title', 'Daniel Sánchez - Full Stack Web Developer - PHP / Javascript / Laravel / NodeJs / Angular / VueJs / MySQL / Oracle / MongoDB / Linux / AWS / Docker')
@section('content')
<about-me :profile="profile"></about-me>
<my-links :profile="profile"></my-links>
<my-details :profile="profile"></my-details>
<experiences></experiences>
<education></education>
@include('certification')
@include('recommendations')
<skills></skills>
@include('portfolio')
<contact :profile="profile"></contact>
@endsection