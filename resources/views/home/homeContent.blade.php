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
  
<div class="container">
  <h2>All books rating</h2>            
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Book ID</th>
        <th>Cover</th>
        <th>Title</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Price</th>
        <th>Rating</th>
        <th>Put rating</th>
      </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
      <tr>
        <td>{{$book->bookId}}</td>
        <td>
          <img src="{{asset($book->bookImage)}}" height="70" width="80">
        </td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->publisher}}</td>
        <td>TK.{{$book->price}}</td>
      @if($book->bookRating)
          <td>{{$book->bookRating}}</td>
      @else
         <td>0</td>
      @endif
        <td>Login for rating</td>
      </tr>
    @endforeach 
      
    </tbody>
  </table>
</div>

</body>
</html>
