<?php
$con = mysqli_connect("localhost", "sati", "sati", "project_db");
if (mysqli_connect_errno($con)) {
    echo '{"query_result":"ERROR"}';
    return;
}
