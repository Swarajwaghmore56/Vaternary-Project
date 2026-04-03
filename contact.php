<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - <?php echo $websitename; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="contact-page">

<?php include('header.php'); ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="heading-title">Contact</h1>
            <p class="mb-0">Let’s work together for healthier animals and better productivity.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </div>
    </nav>
  </div>

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-5">
        
        <!-- Left Contact Info Box -->
        <div class="col-lg-5">
          <div class="contact-info-wrapper">

            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="100">
              <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="info-content">
                <h3>Our Address</h3>
                <p><strong>WE4 HEALTHCARE</strong><br> Gat No. 349, Near Sadguru Fabrication, Ladba Vasti, Kesnand, Pune.</p>
              </div>
            </div>

            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
              <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
              <div class="info-content">
                <h3>Email Address</h3>
                <p><a href="mailto:we4healthcare25@gmail.com">we4healthcare25@gmail.com</a></p>
              </div>
            </div>

            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
              <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
              <div class="info-content">
                <h3>Contact Numbers</h3>
                <p>
                  <a href="tel:9850700827">Call: 9850700827</a><br>
                  <a href="https://wa.me/9850700827" target="_blank">WhatsApp: 9850700827</a>
                </p>
              </div>
            </div>

            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="400">
              <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
              <div class="info-content">
                <h3>Working Hours</h3>
                <p>Monday–Saturday: 9 AM – 6 PM<br> Sunday: Closed</p>
              </div>
            </div>

          </div>
        </div>

        <!-- Right Form Section -->
        <div class="col-lg-7">
          <div class="contact-form-card" data-aos="fade-up" data-aos-delay="200">
            <h2>Send us a Message</h2>
            <p class="mb-4">Have questions or want to learn more? Reach out to us and our team will get back to you shortly.</p>

            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row g-4">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" placeholder="Your Message" rows="6" required=""></textarea>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-submit">Send Message</button>
                </div>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>

    <!-- Updated Map -->
    <div class="container-fluid map-container" data-aos="fade-up" data-aos-delay="200">
      <div class="map-overlay"></div>
      <iframe 
        src="https://www.google.com/maps?q=WE4+Healthcare+Kesnand+Pune&output=embed"
        width="100%" 
        height="500" 
        style="border:0;" 
        allowfullscreen 
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

  </section>

</main>

<?php include('footer.php'); ?>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

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
