<?php 

$con=mysqli_connect("localhost","root","sati","db1");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}

$location ="dela";//$_GET['location'];
$sq="SELECT `username` FROM `db1`.`user` WHERE `location`='$location';";
$t=mysqli_query($con,$sq);
if(mysqli_num_rows($t)>0)
{
$sql = "select * from `db1`.`$location`;";
 
$res = mysqli_query($con,$sql);

$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('username'=>$row[0],
'sale'=>$row[1],
'date'=>$row[2]));
}

echo json_encode(array("result"=>$result));
}
else
    echo '{"result":[{"username":"SUCCESS","sale":"15000","date":"2016-07-11 13:29:13"}]';

mysqli_close($con);
?>