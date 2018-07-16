<!doctype html>
<?php
include('../connect.php');
//error_reporting(0);
session_start();
$Alumniemail = $_SESSION['Alumniemail'];
$Alumnipassword = $_SESSION['Alumnipassword'];
$AID= $_SESSION['AID'];

$AlumniFname = $_SESSION['AlumniFname'];
$AlumniLname = $_SESSION['AlumniLname'];
$Acompany = $_SESSION['AlumniCompany'];
$Adesignation = $_SESSION['AlumniDesignation'];
$GradYear = $_SESSION['GradYear'];
$AlumniMajor = $_SESSION['AMajor'];
$folder = $_SESSION['AProfilePic'];
$AlumniPhoneNumber=$_SESSION['PhoneNum'];
$AlumniLevel = $_SESSION['checkbox'];
$Alumnirole = $_SESSION['roleMBRSG'];
$Alumnibio =$_SESSION['biography'];
print_r($_SESSION);



if($_SESSION['status']!="Active"){
  header("location:login1.php");
}
else{
if(isset($_POST['submit'])){

  $AlumniFname = $_POST['Firstname'];
  $AlumniLname = $_POST['Lastname'];
  $AlumniMajor = $_POST['AMajor'];
  $GradYear= $_POST['GradYear'];
  $Acompany = $_POST['AlumniCompany'];
  $Adesignation = $_POST['AlumniDesignation'];
  $AlumniPhoneNumber=$_POST['PhoneNum'];
  $Alumnirole = $_POST['roleMBRSG'];
  $Alumnibio =$_POST['biography'];

  $query="UPDATE `alumni` SET `biography`='".$Alumnibio."', `roleMBRSG`='".$Alumnirole."', `AFname`='".$AlumniFname."',`ALname`='".$AlumniLname."', `Acompany`='".$Acompany."',`Adesignation`='".$Adesignation."',`AgradYear`='".$GradYear."',`Amajor`='".$AlumniMajor."', `phonenum`='".$AlumniPhoneNumber."' WHERE `Aemail`='".$Alumniemail."'";
  $result=mysqli_query($conn,$query);
  if($result){

    $_SESSION['AlumniFname'] =  $AlumniFname;
    $_SESSION['AlumniLname'] =  $AlumniLname;
    $_SESSION['AlumniCompany'] = $Acompany;
    $_SESSION['AlumniDesignation'] = $Adesignation;
    $_SESSION['GradYear'] = $GradYear;
    $_SESSION['AMajor'] = $AlumniMajor;
    $_SESSION['PhoneNum']=$AlumniPhoneNumber;
    $_SESSION['biography'] =$Alumnibio;
    $_SESSION['roleMBRSG'] =$Alumnirole;
    printf("Data updated");
}
  else{
    echo "Data not updated";
  }
}


if(isset($_POST['UpdateIMG'])){

  $folder = $_POST["AProfilePic"];
  $filename= $_FILES["AProfilePic"]["name"];
  $tempname= $_FILES["AProfilePic"]["tmp_name"];
  $type=$_FILES["AProfilePic"]["type"];
  $folder="images/".$AID.$filename;
  //echo $folder;
  move_uploaded_file($tempname,$folder);
  $AProfilePic= "<img src='$folder' height='100' width='100'/>";
   $query="UPDATE `alumni` SET `Apicture`='".$folder."'  WHERE `Aemail`='".$Alumniemail."'";
   $result=mysqli_query($conn,$query);
   if($result){
     $_SESSION['AProfilePic']= $folder;
   }
   else{
     $folder = $_SESSION['AProfilePic'];
     $AProfilePic= "<img src='$folder' height='100' width='100'/>";
   }
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
          <h5 class="card-title" style="padding-bottom:10px;">Update Your Profile</h5>
          <p class="card-text">
              <form action="form2.php" method="POST">
              <div class="form-group row" >
                    <div class="col-sm-7">
                    <img src="<?php echo $folder ?>" width="129" height="129" alt="no image found"/>
                    <label for="fileupload"> Upload profile picture: </label>
                    <input type="file" name="AProfilePic" value="<?php echo $AProfilePic ?>" />
              
                    </div>
                    <input type="submit" name="UpdateIMG" value="Update Profile Picture"> 
                  </div>
                  <div class="form-group row" >
                    <label class="col-sm-4 col-form-label">Alumni ID: </label>
                    <div class="col-sm-7">
                    <?php echo $_SESSION['AID']?>
                    </div>
                  </div>
                  <div class="form-group row" >
                    <label class="col-sm-4 col-form-label">First Name:</label>
                    <div class="col-sm-7">
                    <input type="text" name="Firstname" class="form-control"   value="<?php echo $_SESSION['AlumniFname']?>" required>
                    </div>
                  </div>
                  <div class="form-group row" >
                    <label class="col-sm-4 col-form-label">Last Name:</label>
                    <div class="col-sm-7">
                    <input type="text" name="Lastname" class="form-control"   value="<?php echo $_SESSION['AlumniLname']?>" required>
                    </div>
                  </div>
                  <div class="form-group row" >
                    <label class="col-sm-4 col-form-label">Phone Number:</label>
                    <div class="col-sm-7">
                    <input type="text" name="PhoneNum" class="form-control"   value="<?php echo $_SESSION['PhoneNum']?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Major:</label>
                    <div class="col-sm-7">
                    <input type="text" name="AMajor" class="form-control"  value="<?php echo $_SESSION['AMajor']?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Graduation Year:</label>
                    <div class="col-sm-7">
                    <input type="year" name="GradYear" class="form-control"  value="<?php echo $_SESSION['GradYear']?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Company:</label>
                      <div class="col-sm-7">
                      <input type="text" name="AlumniCompany" class="form-control" value="<?php echo $_SESSION['AlumniCompany']?>" required>
                    </div>
                    </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Designation:</label>
                    <div class="col-sm-7">
                    <input type="textt" name="AlumniDesignation" class="form-control"  value="<?php echo $_SESSION['AlumniDesignation']?>" required>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Role In MBRSG: </label>
                    <div class="col-sm-7">
                    <input type="text" name="roleMBRSG" class="form-control" value="<?php echo $_SESSION['roleMBRSG']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Professsional Biograpghy: </label>
                    <div class="col-sm-7">
                    <textarea name="biography" rows="10" cols="40"><?php echo $_SESSION['biography']?></textarea>
                    </div>
                  </div>
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </form>
          </p>
        </div>
        <div class="card-footer text-muted">
     <small> <a href="changepass.php"> Change Password </a> </small>
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