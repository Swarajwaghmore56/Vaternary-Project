<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Review - <?php echo $websitename; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Clinic
  * Template URL: https://bootstrapmade.com/clinic-bootstrap-template/
  * Updated: Jul 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="doctors-page">

   <?php include('header.php'); ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Review</h1>
              <p class="mb-0">
                We4 Healthcare delivers exceptional quality in veterinary nutrition and animal health solutions. Their products are reliable, GMP & ISO certified, and backed by expert pharmacists and veterinarians. The team is highly responsive, supportive, and committed to timely delivery. Their continuous innovation and customized solutions make them a trusted partner for clinics, distributors, and livestock farms. Highly recommended.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Review</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Reviews Section -->
<section id="reviews" class="doctors section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <!-- Review Card 1 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="doctor-card review-card" data-name="Ravi Patil" data-role="Dairy Farm Owner"
          data-stars="5" data-review="We4 Healthcare products improved milk yield and animal health. Excellent support and fast delivery. Highly recommended!"
          data-img="assets/img/health/desi.webp">
          <div class="doctor-image">
            <img src="assets/img/health/desi.webp" alt="Client Review" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Ravi Patil</h4>
            <span class="specialty">Dairy Farm Owner</span>
            <p>"WE4 Healthcare products improved milk yield and animal health..."</p>
            <div class="doctor-meta">
              <div class="experience">
                <i class="bi bi-star-fill"></i>
                <span>5 Star Review</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Review Card 2 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card review-card" data-name="Janardhan Ghadge" data-role="Veterinary Distributor"
          data-stars="5" data-review="Best quality veterinary supplements. GMP & ISO certified products at affordable prices. Great experience working with them!"
          data-img="assets/img/health/khillar.webp">
          <div class="doctor-image">
            <img src="assets/img/health/khillar.webp" alt="Client Review" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Anjali Deshmukh</h4>
            <span class="specialty">Veterinary Distributor</span>
            <p>"Best quality veterinary supplements..."</p>
            <div class="doctor-meta">
              <div class="experience">
                <i class="bi bi-star-fill"></i>
                <span>5 Star Review</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Review Card 3 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="doctor-card review-card" data-name="Mahesh Shinde" data-role="Poultry Farm Owner"
          data-stars="4.8" data-review="Their customized products helped our birds grow healthier. Delivery always on time. Very professional team!"
          data-img="assets/img/health/poltery.webp">
          <div class="doctor-image">
            <img src="assets/img/health/poltery.webp" alt="Client Review" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Mahesh Shinde</h4>
            <span class="specialty">Poultry Farm Owner</span>
            <p>"Their customized products helped our birds grow healthier..."</p>
            <div class="doctor-meta">
              <div class="experience">
                <i class="bi bi-star-fill"></i>
                <span>4.8 Star Review</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Review Card 4 -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="doctor-card review-card" data-name="Dr. Priya Kulkarni" data-role="Veterinary Doctor"
          data-stars="5" data-review="Formulations are effective and clinically reliable. Excellent results in cattle and pets. Trustworthy company!"
          data-img="assets/img/health/doctor (2).webp">
          <div class="doctor-image">
            <img src="assets/img/health/doctor (2).webp" alt="Client Review" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Dr. Priya Kulkarni</h4>
            <span class="specialty">Veterinary Doctor</span>
            <p>"Formulations are effective and clinically reliable..."</p>
            <div class="doctor-meta">
              <div class="experience">
                <i class="bi bi-star-fill"></i>
                <span>5 Star Review</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- /Reviews Section -->

<!-- Review Popup Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="reviewName"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <img id="reviewImg" src="" class="img-fluid rounded mb-3" style="max-width:150px;">
        <h6 id="reviewRole"></h6>

        <div id="reviewStars" class="my-2"></div>

        <p id="reviewText"></p>
      </div>

    </div>
  </div>
</div>

<script>
document.querySelectorAll(".review-card").forEach(card => {
  card.addEventListener("click", function() {

    document.getElementById("reviewName").innerText = this.dataset.name;
    document.getElementById("reviewRole").innerText = this.dataset.role;
    document.getElementById("reviewText").innerText = this.dataset.review;
    document.getElementById("reviewImg").src = this.dataset.img;

    let stars = "";
    let rating = this.dataset.stars;

    for (let i = 1; i <= 5; i++) {
      stars += i <= rating ? '<i class="bi bi-star-fill text-warning"></i>' : '<i class="bi bi-star"></i>';
    }

    document.getElementById("reviewStars").innerHTML = stars;

    let modal = new bootstrap.Modal(document.getElementById('reviewModal'));
    modal.show();
  });
});
</script>


  </main>

  <?php include('footer.php'); ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>