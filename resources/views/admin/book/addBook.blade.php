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

  @include('admin.includes.navber')
  

  <div class="container">
    <div class="row">
      <div class="page-header">
        <h1>Add Book</h1>
      </div>
      <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
      <form class="form-horizontal" role="form" method="post" action="{{url('/book/save')}}" name="addBook" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
              <label for="Title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-6">
              <input type="text" name="title" class="form-control" id="Title" placeholder="Title" required>
            </div>
          </div>
           
          <div class="form-group">
              <label for="Author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-6">
              <input type="text" name="author" class="form-control" id="Author" placeholder="Author" required>
            </div>
          </div>

          <div class="form-group">
              <label for="Publisher" class="col-sm-2 control-label">Publisher</label>
            <div class="col-sm-6">
              <input type="text" name="publisher" class="form-control" id="Publisher" placeholder="Publisher" required>
            </div>
          </div>

          <div class="form-group">
              <label for="Price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-6">
              <input type="number" name="price" class="form-control" id="Price" placeholder="Price" required>
            </div>
          </div>

          <div class="form-group">
              <label for="bookImage" class="col-sm-2 control-label">Book image</label>
            <div class="col-sm-6">
              <input type="file"  name="bookImage" accept="image/*">
            </div>
          </div>
                 
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="register">Add Book</button>
          </div>
        </div>
           
          </form>
           
          </div><!-- end for class "row" -->
          </div>

</body>
</html>
