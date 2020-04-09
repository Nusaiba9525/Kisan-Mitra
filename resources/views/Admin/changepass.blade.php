@extends('Admin.adminhome')
@section('content')


<style>
        #username,
        #password {
            background-color: rgb(243, 205, 155);
        }
    </style>

     <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 ">

            </div>

            <div class="col-lg-8">

                <form class="form-container"  method="post" action="{{url('passupd')}}">
                @csrf  
                <div style="border: 2px; border-style: hidden;margin-top: 50px; padding: 50px;">
                        <div class="form-group">
                            <h5>Change Password</h5>
                            <hr>
                        </div>
                        <br>
                    
                        <div class="form-group">
                            <label for="password">Current Password</label>
                            <input type="password" class="form-control" id="password" name="cpassword">
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password" name="cfpassword">
                        </div>
                        @if(Session::has('msg'))
                        <div class="alert alert-danger" role="alert">
                        <p>{{session('msg')}}</p>
                        </div>
                        @endif
                        <div class="form-group">
                            <center> <input type="submit" name="submit" class="btn btn-success btn-md" value="Save"></center>
                        </div>
                       

                    </div>
                </form>
            </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>

    @endsection