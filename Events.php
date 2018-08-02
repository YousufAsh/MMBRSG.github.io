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
      </div>
<div class="container-fluid" style="width:100%; margin:0; padding:0;">
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
</div>
<div class="sidebar">
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-facebook-material-design_3116888.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-linkedin-material-design_3116886.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-twitter-material-design_3116885.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-youtube-material-design_3116882.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-email-material-design_3116889.png"></a>
        <a href="#"><img class="sIcon" src="assets/icons/if_icon-instagram-material-design_3116887.png"></a>
        </div>      
<div class="container">
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
<?php
include_once("ftr.php");
?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    </body>
</html>x