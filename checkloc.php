<?php
require_once('db_connection.php');

$location = $_GET['location'];
$sq = "SELECT `username` FROM `project_db`.`user` WHERE `location`='$location';";
$t = mysqli_query($con, $sq);
$level = mysqli_num_rows($t);

if ($level > 0)
	echo '{"query_result":"SUCCESS"}';
else
	echo '{"query_result":"SUCCESSFUL"}';
