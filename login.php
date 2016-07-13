<?php
$con=mysqli_connect("localhost","root","sati","db1");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 
$username = $_GET['username'];
$password = $_GET['password'];
$sql="SELECT * FROM `db1`.`user` WHERE `username`='$username' AND `password`='$password';";
$result = mysqli_query($con,$sql);
$i=mysqli_num_rows($result);
$r=array();
if($i>0) {

while($row = mysqli_fetch_array($result)){
    array_push($r,array(
        'id'=>$row['id'],
        'name'=>$row['name'],
        'location'=>$row['location']
    ));
}
$level=$r[0]['id'];

	if($level>1)
    echo '{"query_result":"SUCCESS"}';

	else
		echo '{"query_result":"SUCCESSFUL"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);


?>