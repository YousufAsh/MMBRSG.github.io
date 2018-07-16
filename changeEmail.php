<!doctype html>
<?php
include('../connect.php');
error_reporting(0);

session_start();

$Alumniemail = $_SESSION['Alumniemail'];
$Alumnipassword = $_SESSION['Alumnipassword'];
$Alumninewemail = strtolower($_POST['Alumninewemail']);
$AlumniCurrentpassword = $_POST['AlumnicurrentPassword'];

//print_r($_SESSION);
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

      $sql="SELECT * FROM `alumni` WHERE `Aemail`='".$Alumninewemail."'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck>0){
        echo "email already used!";
      }
      else{
        $hashedPwdCheck = password_verify($AlumniCurrentpassword , $row['Apassword']);
  			if($hashedPwdCheck== true){
          $_SESSION['Alumniemail']=$Alumninewemail;
          print($_SESSION['Alumniemail']);
          $query="UPDATE `alumni` SET `Aemail`='".$Alumninewemail."' WHERE `ID`='".$row['ID']."'";
    //NOTICE: NEED TO ADD THE EMAIL TO BE VARIABLE BASED ON THE LOG IN, THIS WILL NEED SESSIONS
          $result=mysqli_query($conn,$query);
          if($result){
              echo "Email changed successfully";
            }
            else{
              echo "unexpected error";
            }
          }
          else {
            echo "error, incorrect password";
          }
        }
      }
}
else{
  echo "email doesn't exist";
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
          <h5 class="card-title" style="padding-bottom:10px;">Change Email</h5>
          <p class="card-text">
              <form action="changeEmail.php" method="POST">
                  <div class="form-group row" >
                    <label class="col-sm-5 col-form-label">New Email:</label>
                    <div class="col-sm-6">
                    <input type="text" name="Alumninewemail" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-5 col-form-label">Password:</label>
                      <div class="col-sm-6">
                      <input type="Password" name="Alumnicurrentpassword" class="form-control" required>
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