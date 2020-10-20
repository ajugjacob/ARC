<?php
// Main Page of the website

get_header();
?>
<style>
  @media only screen and (max-width : 1100px) {
    #img1 {
      height: 300px !important;
      width: 400px;
    }

    #img2 {
      height: 300px !important;
      width: 400px;
    }

    #img3 {
      height: 300px !important;
      width: 400px;
    }

    #img4 {
      height: 300px !important;
      width: 400px;
    }
  }
</style>

<!--==========================
    Intro Section
  ============================-->
<section id="intro">
  <div class="intro-container wow fadeIn">
    <img src="<?= get_asset('img/alumni final.png') ?>" height="300 px">
    <h1 class="mb-4 pb-0">Alumni <span>Relations </span>Cell</h1>
    <a href="#about" class="about-btn scrollto">About</a>
  </div>
</section>

<main id="main">

  <!--==========================
      About Section
    ============================-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>About</h2>
          <p>
            College of Engineering Chengannur is a premier government Engineering institute situated in Chengannur of Alappuzha district, Kerala. The institution was established in 1993 under the patronage of the Institute of Human Resources and Development(IHRD). It is approved by the All India Council of Technical Education (AICTE) and is affiliated to APJ Abdul Kalam Technological University (KTU). The college offers four undergraduate programs in Computer Science Engineering, Electrical & Electronics Engineering, Electronics & Communication Engineering and Electronics & Instrumentation Engineering. The Master's degree programming offered by the college are M.Tech (Electronics) with specialization in VLSI & Embedded Systems and M.Tech (Computer Science) with specialization in Image Processing.
          </p>
          <p>
            Alumni Relation Cell of the College of Engineering Chengannur was established on 15th November 2019. It mainly focuses on the development of Alumni support to do the continuing development of the institution's academics, research, placements, expansion and renewal of its faculties and providing scholarship and financial support to students.
          </p>
          <p>
            Alumni Relation Cell works towards ensuring the mutual benefit of the alumni as well as the students. ARC helps the alumni in staying connected to their campus. ARC has been instrumental in organizing the Alumni Meets, Mentorship programme, regular guest lectures by distinguished alumni in the campus.
          </p>
        </div>
      </div>
    </div>
  </section>


  <!--==========================
      Gallery Section
    ============================-->

  <section id="gallery" class="wow fadeInUp">

    <div class="container">
      <div class="section-header">
        <h2>Gallery</h2>
        <p>Check our gallery from the recent events</p>
      </div>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-70 mx-auto .hidden-xs" id="img1" src="<?= get_asset('img/gallery/gal1.jpeg') ?>" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-70 mx-auto .hidden-xs" id="img2" src="<?= get_asset('img/gallery/gal2.jpg') ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-70 mx-auto .hidden-xs" id="img3" src="<?= get_asset('img/gallery/gal3.jpg') ?>" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-70 mx-auto .hidden-xs" id="img4" src="<?= get_asset('img/gallery/gal4.jpg') ?>" alt="Fourth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-70 mx-auto .hidden-xs" id="img5" src="<?= get_asset('img/gallery/gal5.jpg') ?>" alt="Fifth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-70 mx-auto .hidden-xs" id="img6" src="<?= get_asset('img/gallery/gal6.jpg') ?>" alt="Sixth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!--==========================
     Activities
    ============================-->


  <section id="venue" class="wow fadeInUp">
    <div id="activities">
      <div class="container-fluid">

        <div class="section-header">
          <h2>ACTIVITES</h2>
          <p>Activities organized by ARC</p>
        </div>

        <div class="transportaion_area">
          <div class="container">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_transport">
                  <div class="icon">
                  </div>
                  <h3>ARC Inaugration</h3>
                  <p>The Alumni Relation Cell inauguration will take place with giving out the scholarships provided by the alumni members to the students.</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_transport">
                  <div class="icon">
                  </div>
                  <h3>Scolarship Distribution</h3>
                  <p>Scholarships are given to 10 students of our college annually by our alumni members.</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_transport">
                  <div class="icon">
                  </div>
                  <h3>Data Collection of Alumini Members</h3>
                  <p>Continuous collection of data regarding Alumni Members organized according to their batch.</p>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>




  <!--==========================
      Alumini Meet Section
    ============================-->
  <!-- 
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Alumini Meet</h2>
          <p>Here is our Alumini Meet schedule</p>
        </div>
        <div class="col-lg-9 mx-auto">
        	<p style="text-align: center; font-size: 16px">Proudly CECians the silver jubilee celebrations cum Alumini Meet of College of Engineering Chengannur is goig to be held 28th December, 2019. The Annual General Meeting and Executive Committee Elections of Alumini Association will also be held on that day.</p>
        	<br>
        </div>	

        <div class="tab-content row justify-content-center">

          <div role="tabpanel" class="col-lg-9 tab-pane fade show active">

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:00 AM</time></div>
              <div class="col-md-10">
                <h4>Registration & Tea/Coffee (Kits Handover)</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>9:30 AM</time></div>
              <div class="col-md-10">
                <h4>Class Campus Tour</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">          
                <h4>College Bus Tour around Chengannur</h4>
              </div>
            </div>


            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">          
                <h4>Classroom Session by a Lecturer</h4>
              </div>
            </div>


            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 PM</time></div>
              <div class="col-md-10">          
                <h4>Lunch & Networking</h4>
              </div>
            </div>


            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">          
                <h4>Annual General Meeting</h4>
              </div>
            </div>


            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">          
                <h4>Executive Committee Election</h4>
              </div>
            </div>


            <div class="row schedule-item">
              <div class="col-md-2"><time>03:30 PM</time></div>
              <div class="col-md-10">          
                <h4>Q&A Session for AGM</h4>
              </div>
            </div>


            <div class="row schedule-item">
              <div class="col-md-2"><time>04:45 PM</time></div>
              <div class="col-md-10">          
                <h4>Cultural Program</h4>
              </div>
            </div>

          </div> 
 
        </div>

      </div>

    </section> 
 -->


  <!--==========================
      Contributions Section
    ============================-->
  <section id="faq" class="wow fadeInUp">
    <div id="contributions">
      <div class="container">

        <div class="section-header">
          <h2>Contributions</h2>
          <p>The Contributions made by our Alumini</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Seminar Hall <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    The Seminar Hall of our college was sponsored by the 1993-97 batch of CEC.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Sahapadikkoru veed 2 lakhs rupees<i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Our alumni members have contributed about 2 lakh rupees for the program 'Sahapadikkoru Veed' organized by our college for helping a student to build his house as he lost it in the 2018 floods.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Scholarship for 10 students annually <i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    Scholarships are given to 10 students of our college annually by our alumni members.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </div>

  </section>


  <!--==========================
     Form Section
   ============================-->
  <section id="arc-form">
    <div class="container">
    <div class="section-header">
      <h2>FORM</h2>
      <p>Form by ARC</p>
    </div>
    <?php include 'form.php'; ?>
  </section>


    <!--==========================
     Invoice Section
   ============================-->
<!--<section id="arc-form">
      <div class="container">
      <div class="section-header">
        <h2>INVOICE</h2>
        <p>Invoice by ARC</p>
      </div>
      <?php //include 'admin_invoice.php'; ?>
    </section>
-->


  <!--==========================
      Team Section
    ============================-->
  <section id="speakers" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Team</h2>
        <p>The ARC Team Members</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Madhusoodhanan Nair R.jpeg') ?>" alt="Madhusoodhanan Nair R" class="img-fluid">
            <div class="details">
              <h3>Dr. Madhusoodhanan Nair R</h3>
              <p>ARC Advisor</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Alen George.jpg') ?>" alt="Alen George" class="img-fluid">
            <div class="details">
              <h3>Alen George</h3>
              <p>Fourth Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Gayathry Krishnan.jpg') ?>" alt="Gayathry Krishnan" class="img-fluid">
            <div class="details">
              <h3>Gayathry Krishnan</h3>
              <p>Fourth Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Saketh T Vinod.jpeg') ?>" alt="Saketh T Vinod" class="img-fluid">
            <div class="details">
              <h3>Saketh T Vinod</h3>
              <p>Fourth Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Anjali N Nair.jpg') ?>" alt="Anjali N Nair" class="img-fluid">
            <div class="details">
              <h3>Anjali N Nair</h3>
              <p>Fourth Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Goutham N Suresh.jpg') ?>" alt="Goutham N Suresh" class="img-fluid">
            <div class="details">
              <h3>Goutham N Suresh</h3>
              <p>Fourth Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Mekhana Maria Roy.jpg') ?>" alt="Mekhana Maria Roy" class="img-fluid">
            <div class="details">
              <h3>Mekhana Maria Roy</h3>
              <p>Fourth Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Sadiv N S.jpg') ?>" alt="Sadiv N S" class="img-fluid">
            <div class="details">
              <h3>Sadiv N S</h3>
              <p>Fourth Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Alex Paul.jpg') ?>" alt="Alex Paul" class="img-fluid">
            <div class="details">
              <h3>Alex Paul</h3>
              <p>Third Year</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Amal Xavier.jpg') ?>" alt="Amal Xavier" class="img-fluid">
            <div class="details">
              <h3>Amal Xavier</h3>
              <p>Third Year</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Archana Rose Biju.jpeg') ?>" alt="Archana Rose Biju" class="img-fluid">
            <div class="details">
              <h3>Archana Rose Biju</h3>
              <p>Third Year</p>
            </div>
          </div>
        </div>




        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Moniya Mohan.jpg') ?>" alt="Moniya Mohan" class="img-fluid">
            <div class="details">
              <h3>Moniya Mohan</h3>
              <p>Third Year</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Priyadharshini T.jpg') ?>" alt="Priyadharshini T" class="img-fluid">
            <div class="details">
              <h3>Priyadharshini T</h3>
              <p>Third Year</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="speaker">
            <img src="<?= get_asset('img/team/Ruben Mathew.jpg') ?>" alt="Ruben Mathew" class="img-fluid">
            <div class="details">
              <h3>Ruben Mathew</h3>
              <p>Third Year</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>

</main>

<?php get_footer(); ?>