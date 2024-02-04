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
 <a href="rooms.php">| Rooms |</a>
  <a href="bookings.php">Bookings</a>
  <a href="employees.php">Employees</a>
 <div class="logout">
   <a href="admin.php">Log out</a>
  </div>
</div>

<!--Content-->
<div class="content">
<center><img src="Logo2.png" width="130"  title="Logo of a Hotel" alt="Logo of a Hotel" /></center>
  <center><h2>Rooms</h2>
  <p>

Welcome to the Room Database! Here you can easily manage and assign rooms to guests for a seamless hotel experience.
 From selecting the perfect room to assigning amenities and tracking occupancy, we have you covered! Our automated system
 makes it easy to keep your hotel running smoothly.</center></p>
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

$sql = "SELECT room_number,room_type,availability,check_in,check_out FROM roomtable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<center><table cellspacing='20' cellpadding='10' style='border: 2px solid #c9c9c9; 
    border-radius: 10px; margin-top: 20px; box-shadow: 5px 5px 10px #c9c9c9;'>
    <tr><th>Room Number</th><th>Room Type</th><th>Availability</th><th>Check-In</th><th>Check-Out</th></tr></center>";

    //output data of each row
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row["room_number"]."</td><td>".$row["room_type"]."</td><td>".$row["availability"]."</td><td>".$row["check_in"]."</td><td>".$row["check_out"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 result";
}

mysqli_close($conn);
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
