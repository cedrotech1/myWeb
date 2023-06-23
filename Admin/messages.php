<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>messages</title>
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
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <!-- <li class="breadcrumb-item">Pages</li> -->
          <li class="breadcrumb-item active">message</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      

        <div class="col-lg-12">

        


       
              <div class="col-12">
                <br>
                <div class="card recent-sales overflow-auto">
  
                    <!-- Disabled Animation Modal -->
             

              
              <div class="modal" id="disabledAnimation" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">ADD SKILLS</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3" method='post' action='skills.php'>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name='title' placeholder="Your Name">
                    <label for="floatingName">skills title</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="number" name='rate' class="form-control" id="floatingEmail" placeholder="Your rate %">
                    <label for="floatingEmail">rate (%)</label>
                  </div>
                </div>
          
                <div class="text-center">
                  <button type="submit" name='go' class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
                    </div>
                  
                  </div>
                </div>
              </div><!-- End Disabled Animation Modal-->

      









  
                  <div class="card-body">
                    <h5 class="card-title">Messages <span>| </span></h5>
  
                


                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                     
                      
                      <th scope="col">NAMES</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">SUBJECT</th>
                      <th scope="col">MESSAGE</th>
                      <th scope="col"  style="text-align:LEFT">Modify</th>
                    </tr>
                  </thead> 
                  <tbody>
              
                  <?php
                    include '../connection.php';
	
                    $sql = "SELECT * FROM messages";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       ?>
                          <tr>
                          <!-- `id`, `names`, `email`, `subject`, `message` -->
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $row["names"];?></td>
                              <td><?php echo $row["email"];?></td>
                              <td><?php echo $row["subject"];?></td>
                              <td><?php echo $row["message"];?></td>
     
                              <td> <a href="delete_message.php?id=<?php echo $row["0"]  ?>"><button type="button" class="btn btn-outline-danger btn-sm">delete</button> </a></td>

                    </tr>
                       <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
                 
               
                  </tbody>
                </table>

  
                  </div>
  
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
echo @$skills=$_POST["title"];
@$rate=$_POST["rate"];
// @$email=$_POST["email"];
// @$pass=$_POST["password"];



if(isset($go))
{
  if($skills!='' || $rate!='')
  {


$sql = "SELECT * FROM skills where  title='$skills'";
  $result = $conn->query($sql);

  if ($result->num_rows ===0) 
          {
  //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

    $sql = "INSERT INTO `skills` (`id`, `title`, `rate`) VALUES (NULL, '$skills', '$rate');";

    if (mysqli_query($conn, $sql)) {

     

      echo '<script>alert("skills well added")</script>';




      echo "<script>window.location='./skills.php'</script>";

      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
else{

	echo '<script>alert("that skills already added before")</script>';
	}

}else{
  echo '<script>alert("you cant submit empty data")</script>';
}
}
   
?>