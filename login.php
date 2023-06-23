<?php
session_start(); 
?>
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

  <title> home</title>
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

  <!-- =======================================================
  * Template Name: Kelly
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
include './includes/header.php';

?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">

    <div class="col-md-6" style='background-color:white;padding:1cm;opacity:0.6;border-radius:10px;box-shadow:3px 2px 1px lightgray'>
    <form class="row g-3 needs-validation" novalidate action='login.php' method='post'>

<div class="col-12">
  <label for="yourUsername" class="form-label">Email</label>
  <div class="input-group has-validation">
    <span class="input-group-text" id="inputGroupPrepend">@</span>
    <input type="email" name="email" class="form-control" id="yourUsername" style='background-color:white' required>
    <div class="invalid-feedback">Please enter your email.</div>
  </div>
</div>

<div class="col-12">
  <label for="yourPassword" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="yourPassword" required>
  <div class="invalid-feedback">Please enter your password!</div>
</div>

<div class="col-12">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
    <label class="form-check-label" for="rememberMe">Remember me</label>
  </div>
</div>
<div class="col-12">
  <button class="btn btn-primary w-100" name='go' type="submit">Login</button>
</div>
<!-- <div class="col-12">
  <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
</div> -->
</form>
</div>
    </div>
  </section><!-- End Hero -->

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

<?php


@$go=$_POST["go"];

@$email = $_POST['email'];
@$password = $_POST['password'];
// @$subject = $_POST['subject'];
// @$message = $_POST['message'];
if(isset($go))
{
  if($email=="cedrickhakuzimana@gmail.com" && $password=="cedro2312")
  {

    $_SESSION['email'] = $email;
    echo "<script>window.location='./Admin/index.php'</script>";

  }else{
    ?>
    <script>
      alert("re chack your cridantios again !")
    </script>
    
    <?php
  }

}

?>