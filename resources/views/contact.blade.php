<!DOCTYPE html>
<html lang="zxx">
  <!-- Mirrored from cutesolution.com/html/techvio/contact by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 09:35:15 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Title -->
    <title>Andalus Sofwares - IT Solutions & Business Services Company
</title>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" />
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <!-- Swiper Min CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>

  <body>
    <!-- Start Preloader Section -->
      
      <x-header/>

    <!-- Start Page Title Section -->
    <div class="page-title-area">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="page-title-content">
              <h2>Contact</h2>
              <ul>
                <li><a href="/">Home</a></li>
                <li>Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title Section -->
    <!-- Start Contact Info Section -->
    <section class="contact-info-wrapper bg-grey">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-12">
            <div class="section-title">
              <h6 class="sub-title">Find Us</h6>
              <h2>Contact Info</h2>
            </div>
          </div> -->
          <div class="col-lg-4 col-md-6">
            <div class="contact-info-content p-3">
              <h5 class="text-success">Our Timing</h5>
              <div
                class="d-flex justify-content-center gap-4 align-items-center"
              >
                <div class="">
                  <i class="flaticon-certificate text-success fs-1"></i>
                </div>
                <div>
                  <p class="fw-bold">Monday - sunday</p>
                  <p class="fw-bold">07:00AM - 05:30PM</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="contact-info-content p-3">
              <h5 class="text-success">Location</h5>
              <div
                class="d-flex justify-content-center gap-4 align-items-center"
              >
                <div class="">
                  <i class="flaticon-location text-success fs-1"></i>
                </div>
                <div>
                  <p class="fw-bold">Dessie, B/wuha</p>
                  <p class="fw-bold">Ethiopia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="contact-info-content py-3">
              <h5 class="text-success">Contact</h5>
              <div
                class="d-flex justify-content-center gap-4 align-items-center"
              >
                <div>
                  <p class="fw-bold">
                    <i
                      class="flaticon-envelope text-success p-2 fs-5"
                      style="vertical-align: middle"
                    ></i>
                    andalussoftwares@gmail.com
                  </p>
                  <p class="fw-bold">
                    <i
                      class="flaticon-call text-success p-2 fs-5"
                      style="vertical-align: middle"
                    ></i>
                    +251972440885
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Info Section -->

    <!-- Start Contact Section -->
    <div class="contact-section section-padding">
      <div class="container" id="contact">
        <div class="section-title">
          <h6 class="sub-title">Let's Talk</h6>
          <h2>Contact Us</h2>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-10 offset-lg-1">
            <div class="contact-form">
              <p class="form-message"></p>
              <form
                id="contact-form"
                class="contact-form form"
                method="POST"
                action="{{ route('contact')}}"
              >
                <div class="row" >
                  @csrf
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        required
                        placeholder="Your Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        required
                        placeholder="Your Email"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="phone"
                        id="phone"
                        required
                        class="form-control"
                        placeholder="Your Phone"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        name="subject"
                        id="subject"
                        class="form-control"
                        required
                        placeholder="Your Subject"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <textarea
                        name="message"
                        class="form-control"
                        id="message"
                        cols="30"
                        rows="6"
                        required
                        placeholder="Your Message"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn submit-btn">
                      Send Message <span></span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Section -->

    <!-- Start Map Section -->
    <div class="map-section">
      <div class="google-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.857714171496!2d39.63446208566142!3d11.123973070926274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x16470b205dbe5969%3A0xda16ad0c78c13db5!2sDese!5e0!3m2!1sen!2set!4v1713618999268!5m2!1sen!2set"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <!-- <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12266.40052111983!2d-101.81182472968649!3d39.771085537389176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x877496a0a13c3aa3%3A0xde429e634a338207!2sSt%20Francis%2C%20KS%2067756%2C%20USA!5e0!3m2!1sen!2sbd!4v1704166309039!5m2!1sen!2sbd"
        ></iframe> -->
      </div>
    </div>
    <!-- End Map Section -->

  

    <x-footer/>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper Min JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Mean Menu JS  -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Appear Min JS -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- CounterUp Min JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope Min JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Swiper Min JS -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- WOW Min JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Ajax Mail JS -->
    <script src="assets/js/ajax.mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
  </body>

  <!-- Mirrored from cutesolution.com/html/techvio/contact by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 09:35:15 GMT -->
</html>
