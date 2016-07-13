<?php
$con=mysqli_connect("localhost","sati","sati","project_db");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 
$username = $_GET['username'];
//$sql="INSERT INTO `db1`.`user` (`username`, `password`,`firstname`,`lastname`,`email`,`mobile`) VALUES ('$username', '$passWord','$firstname','$lastname','$email','$mobile');";
$result = mysqli_query($con,$sql); 
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);
?>