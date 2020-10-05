<?php
require_once('db_connection.php');

$location = $_GET['location'];
$sq = "SELECT `username` FROM `project_db`.`user` WHERE `location`='$location';";
$t = mysqli_query($con, $sq);
$level = mysqli_num_rows($t);

if ($level > 0)
	Response::print_success();
else {
	$res = new Response(true, ['users' => [], 'count' => $level]);
	$res->print();
}
return;
