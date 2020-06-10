@extends('layouts.master')
@section('content')
<div class="container">
    <h1>My Profile</h1>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="text-center">
                <div class="card">

                    <img class="image" src="{{asset('images/defPic.png')}}" alt="error_loading_image">
                    <h1 class="title">FirstName LastName</h1>
                    <p>Username</p>



                    <p>TypeofUser</p>

                    <form method="post" enctype='multipart/form-data'>
                        <p id="imageUpload"><input type="file" name="image"></p>
                        <input class="btn btn-primary" type='submit' value='Save Changes' name='but_upload'>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-9 personal-info">
            <h3>Personal info</h3>
            <form class="form-horizontal" role="form" method="post">
                <div id="response_container"></div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <a>
                            <input type="submit" class="btn btn-primary" value="Edit information" name="edit_info">
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>


<a id="back_to_top"></a>
@endsection
@section('scripts')
    @parent
    @endsection
