<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
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
  <form action="{{url('logout')}}" method="post">
             @csrf
                <button class="btn btn-secondary" style="text-align:right;">Log Out</button>
        </form>
  </nav>
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-lg-3">
             
                <div class="row" style="background-image: linear-gradient(grey,white);">
                    <div class="col-lg-12">
                        <div class="nav flex-column nav-pills" id="tab" role="tablist" aria-orientation="vertical" style="padding:50px;">
                            <a class="nav-link active" id="home-tab" href="farmerhome" role="tab">Home</a>
                            <a class="nav-link" id="register-tab" href="farmerregistration" role="tab">Registration</a>
                            <a class="nav-link" id="login-tab" href="farmerlogin" role="tab">Log In</a>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
            @yield('content')
             
        </div>
    </div>
</body>

</html>