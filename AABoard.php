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
                      <li class="breadcrumb-item "><a href="AA.php">Alumni Association</a></li>
                      <li class="breadcrumb-item active" aria-current="page" id="breadcrumbCurrent">AA Board</li>
                    </ol>
                  </nav>

              <div class="row" id="contentBox">
                <div class="col-4">
              <div class="list-group">
                <!-- Change active relative to current webpage -->
                <a href="AA.php" class="list-group-item list-group-item-action">
                  Alumni Association
                </a>
                <a href="AAStructure.php" class="list-group-item list-group-item-action">AA Structure</a>
                <a href="AARoles.php" class="list-group-item list-group-item-action">AA Roles & Responsiblities</a>
                <a href="AABoard.php" class="list-group-item list-group-item-action active " id="main">AA Board</a>
                <a href="AAEligibility.php" class="list-group-item list-group-item-action">Eligbility</a>
                <a href="AARegulations.php" class="list-group-item list-group-item-action">Regulations & Bylaws</a>

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
                            <img class="profpic" src="assets/imgs/Hany-Profile pic.JPG">
                          </div>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin:0 auto;">
                              Contact
                            </button>
                        </div>
                          <div class="smallInfo">
                            <div class="row1"><b>Hany Samir, President</b></div>
                          <div class="row1">Policy and Research Specialist, MOHRE</div>
                          <div class="row1">Masters of Public Administration, 2011</div>
                          <div class="memberBio">

<p>Hany Samir is the president of ALUMNI Association Board at Mohammed Bin Rashid School of Government (MBRSG). Hany holds MPA (Master of Public Administration) from MBRSG (formerly known as Dubai School of Government) in cooperation with Harvard Kennedy School. His bachelor degree is in Economics from Faculty of Economics and Political science (English section) at Cairo University.</p>

<p>Hany is an experienced public policy consultant with around 10 years of experience in research and public policy analysis. He conducted many researches covering wide spectrum of public sector aspects including labour economics, trade, investment, and economic development.</p>

<p>Currently, he is working as policy and research specialist at policy and research department of the Ministry of Human Resources and Emiratisation (MOHRE). Prior joining MOHRE, He worked as research manager at public sector department of Kantar TNS in their UAE office. In addition, he worked in research for the following organizations in Egypt: the Australian Embassy in Cairo, Office of the Minister of Trade and industry, Office of the Minister of Investment, and Office of the Minister of Communications and Information Technology.</p>

<p>It is worth mentioning that Hany joined UNDP and GIZ teams to manage two key projects for the Egyptian government, which tacked the adoption of Results Based Management System in the government, besides the reform of HR departments in the public sector.  </p>

<p>Hany has proven his strong expertise in qualitative research, data analysis, comparative studies, organizational development, strategic planning, and performance management.


</div>
                          </div>
                        </div>
                          <div class="member">
                            <div class="profile">
                              <div class="profilePic"><img class="profpic" src="assets/imgs/633B9401.jpg"></div>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin:0 auto;">
                                  Contact
                                </button>
                            </div>
                            
                              <div class="smallInfo">
                                <div class="row1"><b>Humaid AlShamsi – Executive Secretary</b></div>
                              <div class="row1">Project Manager, Executive Council of Dubai</div>
                              <div class="row1">Masters of Public Administration, 2017</div>
                              <div class="memberBio">

<p>Humaid AlShamsi is a Project Manager at The Executive Council of Dubai, where Humaid manages different type of projects aim of focusing the efforts of different government entities to create the necessary positive change in their services, and to add new, pioneering and unprecedented dimensions of excellence to government services delivery, contributing by that to the achievement of the service improvement and supporting the sustainable growth and development of cities in all sectors. He supports the government’s commitment to providing a better life to its customers from all segments and in all areas.</p>
<p>He graduated from MBRSG with Master of Public Administration and bachelor of Computer Engineering from Khalifa University of Science and Technology.</p>
</div>
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
<?php
include_once("ftr.php");
?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    </body>
</html>

