<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kisan Mitra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      
      width: 80%;
      height: 10%;
  }
  </style>
</head>
<body>
<div class="pos-f-t">

  <nav class="navbar navbar-dark bg-dark">

    <ul class="nav">
    <li class="nav-item">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav-item">
       <h3 style="color:#eefae8;"><strong style="color: #009933;">K</strong>isan <strong style="color: #009933;">M</strong>itra</h3>
  </li>

  </ul>
    
  </nav>
  

  <div class="collapse" id="navbarToggleExternalContent">
 
  <nav class="nav nav-pills flex-column">
    <a class="nav-link" href="#item-1">Item 1</a>
    <nav class="nav nav-pills flex-column">
      <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>
      <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>
    </nav>
    <a class="nav-link" href="#item-2">Item 2</a>
    <a class="nav-link" href="#item-3">Item 3</a>
    <nav class="nav nav-pills flex-column">
      <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
      <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
    </nav>
  </nav>


  </div>
</div>
<div class="container-fluid">
<div class="row" style="height:100%;">
  <div class="col-lg-3">  
  <nav class="nav flex-column navbar-light bg-light">
  <div class="navbar-nav"><br><br><br><br>
    <ul class="nav flex-column">
    <li class="nav-item"> <a class="nav-link active" href="#">Home</a> </li><br><br>
    <li class="nav-item"> <a class="nav-link" href="viewadminlogin">Admin</a> </li><br><br>
    <li class="nav-item"> <a class="nav-link" href="viewusers">Users</a> </li><br><br>   
    </ul>
    </div>
   </nav>
</div>
  <div class="col-lg-9">
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
      <img src="img2.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
</div>
</div>
</body>
</html>