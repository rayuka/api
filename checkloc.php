<?php
$con=mysqli_connect("localhost","root","sati","db1");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}

$location =$_GET['location'];
$sq="SELECT `username` FROM `db1`.`user` WHERE `location`='$location';";
$t=mysqli_query($con,$sq);
$level=mysqli_num_rows($t);

	if($level>0)
    echo '{"query_result":"SUCCESS"}';
	else
		echo '{"query_result":"SUCCESSFUL"}';
?>