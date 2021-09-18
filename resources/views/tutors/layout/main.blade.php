<!DOCTYPE html>

<html lang="en">
@include('tutors.layout.head')
<body>


@include('tutors.layout.preloader')

<div id="main-wrapper">
@include('tutors.layout.header')
@include('tutors.layout.navbar')

@yield('body')


@include('tutors.layout.footer')

</div>

@include('tutors.layout.scripts')
