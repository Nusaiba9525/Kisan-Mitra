@extends('Farmer.homefarmer')
@section('content')
<style>
        #username,
        #password {
            background-color: rgb(243, 205, 155);
        }
    </style>
  
     <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 offset-md-2 offset-sm-1">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">

                <form class="form-container" id="login-form" method="post" action="{{url('farmer')}}">
                @csrf
                    <div style="border: 2px; border-style: hidden;margin-top: 100px; padding: 50px;">
                        <div class="form-group">
                            <h5>LOGIN TO YOUR ACCOUNT</h5>
                            <hr>
                        </div>
                        <br>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="username" name="username" placeholder="Email">
                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        @if(count($errors)>0)
                          <div class="alert alert-danger">
                           @foreach($errors->all() as $error)
                              {{$error}}
                           @endforeach
                          </div>

                        @endif




                        @if(Session::has('errorMessage'))
                        <div class="alert alert-danger" role="alert">
                        <p>{{session('errorMessage')}}</p>
                        </div>
                        @endif
                        @if(Session::has('msg'))
                        <div class="alert alert-danger" role="alert">
                        <p>{{session('msg')}}</p>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="remember-me" class="text-info" style="color: black;"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <center> <input type="submit" name="submit" class="btn btn-success btn-md" value="submit"></center>
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="#" class="text-info">Register here</a>
                        </div>

                    </div>
                </form>
            </div>
            <div class="offset-lg-2 offset-md-2 offset-sm-1"></div>
        </div>
    </div>
@endsection
