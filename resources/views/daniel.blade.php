@extends('layout')
@section('title', 'Daniel Sánchez - Full Stack Web Developer - PHP / Javascript / Laravel / NodeJs / Angular / VueJs / MySQL / Oracle / MongoDB / Linux / AWS / Docker')
@section('content')
<about-me></about-me>
@include('links')
<my-details></my-details>
@include('experience')
@include('education')
@include('certification')
@include('recommendations')
@include('skills')
@include('portfolio')
@include('contact')
@endsection