<?php
 include("connect.php");
?>
  <table>
          <tr>
          <th>ID</th>
         <th>Name</th>
         <th>Location</th>
         <th>Start Date</th>
         <th>End Date</th>
         <th>Start Time</th>
         <th>End Time</th>
         <th>Description</th> 
          <th>Image</th>
          
            
          </tr>
          <?php
 $ID= $_GET['ID'];
 $query ="SELECT * FROM event  WHERE `ID`= '$ID'";
 $data= mysqli_query($conn,$query);  
 if($data){
 
        //echo "<script>alert('Read more')</script>";
        while ($result= mysqli_fetch_assoc($data)) {
        
echo "<tr>
         <td>".$result['ID']."</td>
         <td>".$result['Ename']."</td>
         <td>".$result['Elocation']."</td>
          <td>".$result['StartDate']."</td>
         <td>".$result['EndDate']."</td>
         <td>".$result['StartTime']."</td>
         <td>".$result['EndTime']."</td>
         <td>".$result['Edescription']."</td> 
         
          
          <td><a href='$result[Eimage]'><img src='".$result['Eimage']."' height='100' width='100'/></a></td>
     </tr>";  
     }
        
 }
?>