
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
  <a href="bookings.php">| Bookings |</a>
  <a href="employees.php">Employees</a>
 <div class="logout">
   <a href="admin.php">Log out</a>
  </div>
</div>

<!--Content-->
<div class="content">
<center><img src="Logo2.png" width="130"  title="Logo of a Hotel" alt="Logo of a Hotel" /></center>
  <center><h2>Bookings</h2>
  <p>
Welcome to the bookings database table of our hotel management website! Here,
 our employees will be able to manage and track all current and future bookings. With this powerful tool,
 you can easily view and edit bookings, add new bookings, and keep track of availability. Our goal is to provide our employees
with a streamlined and efficient system to manage bookings, so they can focus on providing our guests with the best experience possible.
Thank you for helping us make our hotel the best it can be!.</center></p>
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

$sql = "SELECT booking_id, guest_name, room_number, check_in, num_of_days, payment FROM bookings";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<center><table cellspacing='20' cellpadding='10' style='border: 2px solid #c9c9c9; 
    border-radius: 10px; margin-top: 20px; box-shadow: 5px 5px 10px #c9c9c9;'>
    <tr><th>Booking ID</th><th>Guest Name</th><th>Room Number</th><th>Check-In</th><th>Number of Days</th><th>Payment<br>(in ₹)</th><th>Delete</th></tr></center>";

    //output data of each row

    while ($row = mysqli_fetch_assoc($result)){
        if(is_numeric($row['payment'])){
            echo "<tr><td>".$row["booking_id"]."</td><td>".$row["guest_name"]."</td><td>".$row["room_number"]."</td><td>".$row["check_in"]."</td><td>".$row["num_of_days"]."</td><td><span style='color:green;'>".$row["payment"]."</span></td><td><a href='delete_booking.php?booking_id=".$row["booking_id"]."'><button>Delete</button></a></td></tr>";
        }
        else{
            echo "<tr><td>".$row["booking_id"]."</td><td>".$row["guest_name"]."</td><td>".$row["room_number"]."</td><td>".$row["check_in"]."</td><td>".$row["num_of_days"]."</td><td><span style='color:red;'>".$row["payment"]."</span></td><td><a href='delete_booking.php?booking_id=".$row["booking_id"]."'><button>Delete</button></a></td></tr>";
        }
    }
    echo "</table>";
} else {
    echo "0 result";
}

mysqli_close($conn);
?>
<br>
<br>

<!--Content-->
<div class="content">
  <p>
- Please use the below form to update the Booking details in the database of our hotel. -</center></p>
</div>

<!-- Form -->
<div class="form">
<form action="bookings.php" method="post">
  <center><h2>Add new booking</h2><br><center>
  <label for="booking_id">Booking ID :</label>
  <input type="text" id="booking_id" name="booking_id"><br><br>
  <label for="guest_name">Guest Name :</label>
  <input type="text" id="guest_name" name="guest_name"><br><br>
  <label for="room_number">Room Number :</label>
  <input type="text" id="room_number" name="room_number"><br><br>
  <label for="check_in">Check-In :</label><br>
  <input type="date" id="check_in" name="check_in"><br><br>
  <label for="num_of_days">Number of Days :</label>
  <input type="text" id="num_of_days" name="num_of_days"><br><br>
  <label for="payment">Payment :</label>
  <input type="text" id="payment" name="payment"><br><br>
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
    $booking_id = $_POST['booking_id'];
    $guest_name = $_POST['guest_name'];
    $room_number = $_POST['room_number'];
    $check_in = $_POST['check_in'];
    $num_of_days = $_POST['num_of_days'];
    $payment = $_POST['payment'];

    $sql = "INSERT INTO bookings (booking_id, guest_name, room_number, check_in, num_of_days, payment) VALUES ('$booking_id', '$guest_name', '$room_number', '$check_in', '$num_of_days', '$payment')";

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