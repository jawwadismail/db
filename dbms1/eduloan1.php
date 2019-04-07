
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
$name8 = $_POST["text8"];


  

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'project';
  $con = mysqli_connect($host,$user,$pass,$db);
// nat age ten mon_inc loan_amt  qual interest  ssc  interest  admstatus
$query = mysqli_query($con,"SELECT * FROM education WHERE nationality='$name0' and income <= $name1 and tenure >= $name2 and $name1 >= age_min and $name1 <= age_max and loan_amount >=$name4 and qualification <=$name5 and interest_rate <=$name7 and ssc <= $name6 and adm_status='$name8' ") or die( mysqli_error($db)); 

      echo "<h2 style='font-size: x-large;' align='center'>Data</h2>
      <br>";

      echo "<table class='table table-bordered table-hover table-responsive'>";
      echo "<thead ><tr><th scope='column'>BANK </th><th scope='column'>MIN_Age</th><th scope='column'>MAX_Age</th><th scope='column'>Tenure</th><th scope='column'>Interest</th></tr></thead>";  
      while($row = mysqli_fetch_array($query))  
      { 
      echo "<tr><td>" . $row['bank_name']."</td><td>".$row['age_min']."</td><td>".$row['age_max']."</td><td>".$row['tenure']."</td><td>".$row['interest_rate']."</td></tr>"; 
      }
      
      echo "</table>";

?>