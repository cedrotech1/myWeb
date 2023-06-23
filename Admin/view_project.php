<?php
                   include '../connection.php';     
                     $id= $_GET['id'];
                     $sql = "SELECT * FROM project where id='$id'";
                     $result = $conn->query($sql);
 
                     
                      $i=0;
                       while($row = mysqli_fetch_array($result)) {
                        
                        $category=$row['category'];
                        $description=$row['description'];
                        $date=$row['project_date'];
                        $url=$row['url'];
                        $title=$row['title'];

                       }
                     
                   
                   
             ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>project</title>
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
      <h1>project Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <!-- <li class="breadcrumb-item">Pages</li> -->
          <li class="breadcrumb-item active">view_project</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      

        <div class="col-lg-12">

        


              <br>
       
              <div class="col-12">
               

                  <!-- Card with header and footer -->
          <div class="card">
            <div class="card-header">Category: <?php echo $category  ?></div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $title   ?> </h5>
             <?php echo $description  ?><br><br>
             <h6><a target='_blank' href=<?php echo $url   ?> >click here to open project</a></h6>
            </div>
            <div class="card-footer">
            <?php echo $date  ?>
            </div>
          </div><!-- End Card with header and footer -->
               

  
  
                </div>
              </div><!-- End Recent Sales -->
  
            

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
 @$url=$_POST["url"];
@$des=$_POST["des"];
@$date=$_POST["date"];
@$category=$_POST["category"];



if(isset($go))
{
  if($url!='' || $des!='' || $date!='' || $category!='')
  {



  //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

    $sql = "INSERT INTO `project` (`id`, `category`, `project_date`, `url`, `picture`, `description`) 
    VALUES (NULL, '$category', '$date', '$url', '', '$des');";

    if (mysqli_query($conn, $sql)) {

     

      echo '<script>alert("project well added")</script>';




      echo "<script>window.location='./project.php'</script>";

      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


}else{
  echo '<script>alert("you cant submit empty data")</script>';
}
}
   
?>