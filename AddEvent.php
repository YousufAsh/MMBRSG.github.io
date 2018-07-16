<!doctype html>
<?php
  include("connect.php");
  error_reporting(0);
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
          <h5 class="card-title">Add New Event</h5>
          <p class="card-text">
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="eventName" class="col-sm-4 col-form-label">Event Name: </label>
                    <div class="col-sm-7">
                    <input type="text" name="Ename" class="form-control" value="<?php echo $_POST['EName']?>" placeholder="Enter Event Name" required>
</div>
                  </div>
                  <div class="form-group row">
                    <label for="eventLocation" class="col-sm-4 col-form-label">Event Location: </label>
                    <div class="col-sm-7">
                    <input type="text" name="Elocation" class="form-control" value="<?php echo $_POST['ELocation']?>" placeholder="Enter Event Location"  required>
                  </div>
</div>
                  <div class="form-group row">
                      <label for="startDate"  class="col-sm-4 col-form-label">Start Date:</label>
                      <div class="col-sm-7">
                      <input type="date" name="StartDate" class="form-control" value="<?php echo $_POST['StartDate']?>" required>
                    </div>
</div>
                    <div class="form-group row">
                    <label for="endDate" class="col-sm-4 col-form-label">End Date:</label>
                    <div class="col-sm-7">
                    <input type="date" name="EndDate" class="form-control" value="<?php echo $_POST['EndDate']?>" required>
                  </div>

</div>
                  <div class="form-group row">
                      <label for="startTime" class="col-sm-4 col-form-label" >Start Time:</label>
                      <div class="col-sm-7">
                      <input type="time" name="StartTime" class="form-control" value="<?php echo $_POST['StartTime']?>" required>
                    </div>
</div>
                    <div class="form-group row">
                      <label for="endTime" class="col-sm-4 col-form-label">End Time:</label>
                      <div class="col-sm-7">
                      <input type="time" name="EndTime" class="form-control" value="<?php echo $_POST['EndTime']?>" required>
                    </div>
</div>
                    <div class="form-group row">
                      <label for="eventDesc" class="col-sm-4 col-form-label">Event Description:</label>
                      <div class="col-sm-7">
                      <textarea name="Edescription" rows="10" cols="35" value="<?php echo $_POST['Edescription']?>"></textarea>
                    </div>
</div>

                    <div class="form-group row">
                      <label for="No." class="col-sm-4 col-form-label">Image :</label>
                      <div class="col-sm-7">
                      <input type="file" name="Eimage" value="<?php echo $_POST['Eimage']?>" required/>
                    </div>
</div>



</div>
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="width:25%; margin:0 auto;">
                </form>
          </p>
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

<?php
if($_POST['submit'])
{   
$Ename= $_POST['Ename'];
$Elocation= $_POST['Elocation'];
$StartDate= $_POST['StartDate'];
$EndDate= $_POST['EndDate'];
$StartTime= $_POST['StartTime'];
$EndTime= $_POST['EndTime'];
$Edescription= $_POST['Edescription'];   
$size=$_FILES['Eimage']['size'];
$tempname= $_FILES['Eimage']['tmp_name'];
$type=$_FILES['Eimage']['type'];
$filename= $_FILES['Eimage']['name'];
if (($type=="image/jpeg")||($type=="image/jpg")||($type=="image/png")||($type=="image/gif")) 
{           
 $folder="event/".$Ename .$filename;
move_uploaded_file($tempname,$folder);
       $filename= $_FILES['Eimage']['name'];
        $query="INSERT INTO `event`(`Ename`, `Elocation`,`StartDate`, `EndDate`, `StartTime`, `EndTime`, `Edescription`,`Eimage`) VALUES ('$Ename','$Elocation','$StartDate','$EndDate','$StartTime','$EndTime','$Edescription','$folder')";
          $data = mysqli_query($conn,$query);
          if($data)
       {
            echo"Data inserted into Database";
             ?>
       
        <?php
       } 
        }
      else{ 
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed,insertion failed!!')</script>";
           ?>
     
        <?php
}            
}
?>