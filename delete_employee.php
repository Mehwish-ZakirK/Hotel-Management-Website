
<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_mngt";

$conn = mysqli_connect($host, $user, $password, $database);


if(!$conn){
    die("Connection Failed :".mysqli_connect_error());
}

$ID = $_GET['ID'];
$sql = "DELETE FROM employtable WHERE ID = '$ID'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    echo "<meta http-equiv='refresh' content='0;url=employees.php'>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>