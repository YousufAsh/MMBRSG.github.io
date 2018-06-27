<!doctype html>
<?php
  include('../connect.php');
  error_reporting(0);
//  mysql_select_db("update alumni",$conn);

if(isset($_POST['submit']))
{
$Alumniemail = mysqli_real_escape_string( $conn , $_POST['Alumniemail']);
$Alumnipassword = mysqli_real_escape_string( $conn , $_POST['AlumniPassword']);
$Alumniname = mysqli_real_escape_string( $conn , $_POST['Alumniname']);

  if(!filter_var($Alumniemail, FILTER_VALIDATE_EMAIL)){
    header("Location: AddEmail.php?AddEmail=email");
    exit();
  }
  else{
    $sql="SELECT * FROM `alumni` WHERE `Aemail`='".$Alumniemail."'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
      header("Location: AddEmail.php?AddEmail=emailAlreadyUsed");
      exit();
      }
      else{
        //hashing the Password
        //$hashedPwd= password_hash($Alumnipassword, PASSWORD_DEFAULT);
        //insert the user into the database
        $sql = "INSERT into `alumni` (`Aemail`, `Apassword`, `Aname`)
        values ('$Alumniemail', '$Alumnipassword', '$Alumniname')";

        mysqli_query($conn, $sql);
          header("Location: AddEmail.php?AddEmail=success");
          exit();
      }
  }
}
else{
  //echo "error";
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
          <h5 class="card-title">Registration to ALUMNI</h5>
          <p class="card-text">
              <form action="AddEmail.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="Alumniname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" style="width:80%; margin:0 auto;">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="Alumniemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="width:80%; margin:0 auto;">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="Alumnipassword" class="form-control" id="exampleInputPassword1" placeholder="Password" style="width:80%; margin:0 auto;">
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