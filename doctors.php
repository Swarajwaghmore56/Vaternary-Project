<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Review - <?php echo $websitename; ?></title>

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="doctors-page">

<?php include('header.php'); ?>

<main class="main">

<!-- Page Title -->
<div class="page-title">
  <div class="heading">
    <div class="container text-center">
      <h1 class="heading-title">Reviews</h1>
      <p>Real feedback from our trusted clients across India.</p>
    </div>
  </div>
</div>

<!-- Reviews Section -->
<section id="reviews" class="doctors section">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <!-- Review Card 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="doctor-card review-card"
          data-name="Ravi Patil"
          data-role="Dairy Farm Owner"
          data-stars="5"
          data-review="We4 Healthcare products improved milk yield and animal health. Excellent support and fast delivery. Highly recommended!"
          data-img="assets/img/health/staff-1.webp">

          <div class="doctor-image">
            <img src="assets/img/health/staff-1.webp" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Ravi Patil</h4>
            <span>Dairy Farm Owner</span>
            <p>"We4 Healthcare products improved milk yield..."</p>
          </div>
        </div>
      </div>

      <!-- Review Card 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="doctor-card review-card"
          data-name="Anjali Deshmukh"
          data-role="Veterinary Distributor"
          data-stars="5"
          data-review="Best quality veterinary supplements. GMP & ISO certified products at affordable prices. Great experience working with them!"
          data-img="assets/img/health/staff-2.webp">

          <div class="doctor-image">
            <img src="assets/img/health/staff-2.webp" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Anjali Deshmukh</h4>
            <span>Veterinary Distributor</span>
            <p>"Best quality veterinary supplements..."</p>
          </div>
        </div>
      </div>

      <!-- Review Card 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="doctor-card review-card"
          data-name="Mahesh Shinde"
          data-role="Poultry Farm Owner"
          data-stars="4.8"
          data-review="Their customized products helped our birds grow healthier. Delivery always on time. Very professional team!"
          data-img="assets/img/health/staff-3.webp">

          <div class="doctor-image">
            <img src="assets/img/health/staff-3.webp" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Mahesh Shinde</h4>
            <span>Poultry Farm Owner</span>
            <p>"Their customized products helped our birds grow healthier..."</p>
          </div>
        </div>
      </div>

      <!-- Review Card 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="doctor-card review-card"
          data-name="Dr. Priya Kulkarni"
          data-role="Veterinary Doctor"
          data-stars="5"
          data-review="Formulations are effective and clinically reliable. Excellent results in cattle and pets. Trustworthy company!"
          data-img="assets/img/health/staff-4.webp">

          <div class="doctor-image">
            <img src="assets/img/health/staff-4.webp" class="img-fluid">
          </div>
          <div class="doctor-content">
            <h4>Dr. Priya Kulkarni</h4>
            <span>Veterinary Doctor</span>
            <p>"Formulations are effective and clinically reliable..."</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Modal Popup -->
<div class="modal fade" id="reviewModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 id="reviewName"></h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <img id="reviewImg" class="img-fluid rounded mb-3" style="max-width:150px;">
        <h6 id="reviewRole"></h6>

        <div id="reviewStars" class="my-2"></div>

        <p id="reviewText"></p>
      </div>

    </div>
  </div>
</div>

<script>
// STAR SYSTEM + MODAL CLICK HANDLER
function generateStars(rating) {
  let html = "";
  rating = parseFloat(rating);

  for (let i = 1; i <= 5; i++) {
    if (rating >= i) {
      html += '<i class="bi bi-star-fill text-warning"></i>';
    } else if (rating >= i - 0.5) {
      html += '<i class="bi bi-star-half text-warning"></i>';
    } else {
      html += '<i class="bi bi-star"></i>';
    }
  }

  return html;
}

document.querySelectorAll(".review-card").forEach(card => {
  card.addEventListener("click", function () {

    document.getElementById("reviewName").innerText = this.dataset.name;
    document.getElementById("reviewRole").innerText = this.dataset.role;
    document.getElementById("reviewText").innerText = this.dataset.review;
    document.getElementById("reviewImg").src = this.dataset.img;

    document.getElementById("reviewStars").innerHTML = generateStars(this.dataset.stars);

    new bootstrap.Modal(document.getElementById("reviewModal")).show();
  });
});
</script>

</main>

<?php include('footer.php'); ?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
