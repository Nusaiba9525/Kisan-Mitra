@extends('Admin.adminhome')
@section('content')
<br><br><br><br>
<table align="center" class="table table-striped">

    <tr>
    <th>Product ID</th>
    @foreach($users as $user)
    <td>{{$user->ProductId}}</td>
     @endforeach
    </tr>
    <tr>
    <th>Product Name</th>
     @foreach($users as $user)
    <td>{{$user->ProductName}}</td>
     @endforeach
    </tr>
    <tr> 
    <th>Product Image</th>
     @foreach($users as $user)    
    <td><img src="/storage/Products/{{$user->Image}}"> </td>
     @endforeach      
    </tr>
    <tr>
    <th>Description</th>
     @foreach($users as $user)
    <td>{{$user->Description}}</td>
     @endforeach
    </tr>  
    <tr>
    <th>Price/day</th>
     @foreach($users as $user)
    <td>{{$user->Price}}</td>
     @endforeach
    </tr>
    <form action="" method="post">
    @csrf
    <tr>
       <td></td>
       <td style="text-align:right;"><button class="btn btn-success">Verify</button></td>
    </tr>
    </form>

  </table>
@endsection