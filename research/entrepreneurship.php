<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Icon -->
  <link href="../vender/img/logo/PCCOE_LOGO_b.jpg"  rel="shortcut icon" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="../vender/css/bootstrap.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
  <link href="../vender/css/navbar.css" rel="stylesheet" />
  <link href="../vender/css/style1.css" rel="stylesheet" />
   <!-- Icon Link -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   <link href="imp-pccoe-style.css" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <title>
    Enterpreneurship | Research | Department of Mechanical Engineering at PCCOE
  </title>
</head>
<body>
 <!-- Start Header -->
 <?php include("pccoe-header.php"); ?>
 <header>
  <div class="container-fluid header">
      <div class="row">
          <div class="col-lg-3 text-center d-flex justify-content-around align-items-center">
              <div>
                <div class="extern-btn">
                  <a href="http://www.pccoepune.com/" class="text-decoration-none">
                    <i class="fas fa-home"></i> PCCOE
                  </a>
                </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="text-center">
                   <h4 class="dept-name fs-3 mb-3">Department Of Mechanical Engineering</h4>
              </div>
          </div>
          <div class="col-lg-3"></div>
      </div>
  </div>
</header>
<!-- End Header -->

  <!-- Start Navbar -->
  <div class="menu-section d-flex justify-content-around">
    <nav id="menu">
        <label for="tm" id="toggle-menu"><b>Menu</b> <span class="drop-icon"><b>&#9776;</b></span></label>
        <input type="checkbox" id="tm">
        <ul class="main-menu cf">
            <li class="b-left"><a href="../index.php">Home</a></li>
            <li class="b-left"><a href="#">About us
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
                </a>
                <input type="checkbox" id="sm0">
                <ul class="sub-menu">
                    <li><a href="../aboutus/hod_desk.php">HOD Desk</a></li>
                    <li><a href="../aboutus/vision-mission.php">Vision and Mission</a></li>
                    <li><a href="../aboutus/program_outcome.php">Program Outcomes</a></li>
                    <li><a href="../aboutus/BOS.php">Board Of Studies</a></li>
                    <li><a href="../aboutus/student_alumni.php">Student and Alumni's</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">People
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm88">▾</label>
              </a>
              <input type="checkbox" id="sm88">
              <ul class="sub-menu">
                  <li><a href="../people/faculty.php">Faculty</a></li>
                  <li><a href="../people/staff.php">Staff</a></li>
              </ul>
          </li>
            <li class="b-left"><a href="#">Academics
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm8">▾</label>
                </a>
                <input type="checkbox" id="sm8">
                </a>
                <ul class="sub-menu">
                    <li><a href="../ug/co_cordinator_desk.php">UG</a></li>
                    <li>
                      <a href="">PG
                        <span class="drop-icon">▸</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm5">▾</label>
                      </a>
                      <input type="checkbox" id="sm5">
                      </a>
                      <ul class="sub-menu">
                          <li><a href="../pg/me-design.php">M.Tech Design Engineering</a></li>
                          <li><a href="../pg/me-heatpower.php">M.Tech Heat Power Engineering</a></li>
                      </ul>
                    </li>
                    <li><a href="../phd/phd_home.php">Ph. D</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Research
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smr">▾</label>
                </a>
                <input type="checkbox" id="smr">
                </a>
                <ul class="sub-menu">
                    <li><a href="../research/research_team.php">Research Team</a> </li>
                    <li><a href="../research/sig.php">Special Interest Groups (SIG)</a></li>
                    <li><a href="../research/publication.php">Publication</a></li>
                    <li><a href="../research/copyright.php">Intellectual Property Rights</a></li>
                    <li><a href="../research/research funding.php">Research Funding </a></li>
                    <li><a href="../research/cs_projects.php">Consultancy/Sponsored Projects</a></li>
                    <li><a href="../research/student_achivements.php">Student Achievements</a></li>
                    <li><a href="../research/entrepreneurship.php">Entrepreneurship</a></li>
                </ul>
            </li>

            <li class="b-left"><a href="#">Training & Placement
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm50">▾</label>
              </a>
              <input type="checkbox" id="sm50">
              </a>
              <ul class="sub-menu">
                  <li><a href="../placement/recruiter.php">Major Recruiters</a></li>
                  <li><a href="../placement/placement.php">Placement</a></li>
                  <li><a href="../placement/internship.php">Internship</a></li>
                  <li><a href="../placement/training.php">Industrial Visit & Training Program</a></li>
                  <li><a href="../placement/mou.php">MOU's</a></li>
              </ul>
            </li>
            <li class="b-left"><a href="#">Facilities
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsfc">▾</label>
                </a>
                <input type="checkbox" id="smsfc">
                </a>
                <ul class="sub-menu">
                    <li><a href="../facilities/public_html/laboratories.php">Laboratories</a></li>
                    <li><a href="../facilities/public_html/library.php">Library</a></li>
                    <li><a href="../facilities/public_html/seminar_hall.php">Seminar Hall</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Student Development & Welfare
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
                </a>
                <input type="checkbox" id="smsdw">
                </a>
                <ul class="sub-menu">
                    <li><a href="../Student_development&Welfare/public_html/higher_studies.php">Higher study cell</a></li>
                    <li><a href="../Student_development&Welfare/public_html/Communication_Personality_Development.php">Communication and Personality Development Cell</a></li>
                    <li><a href="../Student_development&Welfare/public_html/professional_development.php">Professional Development Cell</a></li>
                    <li><a href="../Student_development&Welfare/public_html/ISR.php">Institutional Social Responsibility</a></li>
                    <li><a href="../Student_development&Welfare/public_html/nation_services_scheme.php">National Service Scheme</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Clubs
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm9">▾</label>
                </a>
                <input type="checkbox" id="sm9">
                </a>
                <ul class="sub-menu">
                    <li><a href="../clubs/mesa.php">MESA</a></li>
                    <li><a href="../clubs/ambush.php">Team Ambush</a></li>
                    <li><a href="../clubs/redbaron.php">Team Red Baron</a></li>
                    <li><a href="../clubs/kratos.php">Team Kratos Racing</a></li>
                    <li><a href="../clubs/solarium.php">Team Solarium</a></li>
                    <li><a href="../clubs/automaton.php">Team Automatons</a></li>
                    <li><a href="../clubs/maverick.php">Team Maverick</a></li>
                    <li><a href="../clubs/ishrae.php">ISHRAE</a></li>
                    <li><a href="../clubs/iei.php">IEI</a></li>
                    <li><a href="../clubs/sport.php">Sports</a></li>
                </ul>
            </li>
            <li class="b-left b-right"><a href="../contact_us/contact.php">Contact us</a></li>
        </ul>
    </nav>
</div>
<!-- End Navbar -->
<br><br>
<section class="p-md-3 p-md-3">
  <div class="container-lg ">
    <div class="border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark">
      <h2>
      Entrepreneur Development Cell
      </h2>
    </div>
<div class="container program-outcome hod-desk bg-light">
  <br>
  <div class="accordion accordion-flush" id="accordionFlushExampletwo">
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingOnee">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnee" aria-expanded="false" aria-controls="flush-collapseOnee">
             <h6>Alumni registered their start-ups (Year 2021-22)</h6> 
          </button>
        </h2>
        <div id="flush-collapseOnee" class="accordion-collapse collapse show" aria-labelledby="flush-headingOnee" data-bs-parent="#accordionFlushExampletwo">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary">
                      <tr>
                          <th>Sr. No.</th>
                          <th>Name of student</th>
                          <th>Year of graduation</th>
                          <th>Company Name</th>
                          <th>Designation</th>
                          <th>Registration Number</th>
                          <th>Date of Registration</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>1</td>
                        <td>Malekar Praful Dilip</td>
                        <td>2020-21</td>
                        <td>Malekar Education and Venture LLP</td>
                        <td>Managing Director</td>
                        <td>UDYAM-MH-08-0002080, 
CIN: AAQ-6132.
DIN:08568751</td>
                        <td>20 September 2019</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Mr. Sarang Kawade</td>
                        <td>2021-22</td>
                        <td>klutchbikes Electric Vehicle</td>
                        <td>Managing Partner</td>
                        <td>CIN: AAY-7790
DIN: 09336930</td>
                        <td>28 September 2021</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Mr. Saransh Goyal</td>
                        <td>2021-22</td>
                        <td>klutchbikes Electric Vehicle</td>
                        <td>Managing Partner</td>
                        <td>CIN: AAY-7790
DIN: 09333040</td>
                        <td>28 September 2021</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Mr. Manish Kumar</td>
                        <td>2021-22</td>
                        <td>klutchbikes Electric Vehicle</td>
                        <td>Managing Partner</td>
                        <td>CIN: AAY-7790
DIN: 09336931</td>
                        <td>28 September 2021</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Dhanashu Acharya</td>
                        <td>2022-23</td>
                        <td>Epsitek Technologies LLP</td>
                        <td>Managing Director</td>
                        <td>CIN: AAY-5029
DIN 09311589</td>
                        <td>8 September 2021
</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      <!-- <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingFouro">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFouro" aria-expanded="false" aria-controls="flush-collapseFouro">
              <h6>>>> 2020-21</h6>
          </button>
        </h2>
        <div id="flush-collapseFouro" class="accordion-collapse collapse" aria-labelledby="flush-headingFouro" data-bs-parent="#accordionFlushExampleFour">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary">
                      <tr>
                          <th>Sr. No.</th>
                          <th>Investigators</th>
                          <th>Project title</th>
                          <th>Amt. in Rs.</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dr A Roy, Shweta Suryawnshi, SIG - Renewable & Sustainable Energy</td>
                        <td>1 week FDP on "Beginners Perspective of Electric Vehicle"</td>
                        <td>21,600</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>U. I. Shaikh</td>
                        <td>Testing of Bio Diesel Blends in I. C. Engine lab</td>
                        <td>7000</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>L.V. Awadhani (Coordinator) , J P Wagh, S.K.Bhoite, A.A. Panchwadkar, N.Vivekanandan, Dr.P.R.Kale, Mrs.R.S.Pimpalkar</td>
                        <td>Training Programme on Fundamentals of Mechanical Engg for Kone Cranes Employees</td>
                        <td>70,216</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div> -->
      
  </div>
</div>
  </div>
</section>


<br><br>
    <!-- Content page-->
    <div class="container">
        <div class="row border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark mt-4">
            <h2>Events conducted during 2021-22</h2>
        </div>
    </div>
    <div class="container mt-4 rounded p-2 hod-desk bg-light">
        <div class="row mt-5">
            <div class="col-xl-4">
                <div class="text-center">
                    <img src="img/eventimg1.jpg" class="rounded pb-2" style = "max-width : 250px"/>
                    <p class="">
                        <b> Ms. Soumya Kalluri </b><br>
                        <small>Founder Dwij Upcycled.</small><br>
                    </p>
                </div>
            </div>
            <div class="col-xl-8">
                <p class="text-data">
                    <b>Date: </b>21th August 2021
                </p>
                <p class="text-data">
                    <b>Time: </b>3:30 PM to 4:30PM (IST)
                </p>
                <p><b>On the occasion of International Entrepreneur Week</b> “Celebration of Energy Conservation Day”</p>
                <p><b>Celebration of Energy Conservation by having awareness Session on “Tips for Energy Conservation in Day to Day Life”</b><br>
                14th December (3-4 PM) <br>
Attendance: 62 (Students and faculty)

                </p>
            </div>
        </div>
    </div>
    <!-- Content page-->
    <div class="container">
        <div class="row border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark mt-4">
            <h2>Events conducted during 2020-21</h2>
        </div>
    </div>
    <div class="container mt-4 rounded p-2 hod-desk bg-light" style = "display : flex; justify-content : center; align-items: center; flex-direction : column">
        <img src="img/eventimg2.jpg" alt="" style = " max-width : 50%">
        <h3 class = "mt-5">Webinar: How to build the foundation of your own Startup</h3>
        <p style = "font-size : 20px; "><b>Date: </b>17 December 2020, Thursday <br> <b>Time: </b>4:00-5:00 PM <br><b>Spearker: </b>Manik Dua (Head of Analytics and Revenue at Metvy) <br><b>Attendees: </b>64</p>
      </div>
<br><br>
    <!-- Content page-->
    <div class="container">
        <div class="row border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark mt-4">
            <h2>Events conducted during 2019-20</h2>
        </div>
    </div>
    <div class="container mt-4 rounded p-2 hod-desk bg-light">
        <div class="row mt-5">
        <table class="table table-hover table-borderless">
                        <thead class="table-primary">
                            <tr>
                                <th>Name of Program</th>
                                <th>Date </th>
                                <th>Venue</th>
                                <th>Resource person</th>
                                <th>Name of coordinator/Dept.</th>
                                <th>No. of participants</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Entrepreneurship awareness camp (EAC)</td>
                              <td>9 to 11 Jan. 2020</td>
                              <td>LRDC hall PCCoE</td>
                              <td>De. S. S. Lakade, Mr. Sopan Aghav</td>
                              <td>MCA Dept. Mr. Sopan Aghav</td>
                              <td>12</td>
                            </tr>
                            <tr>
                              <td>Industrial Motivational Campaign (IMC-Youth)</td>
                              <td>14  and 15 Feb. 2020</td>
                              <td>LRDC hall PCCoE</td>
                              <td>Shirish Warudkar, S.M. Katti & others</td>
                              <td>Dr. C. L. Ladekar & Dr. S. S. Lakade</td>
                              <td>105</td>
                            </tr>
                            <tr>
                              <td>Industrial Motivational Campaign
(IMc-Cluster) for
MSME
</td>
                              <td>15 Feb. 2020</td>
                              <td>LRDC hall PCCoE</td>
                              <td>Manoj Sharma SIDBI</td>
                              <td>Dr. S. S. Lakade</td>
                              <td>25</td>
                            </tr>
                            <tr>
                              <td>Entrepreneurship Awareness
Programme (EAP) (2 Weeks)
</td>
                              <td>14 Feb. to 4 March 2020</td>
                              <td>LRDC hall PCCoE</td>
                              <td>AIC pinnacle</td>
                              <td>Mr. A. N. Kore &  Dr. S. S. Lakade</td>
                              <td>35</td>
                            </tr>
                            <tr>
                              <td>Entrepreneurship -cum-Skill
Development Programme (E-SDP 6 Weeks) 
</td>
                              <td>20 Feb. to 24 March 2020 </td>
                              <td>LRDC hall PCCoE</td>
                              <td>Nayan Electronics</td>
                              <td>Mr. S. B. Matekar &  Dr. S. S. Lakade</td>
                              <td>23</td>
                            </tr>
                        </tbody>
                    </table>
        </div>
    </div>





    <!-- start footer -->
    <footer class="container-fluid">
  <div class="row bg-blue d-flex justify-content-center px-5 pb-3 mt-md-4">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="text-white">
          <div class="mt-5">
            <h5>
              <p class="text-white text-center">
                Follow us
              </p>
            </h5>
          </div>
          <div class="d-flex justify-content-evenly align-self-center">
            <a targrt="_blank" href="https://www.instagram.com/pccoepune/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-instagram"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.linkedin.com/company/pccoe-pune/?trk=biz-companies-cym" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-linkedin-in"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.facebook.com/PCCOENigadi/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-facebook"></i>
              </span> 
            </a>
            
            <a targrt="_blank" href="https://twitter.com/pccoe_pune?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-twitter"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.youtube.com/channel/UCQiPDETOiteTLmAvvPk1WjA" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-youtube"></i>
              </span> 
            </a>
          </div>
      </div>
    </div>
    <div class="col-md-4"></div>
    
  </div>
  <div class="row bg-blue d-flex justify-content-center px-5 pt-md-5">
    <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-map-marker-alt"></i> Location
          </p>
        </h5>
      </div>
      <div class="text-white">
        <address>
          <h6>Sector - 26, Pradhikaran, Nigdi,</h6>
          <h6>Near Akurdi Railway Station,</h6>
          <h6>Pune - 411 044.</h6>
        </address>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-phone"></i> Contact us
          </p>
        </h5>
      </div>
      <div class="text-white">
          <h6>Tele : 020 – 2765 3168</h6>
          <h6>Tele : 020 – 2765 3166</h6>
          <h6>Ph : +91 9960984347</h6>
          <h6>
            <a targrt="_blank"  href="mailto:admin@pccoepune.org" class="text-decoration-none text-white">
              <i class="fas fa-envelope"></i>&nbsp; admin@pccoepune.org</a>
            </a>
          </h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-link"></i> Useful Links
          </p>
        </h5>
      </div>
      <div>
        <div>
          <p>
            <a targrt="_blank"  href="index.php" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> Homepage
              </h6>
            </a>
          </p>
          <p>
            <a targrt="_blank" href="http://www.pccoepune.com/" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> PCCOE
              </h6>
            </a>
          </p>
          <p>
            <a targrt="_blank" href="http://pcet.org.in/" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> PCET
              </h6>
            </a>
          </p>
      </div>
      </div>
    </div>
  </div>
</footer><?php include("pccoe-footer.php"); ?>
      <!-- End footer -->
    <script src="../vender/js/bootstrap.bundle.js"></script>
</body>
</html>