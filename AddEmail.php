<!doctype html>
<?php
  include('../connect.php');
  //error_reporting(0);

if(isset($_POST['submit']))
{
$Alumniemail = strtolower($_POST['Alumniemail']);
$Alumnipassword = $_POST['AlumniPassword'];
$AlumniFname = $_POST['Firstname'];
$AlumniLname = $_POST['Lastname'];
$ALumniID = $_POST['AID'];
$AlumniMajor = $_POST['AMajor'];
$GradYear= $_POST['GradYear'];
$Gender = $_POST['gender'];
$AlumniPhoneNumber =$_POST['PhoneNum'];
$AlumniLevel = $_POST['AlumniLevel'];
  if(!filter_var($Alumniemail, FILTER_VALIDATE_EMAIL )){
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
        $hashedPwd= password_hash($Alumnipassword, PASSWORD_DEFAULT);
        //insert the user into the database
        $sql = "INSERT into `alumni` (`Aemail`, `Apassword`, `AFname`, `ALname`, `ID`, `AgradYear`, `Amajor`, `Gender`, `phonenum`, `checkbox`)
        values ('$Alumniemail', '$hashedPwd', '$AlumniFname', '$AlumniLname','$ALumniID', '$GradYear', '$AlumniMajor', '$Gender', '$AlumniPhoneNumber', '$AlumniLevel')";

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
          <h5 class="card-title">Add New Alumni</h5>
          <p class="card-text">
              <form action="AddEmail.php" method="POST">
                  <div class="form-group row">
                    <label for="ID" class="col-sm-4 col-form-label">Alumni ID: </label>
                    <div class="col-sm-7">
                    <input type="text" name="AID" class="form-control" placeholder="Enter ID" required>
</div>
                  </div>
                  <div class="form-group row">
                    <label for="FName" class="col-sm-4 col-form-label">First Name: </label>
                    <div class="col-sm-7">
                    <input type="text" name="Firstname" class="form-control" placeholder="Enter first name"  required>
                  </div>
</div>
                  <div class="form-group row">
                      <label for="LName"  class="col-sm-4 col-form-label">Last Name:</label>
                      <div class="col-sm-7">
                      <input type="text" name="Lastname" class="form-control"  placeholder="Enter last name" required>
                    </div>
</div>
                    <div class="form-group row">
                    <label for="Gender" class="col-sm-4 col-form-label">Gender:</label>
                    <div class="col-sm-7">
                      <div id="radioSeperator">
                   <label><input type="radio" name="gender" class="form-control" value="Male" checked>Male</label>
                    <label><input type="radio" name="gender" class="form-control"  value="Female" >Female</label>
</div>
                  </div>

</div>
                  <div class="form-group row">
                      <label for="Major" class="col-sm-4 col-form-label" >Major:</label>
                      <div class="col-sm-7">
                      <input type="text" name="AMajor" class="form-control" placeholder="Enter Major" required>
                    </div>
</div>
                    <div class="form-group row">
                      <label for="GradYear" class="col-sm-4 col-form-label">Graduation Year:</label>
                      <div class="col-sm-7">
                      <input type="text" name="GradYear" class="form-control" placeholder="Enter graduation year" required>
                    </div>
</div>
                    <div class="form-group row">
                      <label for="No." class="col-sm-4 col-form-label">Phone Number:</label>
                      <div class="col-sm-7">
                      <input type="text" name="PhoneNum" class="form-control" placeholder="Enter phone number" required>
                    </div>
</div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-4 col-form-label">Email:</label>
                      <div class="col-sm-7">
                      <input type="email" name="Alumniemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
</div>
                  <div class="form-group row">
                    <label for="Pass" class="col-sm-4 col-form-label">Password:</label>
                    <div class="col-sm-7">
                    <input type="password" name="AlumniPassword" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group row">
                <label for="AlumniL" class="col-sm-4 col-form-label">Alumni Level:</label>
                    <div class="col-sm-7">
                      <div id="radioSeperator">
                   <label><input type="radio" name="AlumniLevel" class="form-control" value="Normal" checked>Normal</label>
                    <label><input type="radio" name="AlumniLevel" class="form-control"  value="Board" >Board</label>
                    <label><input type="radio" name="AlumniLevel" class="form-control"  value="Honorary" >Honorary</label>
</div>
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