  <?php
$search_output="";
if(isset($_POST['search']))
{
    
    $valueToSearch = $_POST['valueToSearch'];
  
      $selectOp= $_POST['selectionlist'];
     if($selectOp =='Name')
     {
      $query = "SELECT * FROM `event` WHERE  `Ename` LIKE '%".$valueToSearch."%'";
     }else if($selectOp =='Location'){
      $query = "SELECT * FROM `event` WHERE  `Elocation` LIKE '%".$valueToSearch."%'";
     }else if($selectOp =='Start Date'){
        $query = "SELECT * FROM `event` WHERE `StartDate` LIKE '%".$valueToSearch."%'";
     }else if($selectOp =='End Date'){
        $query = "SELECT * FROM `event` WHERE `EndDate` LIKE '%".$valueToSearch."%'";
     }else if($selectOp =='Start Time'){
      $query = "SELECT * FROM `event` WHERE `StartTime` LIKE '%".$valueToSearch."%'";
     }else if($selectOp =='End Time'){
      $query = "SELECT * FROM `event` WHERE `EndTime` LIKE '%".$valueToSearch."%'";
     }else if($selectOp =='Description'){
        $query = "SELECT * FROM `event` WHERE `Edescription` LIKE '%".$valueToSearch."%'";
     }else if($selectOp =='Image'){
        $query = "SELECT * FROM `event` WHERE `Eimage` LIKE '%".$valueToSearch."%'";
     }else
     $query = "SELECT * FROM `event` WHERE CONCAT(`id`, `Ename`, `Elocation`,`StartDate`, `EndDate`, `StartTime`, `EndTime`, `Edescription`,`Eimage`) LIKE '%".$valueToSearch."%'";
    // search in all table columns
    // using concat mysql function
       
   /* $count = mysqli_num_rows($query);  
      if($count<1)
      {
      echo 'sorry, no search results for '. $valueToSearch ;
      } */ 
    $search_result = filterTable($query);
    }
    
 else {
     
    $query = "SELECT * FROM `event`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "newdb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Search</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
          <h2>Search Data</h2>
        <form action="search.php" method="post">
            
            <input type="text" name="valueToSearch" placeholder="Value To Search">
                 
              <input type="submit" name="search" value="Find"><br><br> 
                
           <label> Search In</label>
            <select name="selectionlist">
                <option value="">Select Filter</option>
                 <option value="All">All</option>
                 <option value="Name"> Name</option>
                <option value="Location">Location</option>
                 <option value="Start Date">Start Date</option>
                <option value="End Date">End Date</option>
                <option value="Start Time">Start Time</option>
                <option value="End Time">End Time</option>
                <option value="Description">Description</option>
                <option value="Image">Image</option>
               
                </select>
            
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                   <th>Name</th>
                    <th>Location</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Description</th> 
                    <th>Image</th>
                </tr>

      <!-- populate table from mysql database -->
                       
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Ename'];?></td>
                    <td><?php echo $row['Elocation'];?></td>
                    <td><?php echo $row['StartDate'];?></td>
                    <td><?php echo $row['EndDate'];?></td>
                    <td><?php echo $row['StartTime'];?></td>
                    <td><?php echo $row['EndTime'];?></td>
                    <td><?php echo $row['Edescription'];?></td>
                    <td><?php $folder=$row['Eimage']; 
                              $IMG="<img src='".$folder."' height='100' width='100'/>";
                              echo $IMG;
                              ?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>

