<?php

include '../connection.php';
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from the table
$sql = "SELECT * FROM content where id=1";

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
    $s = $row['slogan'];
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

  <title>contents</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
include './includes/header.php';
include './includes/aside.php';
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>content Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <!-- <li class="breadcrumb-item">Pages</li> -->
          <li class="breadcrumb-item active">content</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <!-- name	slogan	birthday	phone	address	age	degree	email	Freelance	about	ig	facebook	linkdin	twiter	 -->

        <div class="col-lg-12">
    
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CONTENTS</h5>
             

              <!-- Custom Styled Validation with Tooltips -->
              <form class="row g-3 needs-validation" novalidate action='contents.php' method='post'>
              <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">My name</label>
                  <input type="text" class="form-control" id="validationTooltip01" name='myname' value=<?php echo $name ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>
                

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">my phone</label>
                  <input type="number" class="form-control" name='phone' id="validationTooltip01" value=<?php echo $phone ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>
                 <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">address</label>
                  <input type="text" class="form-control" name='address' id="validationTooltip01" value=<?php echo $address ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div> <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">age</label>
                  <input type="number" name='age' class="form-control" id="validationTooltip01" value=<?php echo $age ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">email</label>
                  <input type="email" name='email' class="form-control" id="validationTooltip01" value=<?php echo $email ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

               

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">Degree</label>
                  <input type="text" class="form-control" name='degree' id="validationTooltip01" value=<?php echo $degree ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">birth day</label>
                  <input type="date" class="form-control" name='date' id="validationTooltip01" value=<?php echo $birthday ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">slogan</label>
                  <input type="text" class="form-control"  name='slogan'  id="validationTooltip01" value=<?php echo $s ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">Instagram</label>
                  <input type="text" class="form-control" id="validationTooltip01" name='instagram' value=<?php echo $ig ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">twitter</label>
                  <input type="text" class="form-control" id="validationTooltip01" name='twitter' value=<?php echo $twitter ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">linkdin</label>
                  <input type="text" class="form-control" value='<?php echo $linkedin ?>'  name='link' id="validationTooltip01" required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">facebook</label>
                  <input type="text" class="form-control" name='facebook' id="validationTooltip01" value=<?php echo $facebook ?> required>
                  <!-- <div class="valid-tooltip">
                    Looks good!
                  </div> -->
                </div>

               
               

                <div class="col-md-12 position-relative">
                  <label for="validationTooltip03" class="form-label">ABOUT</label>
                 <textarea name="about" name='about' id="" class='form-control' rows="5">
               <?php echo $about ?>
                 </textarea>
                 
                </div>
               
               
                <div class="col-12">
                  <button class="btn btn-primary" name='go' type="submit">Submit form</button>
                </div>
              </form><!-- End Custom Styled Validation with Tooltips -->

            </div>
          </div>

            </div>
          </div>

       
    </section>

  </main><!-- End #main -->

  <?php
        
        include './includes/footer.php';
?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
include '../connection.php';

@$go=$_POST["go"];
@$name = $_POST['myname'];

// Retrieve other form field values in a similar manner
@$phone = @$_POST['phone'];
@$address = @$_POST['address'];
@$age = @$_POST['age'];
@$email = @$_POST['email'];
@$freelance = @$_POST['freelance'];
@$degree = @$_POST['degree'];
@$birthday = @$_POST['date'];
@$slogan = @$_POST['slogan'];
@$instagram = @$_POST['instagram'];
@$twitter = @$_POST['twitter'];
 @$linkedin = @$_POST['link'];
@$facebook = @$_POST['facebook'];
@$location = @$_POST['location'];
@$about = @$_POST['about'];


if(isset($go))
{
  if (!empty($name) || !empty($phone) || !empty($address) || !empty($age) || !empty($email) || !empty($freelance) || !empty($degree) || !empty($birthday) || !empty($slogan) || !empty($instagram) || !empty($twitter) || !empty($linkedin) || !empty($facebook) || !empty($about)) 
  {



  //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

    $sql = "UPDATE `content` SET `name` = '$name',
     `birthday` = '$birthday', `phone` = '$phone', `address` = '$address', `age` = '$age', `degree` = '$degree',
      `email` = '$email',  
      `about` = '$about', `ig` = '$ig',
       `facebook` = '$facebook',
        `linkdin` = '$linkedin',
         `twiter` = '$twitter' WHERE `content`.`id` = 1;";

    if (mysqli_query($conn, $sql)) {

     

      echo '<script>alert("well done! mr cedrox")</script>';




      echo "<script>window.location='./contents.php'</script>";

      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);



}else{
  echo '<script>alert("you cant submit empty data")</script>';
}

}
?>


