@extends('Admin.adminhome')
@section('content')
    <div class="container">

        <div class="row">
            <div class="offset-lg-1"></div>
            <div class="col-lg-10" style="padding-top:50px;">
                <div class="card" style="border:0px;">
               
                    <div class="card-body " >
                    <h3 class="card-title"> EQUIPMENT LIST</h3><hr><br><br>

                        <form action="{{url('insert')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="name ">Equipment</label>
                                <div class="col-sm-10">
                                <input type="text " class="form-control " id="name " name="name" value="{{$user->ProductName}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="profile ">Equipment Image</label><br>
                                <div class="col-sm-10">
                                <input type="file" name="profile" class="custom-file" id="profile"><img src="/storage/Products/{{$user->Image}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="description ">Description</label><br>
                                <div class="col-sm-10">
                                <textarea name="description" class="form-control " id="description " cols="5 " rows="5 " value="{{$user->Description}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                             <label class="col-sm-2 col-form-label" for="price ">Price/day</label>
                             <div class="col-sm-10">
                                <input type="text " class="form-control " id="price " name="price" value="{{$user->Price}}">
                                </div>
                            </div>
                            
                            <button class="btn btn-success btn-md float-right " type="submit ">Submit</button>

                    </div>
                </div>
            </div>
            <div class="offset-lg-1"></div>
        </div>

        @endsection