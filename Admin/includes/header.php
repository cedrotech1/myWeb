<?php
// include '../connection.php';

session_start();

  $email=$_SESSION['email'];
  // $id=$_SESSION['team_id'];
  if(!isset($email))
  {
   echo "<script>window.location='../login.php'</script>";
  }else
?>
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
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block"><?php echo $name  ?></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

        

            

         

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">


            <?php include '../connection.php';
	$sql = "SELECT * FROM messages ORDER BY time ASC LIMIT 5";
  $result = $conn->query($sql);
  
  if ($result) {
    $row_count = $result->num_rows;
    echo $row_count;
  } else {
    echo "Query failed: " . $conn->error;
  }
?>  
            </span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 
   
   new messages
              <a href="messages.php"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>



            <?php
                    include '../connection.php';
	
                    $sql = "SELECT * FROM messages ORDER by time asc limit 5";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                        $id=$row['id'];
                        $message=$row['message'];
                        $name=$row['names'];
                        $sub=$row['subject'];

                      
                        // Get the current time as a Unix timestamp
                        $currentTimestamp = time();

                        // Assuming you have retrieved the timestamp from the database
                        $databaseTimestamp = strtotime($row['time']); // Replace $row['timestamp'] with your actual timestamp value

                        // Calculate the time difference in seconds
                        $timeDifference = $currentTimestamp - $databaseTimestamp;

                        // Calculate the time ago
                        if ($timeDifference < 60) {
                            $timeAgo = $timeDifference . " seconds ago";
                        } elseif ($timeDifference < 3600) {
                            $timeAgo = floor($timeDifference / 60) . " minutes ago";
                        } elseif ($timeDifference < 86400) {
                            $timeAgo = floor($timeDifference / 3600) . " hours ago";
                        } else {
                            $timeAgo = floor($timeDifference / 86400) . " days ago";
                        }

                        // Output the calculated time ago
                        $timeAgo;


                       ?>
             <li class="message-item">
              <a href="#">
                <br>
                        <img src="assets/img/img.png" alt="" class="rounded-circle">
                        <div>
                          <h4><?php echo $name ?></h4>
                          <p><?php echo $message ?></p>
                          <p><?php echo $timeAgo ?></p>
                        </div>
                      </a>
                    </li>
                    <li>
              <hr class="dropdown-divider">
            </li>
                       <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
      

       

          
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Mr <?php echo $name ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $name ?></h6>
              <span>ADMIN</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

        

           

         

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->