<?php
  include("connect.php");
  error_reporting(0);
?>
<html>
<head>
  <title>Add Event</title>
</head>
<body>
<h2>Add Event</h2>
<form action="" method="POST" enctype="multipart/form-data"> 
<!--ID:          <input type="text" name="ID" value=""/><br><br> --> 
Name:        <input type="text" name="Ename" value="<?php echo $_POST['Ename']?>" required/><br><br>
Location:    <input type="text" name="Elocation" value="<?php echo $_POST['Elocation']?>" required/><br><br>
Start Date:        <input type="date" name="StartDate" value="<?php echo $_POST['StartDate']?>" required/><br><br>
End Date:        <input type="date" name="EndDate" value="<?php echo $_POST['EndDate']?>" required/><br><br>
Start Time:        <input type="time" name="StartTime" value="<?php echo $_POST['StartTime']?>" required/><br><br>
End Time:        <input type="time" name="EndTime" value="<?php echo $_POST['EndTime']?>" required/><br><br>
Description: <input type="text" name="Edescription" value="<?php echo $_POST['Edescription']?>" required/><br><br>
Upload Image: <input type="file" name="Eimage" value="<?php echo $_POST['Eimage']?>" required/><br><br>

<!--Event Type:   <input type="radio" name="Etype" value=""/>Private Event
              <input type="radio" name="Etype" value=""/>Public Event <br><br>-->
<input type="submit" name="submit" value="Submit"/>
</form>
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
        <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/add.php">
        <?php
       } 
        }
      else{ 
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed,insertion failed!!')</script>";
           ?>
        <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/add.php">
        <?php
}            
}
?>
</body>
</html>