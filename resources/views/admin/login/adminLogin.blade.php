<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" style="margin-bottom: 0; border-radius: 0">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BOOK RATING</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('/')}}">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('/admin/login')}}"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
      <li><a href="{{url('/user/login')}}"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>
    </ul>
  </div>
</nav>
   
       
      
  <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

  <div class="container" style="margin-top:70px;">

    @if(session()->has('loginError'))
              <div class="col-md-4 col-md-offset-4">
                <h4 class=" alert alert-danger text-center">
                    {{ Session::get('loginError') }}
                </h4>
              </div>
       @endif

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ADMIN LOGIN</h3>
                    </div>
                    <div class="panel-body">
                <form role="form" method="POST" action="{{ url('/admin/auth')}}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="userName" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-lg btn-success btn-block"  name="btn" type="submit" value="Login">
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
