@extends('layouts.app')
@section('links')
    @parent
    <link rel="stylesheet" href="{{asset('css/myProfileStyle.css')}}">
    @endsection
@section('content')
    <div class="container">
        <h1>My Profile</h1>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <div class="card">

                        <img class="image" src="{{asset('images/defPic.png')}}" alt="error_loading_image">
                        <h1 class="title">{{Auth::user()->name}}</h1>
                        <p>{{Auth::user()->email}}</p>
                        <p>{{Auth::user()->type_user}}</p>
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
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                </div>
                                    <input type="text" class="form-control" placeholder="e.g. John Doe"  value="{{Auth::user()->name}}" aria-label="Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Username</span>
                                </div>
                                <input type="text" class="form-control" placeholder="e.g. krishum77" id="username" value="{{Auth::user()->username}}" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-append">

                                    <button class="btn btn-outline-secondary" type="button"  onclick="function genUsername() {
                                     var result           = '';
                                            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                                            var charactersLength = characters.length;
                                            for ( var i = 0; i < Math.floor(Math.random() * (10 - 6)) + 6; i++ ) {
                                                result += characters.charAt(Math.floor(Math.random() * charactersLength));
                                            }
                                            var input = document.querySelector('#username');
                                            input.value = result;
                                    }
                                        genUsername()">Generate</button>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input type="text" class="form-control" placeholder="e.g. example@abc.com" value="{{Auth::user()->email}}" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Phone Number</span>
                                </div>
                                <input type="text" class="form-control" placeholder="e.g. 0612345678" value="{{Auth::user()->phone}}" aria-label="Phone Number" aria-describedby="basic-addon1">
                            </div>
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
@endsection
@section('scripts')
    @parent

@endsection
