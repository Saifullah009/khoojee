
<?php

$id =$_GET["id"];
$conn = mysqli_connect("localhost","root","","khoojee2");
$query = "DELETE FROM `nadra` WHERE `id` = $id";
mysqli_query($conn,$query);
header("location:nadra.php");


?>