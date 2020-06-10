@extends('layouts.master')

@section('links')
    @parent
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/indexStyle.css')}}">
@endsection

@section('content')
    <div class="main">
        <h1>Join us</h1>
        <a class="button" href="php/AboutUsPage.php">Click Me</a>
    </div>
    <a id="back_to_top"></a>
    <script type="text/javascript" src="js/backToTop.js"></script>
@endsection
@section('scripts')
    @parent
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@endsection




