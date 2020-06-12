@extends('layouts.app')
@section('links')
    @parent
    <link rel="stylesheet" href="{{asset('css/aboutUsStyle.css')}}">

@endsection

@section('content')
    <section class="home-about-area pt-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left">
                    <img class="img-fluid" src="{{asset('images/jaki.jpg')}}" alt="">
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <h6>Software developer</h6>
                    <h1 class="text-uppercase">Jacqueline</h1>
                    <p>
                        I am from Sofia, Bulgaria.
                        Where do I live?
                        I am currently living in Eindhoven, Netherlands.
                        What is my occupation?
                        I am a first-year-student in Fontys University and a future software engineer and developer.
                        Which programming languages I have experience with?
                        I have experience working with: C#, JavaScript, CSS, HTML, PHP.</p>
                    <a href="#" class="primary-btn text-uppercase">discover now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about-area pt-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left">
                    <img class="img-fluid" src="{{asset('images/kris.jpg')}}" alt="">
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <h6>Software developer</h6>
                    <h1 class="text-uppercase">Christian</h1>
                    <p>
                        Where am I from?
                        I am from Sofia, Bulgaria.
                        Where do I live?
                        I am currently living in Eindhoven, Netherlands.
                        What is my occupation?
                        I am freshman in Fontys UAS and a future software engineer.
                        Which programming languages I have experience with?
                        I have some experience with different programming languages: C++, Java, Android Java, C#, PHP.</p>
                    <a href="#" class="primary-btn text-uppercase">discover now</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

@endsection
@section('scripts')
    @parent

@endsection
