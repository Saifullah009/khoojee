<?php

$id =$_GET["id"];
$conn = mysqli_connect("localhost","root","","khoojee2");
$query = "DELETE FROM `civil-missing-per` WHERE `id` = $id";
mysqli_query($conn,$query);
header("location:jinah-civil-miss.php");


?>