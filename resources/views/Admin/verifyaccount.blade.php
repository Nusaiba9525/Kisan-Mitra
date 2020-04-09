@extends('Admin.adminhome')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6"><br><br><br>

<table align="center" class="table table-borderless">
<h4>Farmers List</h4><hr><br>
   <tr>   
     @foreach($users as $user)    
    <th><center><img src="/storage/Profile/{{$user->Profile}}" ></center> </th>
     @endforeach      
    </tr>
    <!-- <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> -->
    <tr>
    <th>Farmer ID</th>
    @foreach($users as $user)
    <td>{{$user->FarmerId}}</td>
     @endforeach
    </tr>
    <tr>
    <th>Name</th>
     @foreach($users as $user)
    <td>{{$user->Name}}</td>
     @endforeach
    </tr>
    <tr>
    <th>Place</th>
     @foreach($users as $user)
    <td>{{$user->Place}}</td>
     @endforeach
    </tr>
    <tr>
    <th>Address</th>
     @foreach($users as $user)
    <td>{{$user->Address}}</td>
     @endforeach
    </tr>
    <tr>
    <th>Contact</th>
     @foreach($users as $user)
    <td>{{$user->Contact}}</td>
     @endforeach
    </tr>
       
    <tr>
    <th>Email</th>
     @foreach($users as $user)
    <td>{{$user->Email}}</td>
     @endforeach
    </tr>
    <!--  -->
  </table>
  
</div>
<div class="col-lg-3"></div>
</div>
@endsection