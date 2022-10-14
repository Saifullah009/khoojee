<?php

$id =$_GET["id"];
$conn = mysqli_connect("localhost","root","","Khoojee2");
$query = "DELETE FROM `chhipa-morgue` WHERE `id` = $id";
mysqli_query($conn,$query);
header("location:edhi-chipa-morgue.php");


?>