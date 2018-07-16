<?php
    include("connect.php");
    error_reporting(0); 
    //we can add echo to show values
 $_GET['ID'];
 $_GET['Ename'];
 $_GET['Elocation'];
 $_GET['StartDate'];
 $_GET['EndDate'];
 $_GET['StartTime'];
 $_GET['EndTime'];
 $_GET['Edescription'];
 $_GET['Eimage'];
 ?>
<html>
<head>
</head>
<body>
<form action="" method="GET" > 
ID:          <input type="text" name="ID" value="<?php echo $_GET['ID'] ;?>"/><br><br> 
Name:        <input type="text" name="Ename" value="<?php echo $_GET['Ename'] ;?>"/><br><br>
Location:    <input type="text" name="Elocation" value="<?php echo $_GET['Elocation'];?>"/><br><br> 
Start Date:        <input type="date" name="StartDate" value="<?php echo $_GET['StartDate']?>" /><br><br>
End Date:        <input type="date" name="EndDate" value="<?php echo $_GET['EndDate']?>" /><br><br>
Start Time:        <input type="time" name="StartTime" value="<?php echo $_GET['StartTime'];?>"/><br><br>
End Time:        <input type="time" name="EndTime" value="<?php echo $_GET['EndTime'];?>"/><br><br>
Description: <input type="text" name="Edescription" value="<?php echo $_GET['Edescription'];?>"/><br><br>
Select a file to upload: <input type="file" name="Eimage" value="<?php echo $_GET['Eimage'];?>"/> 
<input type="submit" name="UpdateIMG" value="Upload"/> <br><br>  
<input type="submit" name="submit" value="Update"/>
</form>
 <?php          
/*if(isset($_GET['UpdateIMG'])){

  $folder = $_GET['Eimage'];
  $filename= $_FILES["Eimage"]["name"];
  $tempname= $_FILES["Eimage"]["tmp_name"];
  $folder="event/".$filename;
  //echo $folder;
  move_uploaded_file($tempname,$folder);
  $Eimage= "<img src='$folder' height='100' width='100'/>";

   $query="UPDATE `event` SET `Eimage`='".$folder."'  WHERE `ID`='".$ID."'";
   $result=mysqli_query($conn,$query);
   if($result){
     $_GET['Eimage']= $folder;
   }
}
else{
  $folder = $_GET['Eimage'];
  $Eimage= "<img src='$folder' height='100' width='100'/>";


} */
 if($_GET['submit'])
 {
$ID= $_GET['ID'];
$name=$_GET['Ename'];
$location=$_GET['Elocation'];
$startdate=$_GET['StartDate'];
$enddate= $_GET['EndDate'];
$starttime=$_GET['StartTime'];
$endtime=$_GET['EndTime'];
$description=$_GET['Edescription'];
$update_Query ="UPDATE `event` SET `Ename`='$name',`Elocation`='$location',`StartDate`='$startdate',`EndDate`='$enddate',`StartTime`='$starttime',`EndTime`='$endtime',`Edescription`='$description' WHERE `ID`='$ID'";
$data= mysqli_query($conn,$update_Query);
if($data){
     echo"<font color='green'>Record Updated Successfuly.<a href='show.php'>Check Updated List Here</a>";
}else{
//syntax error appear
      echo"<font color='red'>Record Not Updated";
}
 }else{
 echo "<font color='blue'>Click on Update Button to save the changes";
 }
  
 ?>
</body>
</html>
