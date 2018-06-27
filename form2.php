<!doctype html>
<?php
 include('../connect.php');
 error_reporting(0);

  session_start();
  $Alumniemail = $_SESSION['Alumniemail'];
  $Alumnipassword = $_SESSION['Alumnipassword'];
  $Aname = $_POST['Alumniname'];
  $Acompany = $_POST['AlumniCompany'];
  $Adesignation = $_POST['AlumniDesignation'];
  $Agradyear = $_POST['AlumniYear'];
  $Amajor = $_POST['AlumniMajor'];
  //print_r($_SESSION);

  if($_POST['submit']){
  $query="UPDATE `alumni` SET `Aname`='".$Aname."',`Acompany`='".$Acompany."',`Adesignation`='".$Adesignation."',`AgradYear`='".$Agradyear."',`Amajor`='".$Amajor."' WHERE `Aemail`='".$Alumniemail."'";
  $result=mysqli_query($conn,$query);
  if($result){
    printf("Data updated");
    $_SESSION['Alumniname'] = $Aname;
    $_SESSION['AlumniCompany'] = $Acompany;
    $_SESSION['AlumniDesignation'] = $Adesignation;
    $_SESSION['AlumniYear'] = $Agradyear;
    $_SESSION['AlumniMajor'] = $Amajor;
  }
  else{
    echo "Data not updated";
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
    <a href="javascript:history.back()">
    <button type="button" class="btn btn-primary btn-lg" style="margin:1%;" >Back</button>
    </a>
    <div class="test" style=" display:flex; justify-content: center; align-items: center;">
    <div class="card text-center" style="width:50%; ">
        <div class="card-header">
       
        </div>
        <div class="card-body ">
          <h5 class="card-title" style="padding-bottom:10px;">Update Your Profile</h5>
          <p class="card-text">
              <form action="form2.php" method="POST">
                  <div class="form-group row" >
                    <label class="col-sm-4 col-form-label">Name:</label>
                    <div class="col-sm-7">
                    <input type="text" name="Alumniname" class="form-control"   value="<?php echo $_SESSION['Alumniname']?>" required>
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
                    <label class="col-sm-4 col-form-label">Graduation Year:</label>
                    <div class="col-sm-7">
                    <input type="year" name="AlumniYear" class="form-control"  value="<?php echo $_SESSION['AlumniYear']?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Major:</label>
                    <div class="col-sm-7">
                    <input type="text" name="AlumniMajor" class="form-control"  value="<?php echo $_SESSION['AlumniMajor']?>" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Profile Picture:</label>
                    <div class="col-sm-7">
                    <input type="file" name="fileupload" value="fileupload" id="fileupload">
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