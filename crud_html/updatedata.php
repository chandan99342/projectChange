<?php 
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$con = mysqli_connect("localhost","root","","crud1") or ("Connection faild");

$sql = "UPDATE student2 SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id} ";
$result = mysqli_query($con,$sql) or die("query unsuccessful.");

header("Location: index.php");

mysqli_close($con);
?>
