
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_mngt";

$conn = mysqli_connect($host, $user, $password, $database);


if(!$conn){
    die("Connection Failed :".mysqli_connect_error());
}

$sql = "DELETE FROM bookings WHERE booking_id=".$_GET['booking_id'].";";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "<meta http-equiv='refresh' content='0;url=bookings.php'>";
?>