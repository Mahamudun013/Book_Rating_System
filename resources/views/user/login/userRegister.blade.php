<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
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
  

  <div class="container">
    <div class="row">
      <div class="page-header">
        <h1>User Registration Form</h1>
      </div>
      <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
      <form class="form-horizontal" role="form" method="post" action="{{url('/user/save')}}" name="userRegister" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
              <label for="userName" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-6">
              <input type="text" name="userName" class="form-control" id="userName" placeholder="User Name" >
              <span class="text-danger">
                {{ $errors->has('userName') ? $errors->first('userName'): ''}}
              </span>
            </div>
          </div>
           
          <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-6">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
              <span class="text-danger">
                {{ $errors->has('password') ? $errors->first('password'): ''}}
              </span>
            </div>
          </div>

          <div class="form-group">
              <label for="userType" class="col-sm-2 control-label">User Type</label>
            <div class="col-sm-6">
              <select name="userType" class="form-control">
                <option value="regular">Regular</option>
                <option value="nonRegular">Non Regular</option>
              </select>
            </div>
          </div>
       
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="register"> Submit</button>
          </div>
        </div>
           
          </form>
           
          </div><!-- end for class "row" -->
          </div>
  


</body>
</html>
