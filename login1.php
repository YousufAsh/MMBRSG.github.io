<!DOCTYPE HTML>
<?php
session_start();
include('../connect.php');
$Alumniemail = mysqli_real_escape_string( $conn , $_POST['Aemail']);
$Alumnipassword = mysqli_real_escape_string( $conn , $_POST['Apassword']);

$sql="SELECT * FROM `alumni` WHERE `Aemail`='".$Alumniemail."'";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
    $row = mysqli_fetch_assoc($result);
    //de-hashing the password
  //
    #fifth if
    if($Alumniemail == $row['Aemail']){
		//	$hashedPwdCheck = password_verify($Alumnipassword , $row['Apassword']);
			if($Alumnipassword == $row['Apassword']){
        $_SESSION['Alumniemail'] = $row['Aemail'];
        $_SESSION['AlumniPassword'] = $row['Apassword'];
        $_SESSION['Alumniname'] = $row['Aname'];
        $_SESSION['AlumniCompany'] = $row['Acompany'];
        $_SESSION['AlumniDesignation'] = $row['Adesignation'];
        $_SESSION['AlumniYear'] = $row['AgradYear'];
        $_SESSION['AlumniMajor'] = $row['Amajor'];
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