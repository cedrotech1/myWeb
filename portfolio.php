<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

<?php
include './includes/header.php';

?>
  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>
            those are different projects i did in past with in different technologiew as client wishes or i prefer depends what project will do!
            the most of following project  is web applications, desktop application, and adroid apps....
          </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">desktop application</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">




          <?php

                  $pic = ["assets/img/portfolio/portfolio-1.jpg","assets/img/portfolio/portfolio-2.jpg","assets/img/portfolio/portfolio-3.jpg",
                  "assets/img/portfolio/portfolio-4.jpg","assets/img/portfolio/portfolio-5.jpg","assets/img/portfolio/portfolio-6.jpg",
                  "assets/img/portfolio/portfolio-7.jpg","assets/img/portfolio/portfolio-8.jpg","assets/img/portfolio/portfolio-9.jpg"];
                    include './connection.php';
	
                    $sql = "SELECT * FROM project";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       $category=$row['category'];
                       $description=$row['description'];
                       $date=$row['project_date'];
                       $url=$row['url'];
                       $title=$row['title'];
                       $t='';
                       if($category=='filter-web')
                       {
                        $t='web application';
                       }
                       if($category=='filter-card')
                       {
                        $t='desktop application';
                       }
                       if($category=='filter-app')
                       {
                        $t='app';
                       }
                       ?>
                       
                      
                      <div class="col-lg-4 col-md-6 portfolio-item <?php echo $category ?>">
                        <div class="portfolio-wrap">
                          <img src=<?php echo $pic[$i] ?> class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4> <?php echo $t ?></h4>
                            <p style="font-size:12px"><?php echo $title ?>  </p>
                            <div class="portfolio-links">
                              <a href=<?php echo $pic[$i] ?> data-gallery="portfolioGallery" class="portfolio-lightbox" title=" <?php echo $description.'<br><br>'.$date?>">  <i class="bx bx-plus"></i></a>
                              <a href="<?php echo $url ?>" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>


                       <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>

         










        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php
include './includes/footer.php';

?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>