
<?php
  if (isset($_POST['submit'])) {
    $fullname = $_POST['text2'];
    $mobile = $_POST['text3'];
    $city = $_POST['text4'];
    $password= $_POST['text5'];
    $password1= $_POST['text6'];
    
    $host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'project';
	$con = mysqli_connect($host,$user,$pass,$db);
	if($con)
		echo "succesful  con";
	else
		echo "unces con";
	$sql4 = "INSERT into signup (fullname,mobile,city,password,password1) values('$fullname',$mobile,'$city','$password','password1')"; 
	$query = mysqli_query($con,$sql4);

	if($query)
		echo "Suc";
	else
		echo "UNS";

	/*	header("location: dbms1.php");*/
  }
?>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<body>
	<form action="" method="post">
	   <div class="form-group">
    <label>FullName</label>
    <input type="text" class="form-control" placeholder="Enter First Name" name="text2">
  </div>



  <div class="form-group">
    <label>Mobile Number</label>
    <input type="Number" class="form-control" placeholder="Enter Your Mobile Number" name="text3">
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
	
			<input type="submit" name="submit">
	</form>


</body>
</html>

