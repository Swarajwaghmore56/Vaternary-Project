<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - <?php echo $websitename; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Montserrat:wght@300;400;500;600;700;800&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* CUSTOM WHY CHOOSE SECTION STYLING */
    :root {
      --accent: #0769ad;
      --muted: #6b7280;
      --card-bg: #ffffff;
      --radius: 12px;
    }

    .why-panel {
      width: 100%;
      background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
      border-radius: 18px;
      box-shadow: 0 8px 30px rgba(10, 20, 40, 0.06);
      padding: 28px;
      margin-top: 40px;
    }

    .why-badge {
      background: linear-gradient(90deg, var(--accent), #0ea5a6);
      color: #fff;
      font-weight: 700;
      padding: 8px 14px;
      border-radius: 20px;
      display: inline-block;
      margin-bottom: 15px;
    }

    .why-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 16px;
    }

    @media (max-width: 768px) {
      .why-grid {
        grid-template-columns: 1fr;
      }
    }

    .why-card {
      background: var(--card-bg);
      padding: 14px;
      border-radius: var(--radius);
      display: flex;
      gap: 12px;
      box-shadow: 0 4px 14px rgba(12, 24, 48, 0.04);
      align-items: flex-start;
    }

    .why-icon {
      width: 44px;
      height: 44px;
      display: grid;
      place-items: center;
      border-radius: 10px;
      background: rgba(7, 105, 173, 0.08);
    }

    .why-title {
      font-weight: 700;
      font-size: 15px;
    }

    .why-desc {
      font-size: 13px;
      color: var(--muted);
    }
  </style>

</head>

<body class="services-page">

  <?php include('header.php'); ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Services</h1>
              <p class="mb-0">
                At WE4 Healthcare, we deliver high-quality veterinary nutrition and health solutions designed to support dairy farms, poultry operations, clinics, and distributors. Our services focus on boosting animal productivity, improving welfare, and providing customized products backed by expert veterinary knowledge.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <!-- Service 1 -->
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/chicken.webp" class="img-fluid">
              </div>
              <div class="service-content">
                <h3>Nutritional Production for Dairy & Poultry Farms</h3>
                <p>High-quality supplements formulated to improve milk yield, growth rate, immunity, and productivity.</p>
              </div>
            </div>
          </div>

          <!-- Service 2 -->
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/farmer-cowshed-looking-after-cows.webp" class="img-fluid">
              </div>
              <div class="service-content">
                <h3>Veterinary Manufacturing Quality & Compliance Programs</h3>
                <p>On-site quality checks, regulatory compliance support, production monitoring, and continuous improvement initiatives.</p>
              </div>
            </div>
          </div>

          <!-- Service 3 -->
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/clinic.webp" class="img-fluid">
              </div>
              <div class="service-content">
                <h3>Product Customization for Clinics & Distributors</h3>
                <p>Private labeling, formulation customization, dosage modification, and bulk supply.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Services Section -->

    <!-- ⭐ WHY CHOOSE WE4 HEALTHCARE SECTION -->
    <section class="container">
      <div class="why-panel" data-aos="fade-up">

        <div class="why-badge">⭐ Why Choose We4 Healthcare</div>
        <p class="mb-3">Trusted veterinary solutions combining certified quality, clinical expertise, wide distribution, and continuous innovation.</p>

        <div class="why-grid">

          <!-- Card 1 -->
          <div class="why-card">
            <div class="why-icon">
              <i class="fas fa-award"></i>
            </div>
            <div>
              <div class="why-title">GMP & ISO Certified Products</div>
              <div class="why-desc">Ensuring safe, reliable, and high-standard veterinary formulations.</div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="why-card">
            <div class="why-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <div>
              <div class="why-title">Backed by Expert Pharmacists/Veterinarians</div>
              <div class="why-desc">Professionally developed and clinically validated products.</div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="why-card">
            <div class="why-icon">
              <i class="fas fa-truck-fast"></i>
            </div>
            <div>
              <div class="why-title">Pan-India Distribution Network</div>
              <div class="why-desc">Timely and efficient delivery across the country.</div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="why-card">
            <div class="why-icon">
              <i class="fas fa-headset"></i>
            </div>
            <div>
              <div class="why-title">Prompt Customer Support</div>
              <div class="why-desc">Dedicated team ready to support you anytime.</div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="why-card">
            <div class="why-icon">
              <i class="fas fa-lightbulb"></i>
            </div>
            <div>
              <div class="why-title">Continuous Product Innovation</div>
              <div class="why-desc">Ongoing R&D to bring new and improved solutions.</div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php include('footer.php'); ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

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
