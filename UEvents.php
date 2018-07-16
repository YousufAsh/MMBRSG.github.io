<!doctype html>
<?php
   include("connect.php");
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

<div class="container" >
    <div class="topBanner">
        <div><img src="assets/imgs/MBRGI_logo.png"></div>
        <div><img src="assets/imgs/gov-logo.png"></div>
      </div>
      <?php
include_once("nav.php");
?>
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="http://www.travelwings.com/Destinations/image/dubai/dubai-banner.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.travelwings.com/Destinations/image/dubai/dubai-banner.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.travelwings.com/Destinations/image/dubai/dubai-banner.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> 
             
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <!-- Change active relative to current webpage -->
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="Events.html">Events</a></li>
                      <li class="breadcrumb-item active" aria-current="page" id="breadcrumbCurrent">Upcoming Events</li>
                      </ol>
                  </nav>

              <div class="row" id="contentBox">
                <div class="col-4">
              <div class="list-group">
                <!-- Change active relative to current webpage -->
                <a href="Events.html" class="list-group-item list-group-item-action">
                  Events
                </a>
                <a href="PEvents.html" class="list-group-item list-group-item-action">Previous Events</a>
                <a href="UEvents.html" class="list-group-item list-group-item-action active" id="main">Upcoming Events</a>
               

              </div>
                </div>
              <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                  <!-- Content changes -->
                 <div class="tab-pane fade show active content" role="tabpanel">
                  <div class="eventColumn">
                    <a href="AddEvent.php">Add Events</al>
                  <?php 
   error_reporting(0); 
       $query="SELECT * FROM event" ;
       $data=mysqli_query($conn,$query);
       $total=mysqli_num_rows($data);

      
      
       if($total!=0){
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
               $start = $result['StartDate'];
               $start2 = substr($start,8,4);
               $start = substr($start,5,2);
               
               $end = $result['EndDate'];
               $end2 = substr($end,8,4);
               $end = substr($end,5,2);

               switch ($start) {
                case 01:
                $start = "Jan";
                break;
                case 02:
                $start = "Feb";
                break;
                case 03:
                $start = "Mar";
                break;
                case 04:
                $start = "Apr";
                break;
                case 05:
                $start = "May";
                break;
                case 06:
                $start = "June";
                break;
                case 07:
                $start = "July";
                break;
                case '08':
                $start = "Aug";
                break;
                case '09':
                $start = "Aug";
                break;
                case 10:
                $start = "Nov";
                break;
                case 11:
                $start = "Sept";
                break;
                case 12:
                $start = "Dec";
                break;

            }

            switch ($end) {
              case 01:
              $end = "Jan";
              break;
              case 02:
              $end = "Feb";
              break;
              case 03:
              $end = "Mar";
              break;
              case 04:
              $end = "Apr";
              break;
              case 05:
              $end = "May";
              break;
              case 06:
              $end = "June";
              break;
              case 07:
              $end = "July";
              break;
              case '08':
              $end = "Aug";
              break;
              case '09':
              $end = "Oct";
              break;
              case 10:
              $end = "Nov";
              break;
              case 11:
              $end = "Sept";
              break;
              case 12:
              $end = "Dec";
              break;

          }
                  echo '<div class="event">';
                 echo '<div class="eventImg"><img class="eventPic" src="https://steemitimages.com/DQmfMNupYMHmp11bgDW58J41ToPSVTvyoFb9x8KrjHEGfnE/POTD_chick_3597497k.jpg"></div>';
                  echo'<div class="eventDetails">';
                 echo'<div class="eventDate">'.$start.' '.$start2.' - '.$end.' '.$end2.'</div>';
                 echo"<div class='eventName'><a href='Events.php?ID=$result[ID]&Ename=$result[Ename]' onclick='return try()'>".$result['Ename']." </a> </div>";
                  echo'<div class="eventDesc">'.$result['Edescription'].'</div>';
                  echo'</div>';
                  echo'</div>';
                }
       }else{
       
         echo"No Records found";
       
       }
       // display the links to the pages
       echo '<div class="pageNumFtr">';
       echo ' <ul class="pagination pagination-sm">';      
for ($page=1;$page<=$number_of_pages;$page++)
 echo '<li class="page-item"><a class="page-link" href="UEvents.php?page=' . $page . '">'.$page.'</a></li>';
 
 echo'</div>'; 
       //echo $result['ID']." ".$result['Ename']." ".$result['Elocation']." ".$result['Edate']." ".$result['Etime']." ".$result['Edescription']." ".$result['Eimage']."<br/>"; 
                 
?>   

                  </div>

                    </div>

                </div>
              </div>
              </div>
</div>
<div id="ftr" class="container-fluid" style="margin-top:1px; background: url(http://mbrsg.ae/MBRSG/media/VideoGallery/bg_footernew_1.jpg?width=101&height=99&ext=.jpg) repeat scroll center top #2e2e2e;">
  <div class="container">
    <div id="footer">
      
      <div class="footerContent">
        <h4 class="footerTitle">Newsletter Subscribe</h4>
        <div class="footerText">
          Subscribe to our newsletter and get the latest updates and information on MBRSG right into your inbox!
          <br>
          <div class="newsletterSubmition">
          <input class="email" type="email" placeholder="Your email...">
          <input type="submit" class="submit" value="Submit">
          </div>
        </div>
      </div>
      <div class="footerContent">
          <h4 class="footerTitle">Contact Us</h4>
          <div class="footerText">
              <div class="noStyle">
             <div class="listContainer"><div class="seperator"><img class="contactIcon" src="assets/icons/map-5-512.png"></div>Convention Tower, Level 13 Dubai, UAE</div>
              <div class="listContainer"><div class="seperator"><img class="contactIcon" src="assets/icons/phone-54-512.png"></div>Tel: +971 4 329 3290</div>
              <div class="listContainer"><div class="seperator"><img class="contactIcon" src="assets/icons/clock-3-512.png"></div>Mon-Fri: 10-20<br>Sun: 12-16</div>
            </div>
           </div>
        </div>
      <div class="footerContent">
          <h4 class="footerTitle">Navigate</h4>
          <div class="footerText">
            <ul class="footerNavigation">
              <li>About Us</li>
              <li>Alumni Association</li>
              <li>AA Services</li>
              <li>Events</li>
              <li>Graduates</li>
              <li>Newsletter</li>
              <li>Contact Us</li>
              </ul>
            </div>
          </div>
        </div>   
        <div class="endFtr">
            <div class="endFtrContent">
              <span>© 2018 MBRSG All Rights Reserved</span>
              <a href="#"><span>Library</span></a>
              <a href="#"><span>Blackboard</span></a>
              <a href="#"><span>Sitemap</span></a>
              <a href="#"><span>FAQ</span></a>
              <a href="#"><span>Privacy Policy</span></a>
              <a href="#"><span>Disclaimer</span></a>
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