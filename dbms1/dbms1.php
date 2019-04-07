<!DOCTYPE html>
<html lang="en">
<head>
  <title>DBMS PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/demo.css">
  <link rel="stylesheet" href="assets/css/footer-basic-centered.css">
  <link rel="stylesheet" href="assets/navv.css">

  </style>
  <style type="text/css">
   

  </style>


</head>
<body>
<!-- NAVBAR for the site -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="font-size: x-large;font-weight: bolder;" href="#">MyLoanCare.in</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a class="hea" href="#">Home</a></li>
      <li><a class="hea" href="#">Page 1</a></li>
      <li><a class="hea" href="#">Page 2</a></li>
      <li><a class="hea" href="#">Page 3</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user hea"></span >User Profile</a></li>
      <li><a cl href="#"><span class="glyphicon glyphicon-menu-hamburger hea" onclick="openNav()"></span > </a></li>
    </ul>
  </div>
</nav>
  
  


<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="bg"></div>




<footer class="footer-basic-centered">

      <p class="footer-company-motto">The company motto.</p>

      <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="#">Blog</a>
        ·
        <a href="#">Pricing</a>
        ·
        <a href="#">About</a>
        ·
        <a href="#">Faq</a>
        ·
        <a href="#">Contact</a>
      </p>

      <p class="footer-company-name">Company Name &copy; 2015</p>

    </footer>





</body>
</html>
