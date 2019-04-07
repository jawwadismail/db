<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<h1 style="text-align: center;">Sign Up Here</h1>
<div style="width: 100%;height: 80%;padding-left: 15%;padding-right: 15%;">
<form action="" method="post">

   <div class="form-group">
    <label>FullName</label>
    <input type="text" class="form-control" placeholder="Enter First Name" name="text2">
  </div>



  <div class="form-group">
    <label>Mobile Number</label>
    <input type="Number" class="form-control" placeholder="Enter Your Mobile Number" name="text">
  </div>

  <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" placeholder="Enter Your City" name="text4">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Create Your Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="text5">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-enter Password" name="text6">
  </div>


  

  <?php
/*$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'mydd';
$con = mysqli_connect($host,$user,$pass,$db);

$sql4 = "SELECT * FROM student"; 
$query = mysqli_query($con,$sql4);

echo "<h2 style='font-size: x-large;' align='center'>Data</h2>
<br>";

echo "<table class='table table-bordered table-hover table-responsive'>";
echo "<thead class='thead-dark'><tr><th scope='column'>NAME </th><th scope='column'>AGE</th><th scope='column'>SUBJECT</th></tr></thead>";  
while($row = mysqli_fetch_array($query))
{ 
echo "<tr><td>" . $row['name']."</td><td>".$row['age']."</td><td>".$row['sub']."</td></tr>"; 
}
echo "</table>";*/

echo "<button onclick='funct()'>SUBMIT</button>";
    echo "<script type='text/javascript'>";
    echo "function funct(){";
    echo "window.location='signup1.php'";
    echo "}";
    echo "</script>";


    
  ?> 
</form></div>
</body>
</html>