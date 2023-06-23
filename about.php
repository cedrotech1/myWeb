<?php

include './connection.php';
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from the table
$sql = "SELECT * FROM content";

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Create an array to store the data
    $data = array();

    // Loop through the rows and store the data in the array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();

// Access the data stored in the array
foreach ($data as $row) {
  $name = $row['name'];
    $slogan = $row['slogan'];
    $birthday = $row['birthday'];
    $phone = $row['phone'];
    $address = $row['address'];
    $age = $row['age'];
    $degree = $row['degree'];
    $email = $row['email'];
    $freelance = $row['Freelance'];
    $about = $row['about'];
    $ig = $row['ig'];
    $facebook = $row['facebook'];
    $linkedin = $row['linkdin'];
    $twitter = $row['twiter'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About</title>
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

  <style>
    .picture:hover{
      border:5px solid whitesmoke;
      border-radius:5px;
      transition:1s;

    }
  </style>
</head>

<body>

<?php
include './includes/header.php';

?>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p> 
            <i>
          " I am <?php echo $name ?>,
           a seasoned software developer specializing in various domains encompassing both front-end and back-end development.

With a passion for crafting exceptional digital experiences, I offer a wide range of services tailored to meet your specific needs. Whether you require an aesthetically pleasing user interface or a robust back-end architecture, I have the skills and knowledge to bring your ideas to life.
</i></p>
        </div>

        <div class="row">
         <div class="col-lg-4">
           <center>  <img src="assets/img/cedro.jpeg" class="img-fluid picture" alt="" class=''></center>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
           
            <p class="fst-italic">
             
            </p>
            <br><br><br><br>
            <div class="row"><h3>I'm  <?php echo $slogan  ?></h3><br><br><br>
              <div class="col-lg-6">
              
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> <?php echo $birthday  ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Linkdin:</strong> <a target='_blank' href=<?php echo $linkedin   ?>> <?php echo $name  ?></a></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> <?php echo $phone  ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> <?php echo $address  ?></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong><?php echo $age  ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> <?php echo $degree  ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>email:</strong> <?php echo $email  ?></li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong><?php echo $freelance  ?></li>
                </ul>
              </div>
            </div>
            <p>
            <?php echo $about  ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>
            i have different skills in different technologies as listed below ! 
          </p>
        </div>

        <div class="row skills-content">

        

            <!-- <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> -->
            <?php

include './connection.php';
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from the table
$sql = "SELECT * FROM skills";

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Create an array to store the data
    $data = array();

    // Loop through the rows and store the data in the array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();

// Access the data stored in the array
foreach ($data as $row) {
  $title = $row['title'];
    $rate = $row['rate'];

   ?>
     <div class="col-lg-6">
       <div class="progress">
              <span class="skill"><?php echo $title ?> <i class="val"><?php echo $rate ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow=<?php echo $rate ?> aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> 
            </div>

   <?php

}
?>

            <?php


            ?>


          

           

          

        

        </div>

      </div>
    </section><!-- End Skills Section -->

  
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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