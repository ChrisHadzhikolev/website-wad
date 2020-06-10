@extends('layouts.master')
@section('links')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @parent
    <link rel="stylesheet" href="{{asset('css/aboutUsStyle.css')}}">
@endsection
@section('content')
    <div class="software">
        <h1>About us...</h1>
        <h2 style="font-size:20px">Our software company is newly created, which makes us motivated to present our ideas. </h2>
        <p>"Your friendly neighbourhood developers."</p>
    </div>
    <div class="container">
        <img
            src="../jaki.jpg"
            width="100"
            height="50"
            alt="Avatar"
            class="image"

        />
        <div class="overlay">
            <div class="text">Jacqueline</div>

        </div>
    </div>

    <div class="jaki">About me...<br>
        I am from Sofia, Bulgaria.
        Where do I live?
        I am currently living in Eindhoven, Netherlands.
        What is my occupation?
        I am a first-year-student in Fontys University and a future software engineer and developer.
        Which programming languages I have experience with?
        I have experienced working with: C#, Java Script, CSS, HTML, PHP.

    </div>
    <div class="container_kris">

        <img
            src="../kris.jpg"
            width="100"
            height="50"
            alt="Avatar"
            class="image"
        />
        <div class="overlay">
            <div class="text">Christian</div>
        </div>
    </div>
    <div class="kris">About me...<br>
        Where am I from?
        I am from Sofia, Bulgaria.
        Where do I live?
        I am currently living in Eindhoven, Netherlands.
        What is my occupation?
        I am freshman in Fontys UAS and a future software engineer.
        Which programming languages I have experience with?
        I have some experience with different programming languages: C++, Java, Android Java, C#, PHP.
    </div>

    <a id="back_to_top"></a>
    <script type="text/javascript" src="../js/backToTop.js"></script>
@endsection
@section('scripts')
    @parent
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@endsection
