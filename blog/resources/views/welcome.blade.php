@extends('layouts.master')

@section('links')
    @parent
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




