<!doctype html>
<?php
session_start();
include('../connect.php');
$emailPN = $_POST['emailPN'];
$sql="SELECT * FROM `alumni` WHERE `Aemail`='".$emailPN."'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

       $col=$_SESSION;
      print_r($col);
if($resultCheck>0){
  $_SESSION['Alumniemail'] = $emailPN;
  header("Location: changepass.php");
  //should do an action here that sends an email to the entered email where it includes a link to "changepass.php"
}
else{
  echo "this account doesn't exist :(";
}
 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/global.css">
    <title>.</title>
  </head>


  <body>

      <div class="sidebar">
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-facebook-material-design_3116888.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-linkedin-material-design_3116886.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-twitter-material-design_3116885.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-youtube-material-design_3116882.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-email-material-design_3116889.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-instagram-material-design_3116887.png"></a>
        </div>        
        
<div class="container" style="height:100vh;">
    <a href="javascript:history.back()">
    <button type="button" class="btn btn-primary btn-lg" style="margin:1%;" >Back</button>
    </a>
    <div class="test" style=" display:flex; justify-content: center; align-items: center;">
    <div class="card text-center" style="width:50%; ">
        <div class="card-header">
       
        </div>
        <div class="card-body ">
          <h5 class="card-title">Forgot Your Password</h5>
          <p class="card-text">
              <form action="changepass.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Recovery Contact </label>
                    <input type="text" name="emailPIN" class="form-control"  placeholder="Enter your email or phone number" style="width:80%; margin:0 auto;">
                  </div>
                  <input type="submit" name="submit" value="search" class="btn btn-primary">
                </form>
          </p>
        </div>
        <div class="card-footer text-muted">
     
        </div>
      </div>
    </div>
</div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    </body>
</html>