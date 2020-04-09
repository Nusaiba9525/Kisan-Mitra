@extends('Admin.adminhome')
@section('content')
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
 
    </tr>
 
    <tr>
       <td></td>
  <td><a href="{{url('del/'.$user->ProductId)}}">delete</a><br><a href="{{url('update/'.$user->ProductId)}}">Update</a></td>
    </tr>
    
    @endforeach
  </table>
@endsection