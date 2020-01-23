<nav class="navbar navbar-inverse" style="margin-bottom: 0; border-radius: 0">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BOOK RATING</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('/admin/home')}}">Home</a></li>

      <li><a href="{{url('/book/add')}}">Add Book</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('/admin/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
