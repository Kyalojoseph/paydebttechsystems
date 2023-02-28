
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PaydebtTecsystems</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('public/assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset ('public/assets/img/Debt1.jpg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{asset ('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Denilink - v4.9.1
  * Template URL: https://bootstrapmade.com/denilink-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @csrf



  <!-- ======= Header ======= -->
@include('includes.header')
  
	

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
       

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('{{ asset('assets/img/slide/slide-3.webp')}}');">
          
          <div class="container">
            <h2>Welcome to <span>Debt manager</span></h2>
            <p>This is a medium where one can get their money repaid through frustrating the debtor with an annoying message from the site.</p>
            <a href="{{url('/debtype')}}" class="btn-get-started scrollto">Click Here To Vlaim Your Debt</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
   <!-- <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Debt Collection</a></h4>
              <p class="description">We help you collect debt from people who have refused to pay you</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Educating Mass about Debt</a></h4>
              <p class="description">We help the mass on how to avoid been in debt and how to repay debt willingly</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Debt management</a></h4>
              <p class="description">We help people manage debt and settle it at the required time</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Giving loans</a></h4>
              <p class="description">We give our clients loans at a fair interest</p>
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Featured Services Section -->



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Debt mangement system is a easy to use system that ensures people have no debt history with others and hence restoring unity, love and peace among people.</p>
        </div>

        <div class="section-title">
          <h2>Mission</h2>
          <p>Debt mangement system is a easy to use system that ensures people have no debt history with others and hence restoring unity, love and peace among people.</p>
        </div>

        <div class="section-title">
          <h2>Vision</h2>
          <p>Debt mangement system is a easy to use system that ensures people have no debt history with others and hence restoring unity, love and peace among people.</p>
        </div>
        <div class="section-title">
          <h2>Core Values</h2>
          <p>Debt mangement system is a easy to use system that ensures people have no debt history with others and hence restoring unity, love and peace among people.</p>
        </div>

       
    <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <!--<section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Clients</strong> Happy Clients</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-debt"></i>
              <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>-->
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
   <!-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>How to avoid Petty debts</h4>
              <p>Here explain steps to avoid bad debts</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Free yourself from debt</h4>
              <p>Here educate our customers on how to free yourself</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Financial Accounting</h4>
              <p>Financial Accounting is concerned with providing useful information to those parties OUTSIDE of the business. ♦ Financial accountants are concerned with the
                 preparation of Financial Statements, which are distributed to outside parties in an annual report.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Financial literacy</h4>
              <p>Financial literacy can help individual reach their goals: By better understanding how to budget and save money, individuals can create plans that set expectations, 
                hold them accountable to their finances, and sets a course for achieving seemingly unachievable goals.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/Debt1.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--<section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Our esteemed customers have had a positive feedback about our services.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  There work is excellent keep it up
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <!--<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Paydebt Techsystems is a good company. They did a wonderful job.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>-->
            <!-- End testimonial item -->

            <!--<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Testimonial from client goes here.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>-->

            <!-- End testimonial item -->

           <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Draft a testimonial to feed here.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>-->
            </div><!-- End testimonial item -->

            <!--<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Draft a testimonial to feed Here----Just a fake draft 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>End testimonial item 

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= About debt section ======= -->
    <!--<section id="about debt" class="about debt section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Debt</h2>
          <p>Debt is something one cannot avoid in all sorts of life</p>
        </div>
       

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                             
              </div>
            
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
               
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Debt Consultant</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/Debt3.webp" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Debt Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/Debt2.webp" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Doctors Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>We charge our customers according to the amount they owe one</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>20Ksh</h3>
              <h4><sup>Ksh</sup>0 -500</h4>
              
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Request Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Ksh 30</h3>
              <h4><sup>Ksh</sup>501- 2500</h4>
              
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Request Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Ksh 50</h3>
              <h4><sup>ksh</sup>2501-5000</h4>
              
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Request  Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Ksh100</h3>
              <h4><sup>Ksh</sup>5001-10000</h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Request Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Ksh200</h3>
              <h4><sup>Ksh</sup>10001-50000</h4>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Request Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  
    <!-- ======= Contact Section ======= -->
    <!--<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Get in Touch With us using The following Contact Details

      </div>

      <div class="container">

        

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@pknzuki.com<br>+254722310358</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+254722310358<br>+254722310358</p>
                </div>
              </div>
            </div>

          </div>
      </div>
    </section>--->
    <!-- End Contact Section -->

  </main><!-- End #main -->

@include('includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset ('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset ('vendor/aos/aos.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset ('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset ('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset( 'js/main.js')}}"></script>

</body>

</html>
