<html>
<head>
<link rel="stylesheet" href="adminstyler.css">
</head>
<body>

<?php
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

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Retrieve data from DB

    $sql = "SELECT * FROM `Admins` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    
    // check if credentials match

    if ($row) {
        // Redirect to the homepage

        header("Location:home.html");
    }
else {
        echo '<center><h2  style="color: red">INCORRECT EMAIL NAME OR PASSWORD</h2></center>';
    }
}
?>

<script>
// Validation script
function validateForm(){
    var email = document.forms["loginform"]["email"].value;
    var password = document.forms["loginform"]["password"].value;
    if (email == ""){
        alert("Please enter your email!");
        return false;
    }
    else if (password == ""){
        alert("Please enter your password!");
        return false;
    }
}
</script>

<div id="form-wrapper">
 <center><img src="Logo2.png" width="130"  title="Logo of a Hotel" alt="Logo of a Hotel" /></center>
 <h1><center>Welcome To Our Hotel Management Website</h1>
    <h2 style="color: red">Please Enter Your Respective Credentials</h2></center>
<title>Hotel Management Admin Page</title>
    <form name="loginform" action="" onsubmit="return validateForm()" method="post">
        <label>Email:</label><br>
        <input type="text" name="email" placeholder="Enter your email"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Enter your password"><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>