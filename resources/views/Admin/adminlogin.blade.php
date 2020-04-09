<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisan Mitra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
        #username,
        #password {
            background-color: rgb(243, 205, 155);
        }
    </style>
</head>
<body>
  
  
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-3 offset-md-2 offset-sm-1">
            </div>
            <div class="col-lg-5 col-md-8 col-sm-10 col-xs-12">

                <form class="form-container" id="login-form" action="{{url('adminlogin')}}" method="post">
                @csrf
                    <div style="border: 2px; border-style: hidden;margin-top: 100px; padding: 50px;">
                        <div class="form-group">
                            <h5>LOGIN TO YOUR ACCOUNT</h5>
                            <hr>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <i class="fas fa-Person fill"></i>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
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
                        

                    </div>
                </form>
            </div>
            <div class="offset-lg-4 offset-md-2 offset-sm-1"></div>
        </div>
    </div>

</body>
</html> 