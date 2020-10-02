<?php
require_once('db_connection.php');
require_once('Response.php');
$username = $_GET['username'];
$sql = "select * from user where username=$username";
$result = mysqli_query($con, $sql);
if ($result == true) {
    echo '{"query_result":"SUCCESS"}';
} else {
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);
