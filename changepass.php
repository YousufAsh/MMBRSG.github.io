<!doctype html>
<?php
session_start();
include('../connect.php');
error_reporting(0);
$emailPN = $_SESSION['Alumniemail'];
$Alumnipassword = $_SESSION['AlumniPassword'];
$NewApassword = $_POST['NewAlumniPassword'];
$Confirmpassword = $_POST['ConfirmNewAlumniPassword'];
print_r($_SESSION);

if($_POST['submit']){
  if($Confirmpassword == $NewApassword){
    $Alumnipassword=$NewApassword;
      $query="UPDATE `alumni` SET `Apassword`='".$NewApassword."' WHERE `Aemail`='".$emailPN."'";
//NOTICE: NEED TO ADD THE EMAIL TO BE VARIABLE BASED ON THE LOG IN, THIS WILL NEED SESSIONS
      $result=mysqli_query($conn,$query);
      if($result){
        echo "Password changed successfully";
     }
  }
  else {
    echo "error";
  }
  mysqli_close($conn);
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
<div class="topBanner">
  <div><img src="assets/imgs/MBRGI_logo.png"></div>
  <div><img src="assets/imgs/gov-logo.png"></div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a href="javascript:history.back()">
    <button type="button" class="btn btn-primary btn-lg" style="margin:1%;" >Back</button>
    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <!--Navigation-->
                        <li class="nav-item">
                            <a class="nav-link" href="form2.php"  >Update Profile</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="AABoard.php" >
                                    Show Alumni
                                </a>
</li>
                                <li class="nav-item">
                                        <a class="nav-link" href="AABoard.php">Show Board Alumni</a>
                                </li>
                        <li class="nav-item">
                                <a class="nav-link" href="changeEmail.php" >
                                    Change E-Mail
                                </a>
                            </li>
                  
                    </ul>
                </div>
            </nav>
   
    <div class="test" style=" display:flex; justify-content: center; align-items: center; margin-top:70px;">
    <div class="card text-center" style="width:50%; ">
        <div class="card-header">
       
        </div>
        <div class="card-body ">
          <h5 class="card-title" style="padding-bottom:10px;">Change Password</h5>
          <p class="card-text">
              <form action="changepass.php" method="POST">
                  <div class="form-group row" >
                    <label class="col-sm-5 col-form-label">New Password:</label>
                    <div class="col-sm-6">
                    <input type="Password" name="NewAlumniPassword" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-5 col-form-label">Confirm New Password:</label>
                      <div class="col-sm-6">
                      <input type="Password" name="ConfirmNewAlumniPassword" class="form-control" required>
                    </div>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">

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