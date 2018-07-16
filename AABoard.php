<!doctype html>
<?php
                      include('../connect.php');
                      //error_reporting(0);
                      session_start();
                      print_r ($_SESSION);
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
                      <li class="breadcrumb-item "><a href="AA.html">Alumni Association</a></li>
                      <li class="breadcrumb-item active" aria-current="page" id="breadcrumbCurrent">AA Board</li>
                    </ol>
                  </nav>

              <div class="row" id="contentBox">
                <div class="col-4">
              <div class="list-group">
                <!-- Change active relative to current webpage -->
                <a href="AA.html" class="list-group-item list-group-item-action">
                  Alumni Association
                </a>
                <a href="AAStructure.html" class="list-group-item list-group-item-action">AA Structure</a>
                <a href="AARoles.html" class="list-group-item list-group-item-action">AA Roles & Responsiblities</a>
                <a href="AABoard.html" class="list-group-item list-group-item-action active " id="main">AA Board</a>
                <a href="AAEligibility.html" class="list-group-item list-group-item-action">Eligbility</a>
                <a href="AARegulations.html" class="list-group-item list-group-item-action">Regulations & Bylaws</a>

              </div>
                </div>
              <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                  <!-- Content changes -->
              
                  <div class="tab-pane fade show active content" role="tabpanel">
                  <div class="title">MBRSG AA Board Members</div> 
                    <div class="board">
               <!--
                    <?php
                    /*  $sql="SELECT * FROM `alumni`";
                      $result = mysqli_query($conn, $sql);
                     // echo "<tr><td colspan='2'><h3>Executive Board Members</h3></td></tr>";
                      while ($row = mysqli_fetch_array($result)) {
                        if($row['checkbox']=="Board"){
                          $folder=$row['Apicture'];
                          $AProfilePic= "<img src='".$folder."' height='120' width='100'/>";
                          echo '<div class="member">';
                          echo '<div class="profilePic"><img class="profpic" src="https://exodusmoving.com/wp-content/uploads/2016/08/profile-filler-female.jpg"></div>';
                          echo '<div class="row1"><b>'.$row['AFname'].' '.$row['ALname'].'</b></div>';
                          echo '<div class="row1">'.$row['Amajor'].'</div>';
                          echo '<div class="row1">'.$row['Adesignation'].', '.$row['Acompany'].'</div>';
                          echo '
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin:0 auto; margin-top:5px;">
                          Contact '.$row['AFname'].'
                        </button>

                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <form>
                                      <div class="form-group row">
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Name*">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Company*">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Designation*">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" id="inputPassword3" placeholder="Email*">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                              <div class="col-sm-10">
                                               <textarea rows="6" placeholder="Message*" style="width:100%;"></textarea>
                                              </div>
                                            </div>
                                     
                                      
                      
                                    </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Send</button>
                              </div>
                            </div>
                          </div>
                        </div>';
                          echo '</div>';
                      }
                      }*/ 
                      ?>
                    -->
                          <div class="member">
                          <div class="profile">

                          <div class="profilePic">
                            <img class="profpic" src="https://exodusmoving.com/wp-content/uploads/2016/08/profile-filler-female.jpg">
                          </div>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin:0 auto;">
                              Contact
                            </button>
                        </div>
                          <div class="smallInfo">
                            <div class="row1"><b>Youssef Ashraf</b></div>
                          <div class="row1">Computer Science</div>
                          <div class="row1">Intern, MBRSG</div>
                          <div class="memberBio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Torquatus, is qui consul cum Cn. Duo Reges: constructio interrete. Non pugnem cum homine, cur tantum habeat in natura boni; Quis contra in illa aetate pudorem, constantiam, etiamsi sua nihil intersit, non tamen diligat? Simus igitur contenti his.</div>
                          </div>
                        </div>
                          <div class="member">
                            <div class="profile">
                              <div class="profilePic"><img class="profpic" src="https://exodusmoving.com/wp-content/uploads/2016/08/profile-filler-female.jpg"></div>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin:0 auto;">
                                  Contact
                                </button>
                            </div>
                            
                              <div class="smallInfo">
                                <div class="row1"><b>Youssef Ashraf</b></div>
                              <div class="row1">Computer Science</div>
                              <div class="row1">Intern, MBRSG</div>
                              <div class="memberBio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Torquatus, is qui consul cum Cn. Duo Reges: constructio interrete. Non pugnem cum homine, cur tantum habeat in natura boni; Quis contra in illa aetate pudorem, constantiam, etiamsi sua nihil intersit, non tamen diligat? Simus igitur contenti his.</div>
                              </div>
                            </div>
                          <div class="member">
                            <div class="profile">
                          <div class="profilePic"><img class="profpic" src="https://exodusmoving.com/wp-content/uploads/2016/08/profile-filler-female.jpg"></div>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin:0 auto;">
                              Contact
                            </button>
                          </div>
                          <div class="smallInfo">
                            <div class="row1"><b>Youssef Ashraf</b></div>
                          <div class="row1">Computer Science</div>
                          <div class="row1">Intern, MBRSG</div>
                          <div class="memberBio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Torquatus, is qui consul cum Cn. Duo Reges: constructio interrete. Non pugnem cum homine, cur tantum habeat in natura boni; Quis contra in illa aetate pudorem, constantiam, etiamsi sua nihil intersit, non tamen diligat? Simus igitur contenti his. </div>
                          </div>
                        </div>
                          

                    


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

