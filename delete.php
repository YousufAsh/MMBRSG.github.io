<?php
 include("connect.php");
 $ID= $_GET['ID'];
 $delete_Query ="DELETE FROM `event` WHERE `ID`= '$ID'";
 $data= mysqli_query($conn,$delete_Query);
 if($data){
        echo "<script>alert('Record Deleted')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/show.php">
        <?php
 }else{
        echo "<font color='red'> Sorry,Delete process failed";
 }
?>