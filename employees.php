

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management Website</title>

<!--CSS-->
<link rel="stylesheet" href="pagesstyle.css">
<style>
body {
  font-family: product sans;
  background-color: #F8F8F8
}


</style>
</head>

<body>

<!--Header-->
<div class="header">
<div class="headertitle">
<h1>Hotel Management Site</h1>
</div>
<div class="headerlogo">
<img src="Logo.png" width="100"  title="Logo of a Hotel" alt="Logo of a Hotel" />
</div>
<h1>The Presidency Hotel</h1>
</div>

<!--Navigation Bar-->
<div class="navbar">
 <a href="home.html">Home</a>
 <a href="rooms.php">Rooms</a>
  <a href="bookings.php">Bookings</a>
  <a href="employees.php">| Employees |</a>
 <div class="logout">
   <a href="admin.php">Log out</a>
  </div>
</div>

<!--Content-->
<div class="content">
<center><img src="Logo2.png" width="130"  title="Logo of a Hotel" alt="Logo of a Hotel" /></center>
  <center><h2>Employees</h2>
  <p>
Welcome to our Employee Table page! We are delighted to have you join us in our mission to provide the best hotel management services. 

At our hotel, our employees are the heart and soul of our operation.
 We recognize the hard work and dedication of each one of our employees and strive to create an environment that is conducive to their success. From front desk staff to housekeeping personnel, our employees make our hotel the special place it is. 

We are committed to providing our employees with the tools they need to succeed.
Our comprehensive training program ensures that everyone is up-to-date on the latest trends and techniques in the hospitality industry.
We also offer competitive salaries and benefits that are designed to reward our employees for their hard work and dedication. 

We are proud of our employees and their commitment to excellence.
Our employees have always been our greatest asset and we look forward to working with them to provide the highest level of service to our guests. 
.</center></p>
</div>

<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_mngt";

$conn = mysqli_connect($host, $user, $password, $database);


if(!$conn){
    die("Connection Failed :".mysqli_connect_error());
}

$sql = "SELECT employ_name,ID,login_time,logout_time FROM employtable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<center><table cellspacing='20' cellpadding='10' style='border: 2px solid #c9c9c9; 
    border-radius: 10px; margin-top: 20px; box-shadow: 5px 5px 10px #c9c9c9;'>
    <tr><th>Employ Name</th><th>ID</th><th>Login Time</th><th>Logout Time</th><th>Delete</th></tr></center>";

    //output data of each row
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row["employ_name"]."</td><td>".$row["ID"]."</td><td>".$row["login_time"]."</td><td>".$row["logout_time"]."</td><td><a href='delete_employee.php?ID=".$row["ID"]."'><button>Delete</button></a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 result";
}

mysqli_close($conn);
?>


<!--Content-->
<div class="content">
  <p>
- Please use the below form to update the Employee`s details in the database of our hotel. -</center></p>
</div>

<!-- Form -->
<div class="form">
<form action="employees.php" method="post">
  <center><h2>Add new Employee</h2><br><center>
  <label for="employ_name">Employee Name :</label>
  <input type="text" id="employ_name" name="employ_name"><br><br>
  <label for="ID">Employee ID :</label>
  <input type="text" id="ID" name="ID"><br><br>
  <input type="submit" name="submit" value="Add Booking">
</form>
</div>

<?php
if(isset($_POST['submit'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "hotel_mngt";

    $conn = mysqli_connect($host, $user, $password, $database);


    if(!$conn){
        die("Connection Failed :".mysqli_connect_error());
    }
    $employ_name = $_POST['employ_name'];
    $ID = $_POST['ID'];

    $sql = "INSERT INTO employtable (employ_name,ID) VALUES ('$employ_name', '$ID')";

    if (mysqli_query($conn, $sql)) {
        echo "New booking added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    echo "<meta http-equiv='refresh' content='0'>";
}

?>
<br>
<br>

<!--Footer-->
<div class="footer">
  <h3>About Us</h3>
<h5> We are a leading provider of hotel management services, helping hotels maximize their operations, increase their bottom line, and provide top-notch customer service. Our team of experienced industry professionals is dedicated to helping hotels create the best experiences for their guests.
 We specialize in a wide variety of hotel management services, including staff training, employee management, hotel operations, customer service, and more.</h5>
</div>

</body>
</html>