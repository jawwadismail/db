<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center;">Login Here </h1>
<div style="width: 100%;height: 80%;padding-left: 15%;padding-right: 15%;">
<form action="dbms1.php" method="post">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label>Mobile Number</label>
    <input type="Number" class="form-control" placeholder="Enter Your Mobile Number">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I'm not a robot</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
</body>
</html>