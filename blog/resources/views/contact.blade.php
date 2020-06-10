@extends('layouts.master')
@section('content')
<?php //if($_SESSION["type"] == "Standard"):
// Depending on user type different content
?>
<div>
    <form action="">

        <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="Subject">
        <br>
        <textarea>Message us...</textarea>
        <button href="#" type="submit" value="login">SEND</button>

    </form>
</div>
<a id="back_to_top"></a>
@endsection
@section('scripts')
    @parent
@endsection
