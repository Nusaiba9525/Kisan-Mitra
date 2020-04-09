@extends('Farmer.homefarmer')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" style="padding-top: 50px;">
                <div class="card" style="border:0px;">
                  
                    <div class="card-body ">
                    <h3 class="card-title">User Registration Form</h3><hr><br><br>
                        <form action="{{url('reg')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="name " class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text " class="form-control " id="name " name="name" placeholder="Name ">
                                </div>
                            </div>
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="place " class="col-sm-2 col-form-label">Place</label>
                                <div class="col-sm-10">
                                <input type="text " class="form-control " id="place " name="place" placeholder="Place ">
                                </div>
                            </div>
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="address " class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                <textarea name="address" class="form-control " id="address " cols="5 " rows="5 "></textarea>
                                </div>
                            </div>
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="contact " class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-10">
                                <input type="text " class="form-control " id="contact " name="contact" placeholder="Contact ">
                                </div>
                            </div>
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="profile" class="col-sm-2 col-form-label">Profile</label>
                                <div class="col-sm-10">
                                <input type="file" class="form-control " id="profile" name="profile">
                                </div>
                            </div>
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="email " class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email " class="form-control " id="email " name="email" placeholder="Email ">
                                </div>
                            </div>
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="password " class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                <input type="password " class="form-control " id="password " name="password" placeholder="Password ">
                                </div>
                            </div>
                            <div class="form-group row" style="padding: 5px; ">
                                <label for="re-password " class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                <input type="password " class="form-control " id="password " name="password" placeholder="Confirm Password ">
                                </div>
                            </div>
                            <button class="btn btn-success btn-md float-right " type="submit ">Register</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-1 "></div>

        </div>

        @endsection

 