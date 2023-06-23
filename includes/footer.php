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
<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cedrick</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href=<?php echo $linkedin  ?> >cedrick</a>
      </div>
    </div>
  </footer><!-- End  Footer -->