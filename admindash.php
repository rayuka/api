<?php
require_once('db_connection.php');
require_once('Response.php');
$username = $_GET['username'];
$sql = "select * from user where username=$username";
$result = mysqli_query($con, $sql);
if ($result == true) {
    Response::print_success();
} else {
    Response::print_error();
}
mysqli_close($con);
