<?php
$connection = mysqli_connect('shareddb-g.hosting.stackcp.net', 'employee-3237f9b4', 'athroughg123');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'employee-3237f9b4');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>
