<?php

$stu_id =  $_GET['id'];

$con = mysqli_connect("localhost","root","","crud1") or die("connection failed");

$sql = "DELETE FROM student2 WHERE sid = {$stu_id}";
$result = mysqli_query($con, $sql) or die("query unsuccessful.");

header("Location: index.php");

mysqli_close($con);

?>