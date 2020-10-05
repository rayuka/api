<?php

require_once('db_connection.php');

$location = $_GET['location'];
$sq = "SELECT `username` FROM `project_db`.`user` WHERE `location`='$location';";
$t = mysqli_query($con, $sq);
//if(mysqli_num_rows($t)>0)

$sql = "select * from `project_db`.`$location`;";

$res = mysqli_query($con, $sql);

$result = array();

while ($row = mysqli_fetch_array($res)) {
   array_push(
      $result,
      array(
         'username' => $row[0],
         'sale' => $row[1],
         'date' => $row[2]
      )
   );
}
$res = new Response(true, $result);
$res->print();
mysqli_close($con);
return;
