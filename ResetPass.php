<!doctype html>
<?php
session_start();
include('../connect.php');
error_reporting(0);

$Alumniemail = $_SESSION['Alumniemail'];
$Alumnipassword = $_SESSION['Alumnipassword'];

$Alumnienterpassword = $_POST['AlumnienterPassword'];
$NewApassword = $_POST['NewAlumniPassword'];
$Confirmpassword = $_POST['ConfirmNewAlumniPassword'];
if($_SESSION['status']!="Active"){
  header("location:login1.php");
}
else{
$sql="SELECT * FROM `alumni` WHERE `Aemail`='".$Alumniemail."'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);


if($resultCheck>0){
    if($_POST['submit']){
      $hashedPwdCheck = password_verify($Alumnienterpassword , $row['Apassword']);
			if($hashedPwdCheck== true){
        if($NewApassword==$Confirmpassword){
//          echo $_SESSION['Alumnipassword'];
          $NewhashedPwd= password_hash($NewApassword, PASSWORD_DEFAULT);
          $query="UPDATE `alumni` SET `Apassword`='".$NewhashedPwd."' WHERE `Aemail`='".$Alumniemail."'";
          $_SESSION['Alumnipassword']=$NewhashedPwd;
  //          echo $_SESSION['AlumniPassword'];

          $result=mysqli_query($conn,$query);
          if($result){
            echo "Password changed successfully";
          }
        else{
          echo "error";
        }
        }
        else{
          echo "passwords don't match";
        }
      }
      else{
        echo "wrong password";
      }
    }
}
else{
  echo "account doesn't exist";
}
if(isset($_POST['ShowAlumni'])){
  header("Location: showAllAlumni.php");
}
if(isset($_POST['ShowBoardAlumni'])){
  header("Location: ShowBoardAlumni.php");
}
  if(isset($_POST['logoutbtn'])){
    header("Location: logout.php");
  }
  if(isset($_POST['ResetPass'])){
    header("Location: ResetPass.php");
  }
  if(isset($_POST['updateprofile'])){
    header("Location: form2.php");
  }
  if(isset($_POST['changeEmail'])){
    header("Location: changeEmail.php");
  }
    mysqli_close($conn);
print_r($_SESSION);
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
                            <a class="nav-link" href="Index.html"  >Update Profile</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="AA.html" >
                                    Show Alumni
                                </a>
</li>
                                <li class="nav-item">
                                        <a class="nav-link" href="AAServices.html">Show Board Alumni</a>
                                </li>
                        <li class="nav-item">
                                <a class="nav-link" href="Events.html" >
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
          <h5 class="card-title">Reset Password </h5>
          <p class="card-text">
              <form action="ResetPass.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Current Password: </label>
                    <input type="password" name="AlumnienterPassword" class="form-control"  placeholder="Enter current password" style="width:80%; margin:0 auto;">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">New Password: </label>
                      <input type="password" name="NewAlumniPassword" class="form-control" style="width:80%; margin:0 auto;">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm New Password: </label>
                    <input type="password" name="ConfirmNewAlumniPassword" class="form-control" style="width:80%; margin:0 auto;">
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