<?php
require_once('db_connection.php');

$sql = "SELECT * FROM `user`;";
$result = mysqli_query($con, $sql);
$r = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($r, array(
        'id' => $row['id'],
        'name' => $row['name'],
        'location' => $row['location']
    ));
}
$response = new Response(true, $r);
$response->print();
return;
