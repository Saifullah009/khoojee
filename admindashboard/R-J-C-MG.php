<?php

$id =$_GET["id"];
$conn = mysqli_connect("localhost","root","","Khoojee2");
$query = "DELETE FROM `civilhonmorgue` WHERE `id` = $id";
mysqli_query($conn,$query);
header("location:jinah-civil-miss.php");


?>