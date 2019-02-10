<?php  
 session_start();
 require('db_connect.php');
 
if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE userid='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
include("home.php");

}else{
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>
    window.alert('$message');
    window.location.assign('index.php');
    </script>";
}
}
?>