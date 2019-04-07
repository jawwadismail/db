
<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<body>

</body>
</html>
<?php

$name0 = $_POST["text"];  
$name1 = $_POST["text1"];
$name2 = $_POST["text2"];
$name3 = $_POST["text3"];
$name4 = $_POST["text4"];
$name5 = $_POST["text5"];
$name6 = $_POST["text6"];
$name7 = $_POST["text7"];

  

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'project';
  $con = mysqli_connect($host,$user,$pass,$db);
/*  if($con)
    echo "succesful  con<br>";
  else
    echo "unces con<br>";*/

$query = mysqli_query($con,"SELECT * FROM personal WHERE nationality='$name0' and interest_rate <= $name1 and tenure >= $name2 and $name3 >= min_age and $name3 <= max_age and loan_amount >=$name4 and experience_year <=$name5 and salary <=$name6 and residence_year <= $name7 ") or die( mysqli_error($db)); 

 

      $temp = mysqli_affected_rows($con);
     /* if($temp)
      {
        while($rows = mysqli_fetch_array($query))
        { 
        echo "BANK: ".$rows['bank_name']."<br>"; 
        }

      }
*/

      echo "<h2 style='font-size: x-large;' align='center'>Data</h2>
      <br>";

      echo "<table class='table table-bordered table-hover table-responsive'>";
      echo "<thead ><tr><th scope='column'>BANK </th><th scope='column'>MIN_Age</th><th scope='column'>MAX_Age</th><th scope='column'>Tenure</th><th scope='column'>Interest</th></tr></thead>";  
      while($row = mysqli_fetch_array($query))
      { 
      echo "<tr><td>" . $row['bank_name']."</td><td>".$row['min_age']."</td><td>".$row['max_age']."</td><td>".$row['tenure']."</td><td>".$row['interest_rate']."</td></tr>"; 
      }
      
      echo "</table>";





/*   

  if (mysqli_num_rows($query) > 0) 
  {
     while($row = mysqli_fetch_array($query)) 
    {
        echo "Bank: " . $row['bank_name']."<br>";
    }

}*/ 


   


/*$query = mysqli_query($con,"SELECT * FROM signup WHERE mobile = $name5 ");
$row = mysqli_fetch_array($query);
$user = $row['username'];
$pass = $row['password'];

if($name3==$user && $name4 == $pass)
{
  echo "<div style='font-size: large;font-weight: bold;' align='center'>Welcome Mr. $name3</div><br><br>";
  echo "<div style='font-size: large;font-weight: bold;'>You are logged in</div>";
}*/
/*else
echo "NOT CORRECT";*/

/*$sql4 = "SELECT fullname,password FROM signup where mobile =$mobile "; 
$query = mysqli_query($con,$sql4);
$row = mysqli_fetch_array($query)
$name1=$row['fullname'];
$pass1=$row['password'];  

  $query1 = mysqli_query($con,$sql4);

  if($query1)
    echo "Suc";
  else
    echo "UNS";

  if($name1 == $fullname && $pass1 == $password )
    echo "Login succesful";
  else
    echo "LOGIN Unsuccesful";

    /*header("location: dbms1.php");*/

  
?>