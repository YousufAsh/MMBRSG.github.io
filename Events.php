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
                      <li class="breadcrumb-item active" aria-current="page" id="breadcrumbCurrent"></li>
                    </ol>
                  </nav>

              <div class="row" id="contentBox">
              <div class="col">
                <div class="tab-content" id="nav-tabContent">
                  <!-- Content changes -->
                 
                  <div class="tab-pane fade show active content" role="tabpanel">
                      <div class="eventBanner">

                        </div>
                    <div class="eventExpand">
                    <?php
 $ID= $_GET['ID'];
 $query ="SELECT * FROM event  WHERE `ID`= '$ID'";
 $data= mysqli_query($conn,$query);  
 if($data){
 
        //echo "<script>alert('Read more')</script>";
        while ($result= mysqli_fetch_assoc($data)) {
          echo '<div class="eventBio">';
          echo $result['Edescription'];
          echo '</div>';
          echo '<div class="eventDet">';
          echo '<div class="distancer" id="top"><div class="eventD1">Date: </div> <div class="eventD2">'.$result['StartDate'].' to '.$result['EndDate'].'</div></div>';
          echo '<div class="distancer"><div class="eventL1">Location: </div> <div class="eventL2">'.$result['Elocation'].'</div></div>';
          echo ' <div class="distancer"><div class="eventT1">Time: </div> <div class="eventT2">'.$result['StartTime'].' to '.$result['EndTime'].'</div></div>';
          echo '</div>';
     }
        
 }
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
</html>x