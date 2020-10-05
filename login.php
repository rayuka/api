<?php
require_once('db_connection.php');

$username = $_GET['username'];
$password = $_GET['password'];
$sql = "SELECT * FROM `project_db`.`user` WHERE `username`='$username' AND `password`='$password';";
$result = mysqli_query($con, $sql);
$i = mysqli_num_rows($result);
$r = array();
if ($i > 0) {

    while ($row = mysqli_fetch_array($result)) {
        array_push($r, array(
            'id' => $row['id'],
            'name' => $row['name'],
            'location' => $row['location']
        ));
    }
    $level = $r[0]['id'];

    if ($level > 1)
        Response::print_success();
} else {
    Response::print_error();
}
mysqli_close($con);
return;
