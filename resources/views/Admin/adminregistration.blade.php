@extends('Admin.homemain')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8" style="padding-top: 100px;">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h5 style="padding-top: 12px;">REGISTRATION FORM</h5>
                        </center>
                        <!-- <button class="btn btn-info btn-sm float-right " type="submit ">LOG OUT</button> -->
                    </div>
                    <div class="card-body ">
                        <form action="{{url('register')}}" method="post">
                        @csrf
                            <div class="form-group " style="padding: 5px; ">
                                <label for="name ">Name</label>
                                <input type="text " class="form-control " id="name " name="name " placeholder="Name ">
                            </div>
                            <div class="form-group " style="padding: 5px; ">
                                <label for="place ">Place</label>
                                <input type="text " class="form-control " id="place " name="place " placeholder="Place ">
                            </div>
                            <div class="form-group " style="padding: 5px; ">
                                <label for="address ">Address</label><br>
                                <textarea name="address " class="form-control " id="address " cols="5 " rows="5 "></textarea>
                            </div>
                            <div class="form-group " style="padding: 5px; ">
                                <label for="contact ">Contact</label>
                                <input type="text " class="form-control " id="contact " name="contact " placeholder="Contact ">
                            </div>
                            <div class="form-group " style="padding: 5px; ">
                                <label for="email ">Email</label>
                                <input type="email " class="form-control " id="email " name="email " placeholder="Email ">
                            </div>
                            <div class="form-group " style="padding: 5px; ">
                                <label for="password ">Password</label>
                                <input type="password" class="form-control " id="password " name="password " placeholder="Password ">
                            </div>
                            <div class="form-group " style="padding: 5px; ">
                                <label for="re-password ">Confirm Password</label>
                                <input type="password" class="form-control " id="password " name="cfpassword " placeholder="Confirm Password ">
                            </div>
                            <button class="btn btn-success btn-md float-right " type="submit ">Register</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-2 "></div>

        </div>

        @endsection

 