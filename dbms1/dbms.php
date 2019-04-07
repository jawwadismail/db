<!DOCTYPE html>
<html lang="en">
<head>
  <title>DBMS PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="navv.css">
  <link rel="stylesheet" href="bankblocks.css">
  <link rel="stylesheet" href="abovefooter.css">
  <link rel="stylesheet" href="footer.css">


</head>
<body>
<!-- NAVBAR for the site -->
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
      <li><a onclick="location.href = 'signup1.php';"><span class="glyphicon glyphicon-user hea"></span > Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in hea"></span> Login</a></li>
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

<div style="width: 100%;height: 250px;  background-color: darkgreen;">
     <div class="belownav">
     <h1 style="color: white;">Credit <span style="text-decoration: underline;">Healthy</span> toh Credit <span style="text-decoration: underline;">Wealthy</span> </13></div>
     <div class="belownav1">
          <div class="heading">
             <h5 style="text-align: center;padding-top: 5px;">Let's Start Enter Your Contact and Get the Latest Details in Your Inbox</h5>
          </div>
          <div>
            <div class="form-group">
            <input type="Number" class="form-control" placeholder="Enter Your Mobile Number">
            </div>
              <div style="margin-top: 0px;"><button style="width: 325px;background-color: darkgreen ;margin-top: 0px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;" type="submit" class="btn btn-success">Submit</button></div>

          </div>
     </div>
</div>

<div class="bg">

<div class="loantype">
  <div  class="loanheading"><h1 style="text-align: center;color: white;">What Type of Loan You Want??</h1></div>

  <div class="homediv">
      <div  class="insideloantype"><a href="homeloan.php" style="color: white;">Home Loan</a></div>
      <div><h5>A House is made of walls and beams but a home is made of love and dreams</h5></div>
   </div>

  <div class="homediv">
      <div  class="insideloantype"><a href="eduloan.php" style="color: white;">Education Loan</a></div>
            <div><h5>College is a part of student's dream it shouldn't be part of a financial nightmare</h5></div>
      <div></div>
        </div>

  <div class="homediv">
      <div  class="insideloantype"><a href="goldloan.php" style="color: white;">Gold Loan</a></div>
      <div><h5>Golden rule is that whoever has the gold makes the rule</h5></div>

  </div>

  <div class="homediv">
      <div  class="insideloantype"><a href="vehicleloan.php" style="color: white;">vehicle Loan</a></div>
            <div><h5>Get pre-approved for an vehicle loan today</h5></div>
  </div>

  <div class="homediv">
      <div  class="insideloantype"><a href="businessloan.php" style="color: white;">Bussiness Loan</a></div>
            <div><h5>Key Steps in applying for a bussiness loan</h5></div>

  </div>

  <div class="homediv">
      <div  class="insideloantype"><a href="personalloan.php" style="color: white;">personal Loan</a></div>
            <div><h5>Before you commit to a personal loan we commit our resources to provide you the best deal</h5></div>

  </div>
</div>
</div>

   <div class="theory">
        
         <div class="twodiv">
         <div style="padding-top: 10px;"><h4 style="color: white;padding-left: 40px;">We Ensure That Your Data Is Safe And Secure With Us</h4></div>

        
          <div class="theorydiv"><h5 style="padding-left: 40px;">CreditMantri uses bank grade security to protect your data. The nature of information we process and <br>store is similar to other financial services companies you already use. We use SSL (Secure Socket Layer) for establishing an encrypted link between your browser and our website.</h5></div>

          <div class="theorydiv"><h5 style="padding-left: 40px;">All the data which you transmit to CreditMantri is transmitted securely. We also additionally encrypt data related to account and credit card information while storing it in our system.</h5></div>

          <div class="theorydiv"><h5 style="padding-left: 40px;">Data privacy is important to us. All information we collect is based on user consent. In addition, information about a borrower is shared with lenders only after taking an explicit consent.</h5></div>

          <div class="theorydiv"><h5 style="padding-left: 40px;">CreditMantri will never ask you to make a payment anywhere outside the secure CreditMantri website. DO NOT make payment to any other bank account or wallet or divulge your bank/card details to fraudsters and imposters claiming to be operating on our behalf</h5></div>
          </div>
          
          <div class="imagediv">
             <img class="imagestyle" src="bank.jpg">
          </div>

        </div>
          

        

   </div>

<div class="footer">
    <div class="infirstfooter">
      <div class="insidecontent">
      <a href="dbms.php" style="color: white">Lenaloan.com</a>
      </div>
    </div>
    <div class="infirstfooter">
      <div class="follow">
        <h4 style="color: white; text-align: center">FOLLOW US</h4>
      </div>
      <div>
      <a href="#" class="socialsites"><img src="https://img.icons8.com/color/48/000000/facebook.png"></a></div>
      <div>
      <a href="#" class="socialsites"><img src="https://img.icons8.com/color/48/000000/twitter.png"></a></div>
      <div>
      <a href="#" class="socialsites"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"></a></div>
    </div>
    <div class="infirstfooter">
      <div class="follow">
        <h4 style="color: white; text-align: center; text-decoration: underline;">DOWNLOAD THE APP</h4>
      </div>

      <div class="socialsitesdownload">
            <a href="#"><img src="https://img.icons8.com/color/48/000000/google-plus-squared.png"></a>
      </div>
    </div>
</div>


  <div class="footer1">
       <div class="insidefooter1">
           <h4 style="color: white; text-align: center;text-decoration: underline;font-size: 22px;">COMMUNITY</h4>
          <div class="tablediv">
          <table class="tablestyle">
            <tr>
              <td><a href="#" class="linkcolor">Articles</a></td>
            </tr>

            <tr>
              <td><a href="#" class="linkcolor">Blogs</a></td>
            </tr>

            <tr>
              <td><a href="#" class="linkcolor">About Us</a></td>
            </tr>

            <tr>
              <td><a href="#" class="linkcolor">Contact Us</a></td>
            </tr>
          </table></div>
      </div>
      <div class="insidefooter1">
          <h4 style="color: white; text-align: center;text-decoration: underline;font-size: 22px;">RELATED OFFERS</h4>

          <div class="tablediv">
          <table class="tablestyle">
            <tr>
              <td><a href="#" class="linkcolor">Home Loan</a></td>
            </tr>

            <tr>
              <td><a href="#"class="linkcolor">Education Loan</a></td>
            </tr>

            <tr>
              <td><a href="#" class="linkcolor">Gold Loan</a></td>
            </tr>
            <tr>
              <td><a href="#" class="linkcolor">Personal Loan</a></td>
            </tr>
            <tr>
              <td><a href="#" class="linkcolor">Vehivle Loan</a></td>
            </tr>
            <tr>
              <td><a href="#" class="linkcolor">Business Loan</a></td>
            </tr>
          </table></div>
      </div>
      <div class="insidefooter1">
                  <h4 style="color: white; text-align: center;text-decoration: underline;font-size: 22px;">NEWS LETTER</h4>
                  <h4 style="color: white; text-align: center;font-size: 15px;margin-top: 10px;">Subscribe and Get The Latest Details Directly To Your <span style="text-decoration: underline;">Inbox</span></h4>


                  <div class="form-group" style="margin-right: 20px;margin-left: 20px;">
                     <input type="text" class="form-control" placeholder="Enter Your Email Address">
                  </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 20px;width: 278px;color: white;background-color: orange; font-size: 15px;">Subscribe</button>

      </div>  
   </div>


</body>
</html>
