<?php

$id =$_GET["id"];
$conn = mysqli_connect("localhost","root","","khoojee2");
$query = "DELETE FROM `chipa-mis-per` WHERE `id` = $id";
mysqli_query($conn,$query);
header("location:edhi-chipa-miss.php");


?>