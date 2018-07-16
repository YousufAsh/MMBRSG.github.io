<!DOCTYPE HTML>
<?php
session_start();
include('../connect.php');
$Alumniemail = strtolower($_POST['Aemail']);
$Alumnipassword = mysqli_real_escape_string( $conn , $_POST['Apassword']);

if(isset($_POST['submit'])){
$_SESSION['status']="Active";

$sql="SELECT * FROM `alumni` WHERE `Aemail`='".$Alumniemail."'";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if($resultCheck>0){
    if($Alumniemail == $row['Aemail']){
			$hashedPwdCheck = password_verify($Alumnipassword , $row['Apassword']);
			if($hashedPwdCheck== true){
        $_SESSION['AID']= $row['ID'];
        $_SESSION['Alumniemail'] = $row['Aemail'];
        $_SESSION['Alumnipassword'] = $row['Apassword'];
        $_SESSION['AlumniFname'] = $row['AFname'];
        $_SESSION['AlumniLname'] = $row['ALname'];
        $_SESSION['AlumniGender']=$row['Gender'];
        $_SESSION['AlumniCompany'] = $row['Acompany'];
        $_SESSION['AlumniDesignation'] = $row['Adesignation'];
        $_SESSION['GradYear'] = $row['AgradYear'];
        $_SESSION['AMajor'] = $row['Amajor'];
        $_SESSION['PhoneNum'] = $row['phonenum'];
        $_SESSION['checkbox'] = $row['checkbox'];
        $_SESSION['checkbox'] = $row['checkbox'];
        $_SESSION['roleMBRSG'] = $row['roleMBRSG'];
        $_SESSION['biography'] = $row['biography'];
        $_SESSION['AProfilePic'] = $row['Apicture'];
      //        $col=$_SESSION;
      //      print_r($col);

        header("Location: form2.php");
    }
			else{
        echo "wrong password";
			}
			}
}
  else {
    echo "User doesn't exist";
  }
}
if(isset($_SESSION['logoutmsg']))
echo $_SESSION['logoutmsg'];


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
          <h5 class="card-title" style="padding-bottom:10px;">Log In</h5>
          <p class="card-text">
              <form action="login1.php" method="POST">
                  <div class="form-group row" >
                    <label class="col-sm-5 col-form-label">Email: </label>
                    <div class="col-sm-6">
                    <input type="email" name="Aemail" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-5 col-form-label">Password: </label>
                      <div class="col-sm-6">
                      <input type="Password" name="Apassword" class="form-control" required>
                    </div>
                    </div>
                    <input type="submit" name="submit" value="Log In" class="btn btn-primary">

                </form>
          </p>
        </div>
        <div class="card-footer text-muted">
          <small><a href="forgotpass.php">Forgot Password?</a></small>
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