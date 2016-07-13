<?php
$con=mysqli_connect("localhost","root","","project_db");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 
$username =$_GET['username'];
$sale = $_GET['sale'];
$sq="SELECT `location` FROM `db1`.`user` WHERE `username`='$username';";
$res = mysqli_query($con,$sq); 
$r=array();
while($row = mysqli_fetch_array($res))
{
    array_push($r,array(
        'location'=>$row['location']
    ));
}

$location=$r[0]['location'];
//echo "$location";

$sql="INSERT INTO `db1`.`$location` (`username`, `sale`) VALUES ('$username', '$sale');";

$result = mysqli_query($con,$sql); 

if($result) {
    echo '{"query_result":"SUCCESS"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);
?>