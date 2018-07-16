
 
<style type"text/css">
  table{
  border-collapse:collapse;
  width:100%;
  color:#d96459;
  font-family:monospace;
  font-ize:24px;
  text-align:left
  }
  th{
  background-color:#d96459;
  color:white; 
  }
  tr:nth-child(even){
  background-color:#f2f2f2
  }
  td{
  padding:5px;
  }
</style> 
<h2>Display Events</h2>
<?php
   include("connect.php");
   
   error_reporting(0); 
       $query="SELECT * FROM event" ;
       $data=mysqli_query($conn,$query);
       $total=mysqli_num_rows($data);
       echo $total;
      
      
       if($total!=0){
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
           <th colspan="2">Operations</th> 
            
          </tr>
       
       <?php
       // define how many results you want per page
$results_per_page =5;

// find out the number of results stored in database
$query="SELECT * FROM event";
$data = mysqli_query($conn, $query);
//$number_of_results = mysqli_num_rows($data);
// determine number of total pages available
$number_of_pages = ceil($total/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
                 // determine the sql LIMIT starting number for the results on the displaying page
                 $this_page_first_result = ($page-1)*$results_per_page;
                 $query="SELECT * FROM event LIMIT "  . $this_page_first_result . ',' .$results_per_page;
                 $data = mysqli_query($conn, $query);
                while($result= mysqli_fetch_assoc($data)) {
               // print_r($result);
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
          <td><a href='update.php?ID=$result[ID]&Ename=$result[Ename]&Elocation=$result[Elocation]&StartDate=$result[StartDate]&EndDate=$result[EndDate]&StartTime=$result[StartTime]&EndTime=$result[EndTime]&Edescription=$result[Edescription]&Eimage=$result[Eimage]'>Edit</a></td>
          <td><a href='delete.php ?ID=$result[ID]&Ename=$result[Ename]' onclick='return checkdelete()'>Delete</a></td>
          
          </tr>";
               
                }
       }else{
       
         echo"No Records found";
       
       }
       // display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
 echo '<a href="show.php?page=' . $page . '">' . $page . '</a> ';
} 
       //echo $result['ID']." ".$result['Ename']." ".$result['Elocation']." ".$result['Edate']." ".$result['Etime']." ".$result['Edescription']." ".$result['Eimage']."<br/>"; 
                 
?>      
</table>
<script>
function checkdelete(){
         return confirm('Are you sure you want to delete this data?');
} 
</script>  