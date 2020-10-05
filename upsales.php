<?php
require_once('db_connection.php');

$username = $_GET['username'];
$sale = $_GET['sale'];
$sq = "SELECT `location` FROM `project_db`.`user` WHERE `username`='$username';";
$res = mysqli_query($con, $sq);
$r = array();
while ($row = mysqli_fetch_array($res)) {
    array_push($r, array(
        'location' => $row['location']
    ));
}

$location = $r[0]['location'];
//echo "$location";

$sql = "INSERT INTO `project_db`.`$location` (`username`, `sale`) VALUES ('$username', '$sale');";

$result = mysqli_query($con, $sql);

if ($result) {
    Response::print_success();
} else {
    Response::print_error();
}
mysqli_close($con);
return;
