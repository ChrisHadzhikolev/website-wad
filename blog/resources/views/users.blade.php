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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "../displayUsers.php",
                dataType: "html",
                success: function(response){
                    $("#usersTable").html(response);
                }
            });
        });
    </script>
    <div id = "usersTable">
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#delete").click(function(r) {

                $.ajax({
                    type: "POST",
                    url: "../displayUsers.php",
                    dataType: "html",
                    success: function(response){
                        $("#usersTable").html(response);
                    }
                });
            });
        });
    </script>

    <a id="back_to_top"></a>
@endsection
@section('scripts')
    @parent
@endsection




