<?php

$id =$_GET["id"];
$conn = mysqli_connect("localhost","root","","khoojee2");
$query = "DELETE FROM `jdcansarmis` WHERE `id` = $id";
mysqli_query($conn,$query);
header("location:jdc-ansar-miss.php");


?>