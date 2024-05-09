<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  <!-- Start Nav bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Clients</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('addClient') }}">Add</a></li>
        <li><a href="{{ route('clients') }}">Clients</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>
  <!-- End Nav bar -->
<div class="container" style="margin-left: 20px ">
  <h2>Insert Client</h2>

  <form action="{{ route('insertClient') }}" method="POST">
    @csrf
    <label for="clientName">client name:</label><br>
    <input type="text" id="clientName" name="clientName" class="form-control"><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" class="form-control"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="form-control"><br><br>
    <label for="website">website:</label><br>
    <input type="text" id="website" name="website" class="form-control"><br><br>
    <input type="submit" value="Submit">
  </form> 
</div>

</body>
</html>