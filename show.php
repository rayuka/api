<?php
$con=mysqli_connect("localhost","sati","sati","project_db");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
$sql="SELECT * FROM `user`;";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
    array_push($r,array(
        'id'=>$row['id'],
        'name'=>$row['name'],
        'location'=>$row['location']
    ));
}
echo json_encode(array("r"=>$r));
?>