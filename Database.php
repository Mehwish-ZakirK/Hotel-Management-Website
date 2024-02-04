<?php
                                                                       //Creation of data base
$servername = "localhost";
$username = "root";
$password = "";

// Create connection

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE hotel_mngt";
if ($conn->query($sql) === TRUE) {
    echo "<h1>Database created successfully</h1>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>



<?php
                                                                       //Creation Of Admin table
#Database

$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_mngt";
 
#DBconnection

$connection = mysqli_connect($host, $user, $password, $database);

# Check connection

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

#Create Table

$sql = "CREATE TABLE Admins (
id int(11) AUTO_INCREMENT PRIMARY KEY,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL
)";

if (mysqli_query($connection, $sql)) {
    echo "<h1>Table Admins created successfully</h1>";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}

#add data

$email1 = "suhaim@gmail.com";
$password1 = "suhaim123";

$sql1 = "INSERT INTO Admins (email, password) 
VALUES ('$email1', '$password1')";


if (mysqli_query($connection, $sql1)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($connection);
}

$email2 = "mehwishzakir@gmail.com";
$password2 = "mehwish123";

$sql2 = "INSERT INTO Admins (email, password) 
VALUES ('$email2', '$password2')";

if (mysqli_query($connection, $sql2)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($connection);
}

$email3 = "madihasultana@gmail.com";
$password3 = "madiha123";

$sql3 = "INSERT INTO Admins (email, password) 
VALUES ('$email3', '$password3')";

if (mysqli_query($connection, $sql3)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($connection);
}


mysqli_close($connection);

?>

  
<?php
                                                      //Creation of Employ table
#Database

$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_mngt";
 
#DBconnection

$connection = mysqli_connect($host, $user, $password, $database);

# Check connection

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

#Create Table

$sql = "CREATE TABLE employtable (
employ_name varchar(255) NOT NULL,
ID int(11) NOT NULL,
login_time timestamp NOT NULL,
logout_time timestamp NOT NULL
)";

if (mysqli_query($connection, $sql)) {
    echo "<h1>Table employtable created successfully<h1>";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}

#add data

$employ_name1 = "Rahul";
$ID1 = "1925";
$login_time1 = "2020-04-27 12:00:00";
$logout_time1 = "2020-04-27 17:00:00";

$sql1 = "INSERT INTO employtable (employ_name, ID, login_time, logout_time) 
VALUES ('$employ_name1', '$ID1', '$login_time1', '$logout_time1')";

if (mysqli_query($connection, $sql1)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($connection);
}

$employ_name2 = "Anand";
$ID2 = "2987";
$login_time2 = "2020-04-27 13:00:00";
$logout_time2 = "2020-04-27 18:00:00";

$sql2 = "INSERT INTO employtable (employ_name, ID, login_time, logout_time) 
VALUES ('$employ_name2', '$ID2', '$login_time2', '$logout_time2')";

if (mysqli_query($connection, $sql2)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($connection);
}

$employ_name3 = "Aman";
$ID3 = "5678";
$login_time3 = "2020-04-27 14:00:00";
$logout_time3 = "2020-04-27 19:00:00";

$sql3 = "INSERT INTO employtable (employ_name, ID, login_time, logout_time) 
VALUES ('$employ_name3', '$ID3', '$login_time3', '$logout_time3')";

if (mysqli_query($connection, $sql3)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($connection);
}

$employ_name4 = "Rajesh";
$ID4 = "1234";
$login_time4 = "2020-04-27 15:00:00";
$logout_time4 = "2020-04-27 20:00:00";

$sql4 = "INSERT INTO employtable (employ_name, ID, login_time, logout_time) 
VALUES ('$employ_name4', '$ID4', '$login_time4', '$logout_time4')";

if (mysqli_query($connection, $sql4)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql4 . "<br>" . mysqli_error($connection);
}

$employ_name5 = "Kamala";
$ID5 = "7777";
$login_time5 = "2020-04-27 16:00:00";
$logout_time5 = "2020-04-27 21:00:00";

$sql5 = "INSERT INTO employtable (employ_name, ID, login_time, logout_time) 
VALUES ('$employ_name5', '$ID5', '$login_time5', '$logout_time5')";

if (mysqli_query($connection, $sql5)) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql5 . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>

<?php
                                                     //Creation of Room table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_mngt";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "CREATE TABLE roomtable (
room_number INT(6) NOT NULL, 
room_type VARCHAR(30) NOT NULL,
availability VARCHAR(30) NOT NULL,
check_in VARCHAR(30) NOT NULL,
check_out VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Table roomtable created successfully</h1>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql1 = "INSERT INTO roomtable (room_number, room_type, availability, check_in, check_out)
VALUES ('101', 'Double Deluxe', 'Occupied', '18-07-2019', '20-07-2019'),
('102','Single Room', 'Occupied', '19-07-2019', '20-07-2019'),
('103','Deluxe Suite', 'Not Occupied', '-', '-'),
('104','Luxury Suite', 'Not Occupied', '-', '-'),
('105','Single Room', 'Occupied', '21-07-2019', '22-07-2019')";

if ($conn->query($sql1) === TRUE) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>


<?php
                                                     //Creation of Bookings table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_mngt";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "CREATE TABLE bookings (
booking_id INT(6) NOT NULL, 
guest_name VARCHAR(30) NOT NULL,
room_number VARCHAR(30) NOT NULL,
check_in VARCHAR(30) NOT NULL,
num_of_days VARCHAR(30) NOT NULL,
payment VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Table bookings created successfully</h1>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql1 = "INSERT INTO bookings (booking_id, guest_name, room_number, check_in, num_of_days, payment)
VALUES ('209001', 'Aarti Agarwal', '101', '22-07-2019', '2', '50000'),
('209002','Krishna Sharma', '102', '24-07-2019', '1', '30000'),
('209003','Nishant Jain', '103', '28-07-2019', '3', 'Pending'),
('209004','Rohit Singh', '104', '30-07-2019', '4', '90000'),
('209005','Ayesha Khan', '105', '2-08-2019', '2', 'Pending')";

if ($conn->query($sql1) === TRUE) {
    echo "<h2>New record created successfully<h2>";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>