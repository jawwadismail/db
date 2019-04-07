<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<body>


<?php
$name0 = $_POST["text"];  
$name1 = $_POST["text1"];
$name2 = $_POST["text2"];
$name3 = $_POST["text3"];
$name4 = $_POST["text4"];
$name5 = $_POST["text5"];


  

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'project';
  $con = mysqli_connect($host,$user,$pass,$db);


$query= " SELECT * FROM gold WHERE nationality='$name0' and loan_amount >= $name1 and tenure >= $name2 and $name4 >= min_age and $name4 <= max_age and weight >=$name3 and purity <=$name5 " ;  

$query1 = mysqli_query($con,$query) or die( mysqli_error($db));

      echo "<h2 style='font-size: x-large;' align='center'>Data</h2>
      <br>";

      echo "<table class='table table-bordered table-hover table-responsive'>";
      echo "<thead ><tr><th scope='column'>BANK </th><th scope='column'>MIN_Age</th><th scope='column'>MAX_Age</th><th scope='column'>Tenure</th><th scope='column'> purity</th></tr></thead>";  
      while($row = mysqli_fetch_array($query1))
      { 
      echo "<tr><td>" . $row['bank_name']."</td><td>".$row['min_age']."</td><td>".$row['max_age']."</td><td>".$row['tenure']."</td><td>".$row['purity']."</td></tr>"; 
      }
      
      echo "</table>";

?>
</body>
</html>