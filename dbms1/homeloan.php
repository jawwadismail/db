<html>
<head>
  <title>Home Loan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="footer-basic-centered.css">
  <link rel="stylesheet" href="navv.css">
  <link rel="stylesheet" href="userdetails.css">
  <link rel="stylesheet" href="homeloan.css"> 
  <link rel="stylesheet" href="bankblocks.css">

<!--     <style>
      .banks{
            width: 100%;
            height: 700px;
            background-color: red;
            border : 2px solid black;
        }
    </style>
 -->

  
</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="font-size: x-large;font-weight: bolder;" href="#">Lenaloan.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a class="hea" href="#">Home</a></li>
      <li><a class="hea" href="#">Page 1</a></li>
      <li><a class="hea" href="#">Page 2</a></li>
      <li><a class="hea" href="#">Page 3</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a onclick="location.href = 'signup1.php';"><span class="glyphicon glyphicon-user hea"></span > User Profile</a></li>
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

  <div>
    <h1 style="text-align: center;">Home Loan Eligibility Check</h1>
  </div>

  <div class="details">
    <h3>Fill Your Details So That We Can Search The Best Bank Satisfying Your Criteria</h3>
  </div>
  
  <div class="bg">
      <form action="homeloan1.php" method="post">
      <div class="loandetails">
        <div class="form-group">
    <label><h5 class="labelclass">Nationality</h5></label>
    <input type="text" class="form-control" placeholder="Example : Indian/Or" name="text">
  </div>



  <div class="form-group">
    <label><h5 class="labelclass">Loan Amount</h5></label>
    <input type="Number" class="form-control" placeholder="Enter The Amount Here" name="text1">
  </div>

<div class="form-group">
    <label><h5  class="labelclass">Tenure</h5></label>
    <input type="Number" class="form-control" placeholder="Enter Loan Period Here" name="text2">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1"><h5  class="labelclass">Monthly Income</h5></label>
    <input type="Number" class="form-control" id="exampleInputPassword1" placeholder="Example : 4000/5000/etc" name="text3">
  </div>
      </div>

      <div class="loandetails">
            <div class="form-group">
    <label><h5  class="labelclass">Age</h5></label>
    <input type="Number" class="form-control" placeholder="Enter Your Age" name="text4">
  </div>



  <div class="form-group">
    <label><h5  class="labelclass">Gender</h5></label>
    <input type="text" class="form-control" placeholder="Male/Female/Other" name="text5">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h5 class="labelclass">Occupation</h5></label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Occupation" name="text6">
  </div>

  <div class="form-group">
    <label><h5 class="labelclass">Interest rate</h5></label>
    <input type="Number" class="form-control" placeholder="Example : 14%/15%/etc" name="text7">
  </div>
      </div>
 
    <div>  <input type="submit" value="submit" name="submit" class="btn btn-success" style="margin-left: 20px;width: 200px;">Submit</input>
</div>

    </form>
  </div>

<div class="separate">
        <h3>You Can Choose The Bank of Your Interest/Choice</h3>
</div>

<div class="banks">    
  
    <div class="bankblock1">
      <h3 class="bankheading">Banks In India</h3>
    </div>

    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>
    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>
    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>

    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>
    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>
    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>

    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>
    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>
    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>

    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>

    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>

    <div class="box">
      <a href="#" class="boxx" title="Bank Of India">Bank Of India</a>
    </div>

  </div>


</body>
</html>

