
<?php

$id =$_GET["id"];
$conn = mysqli_connect("localhost","root","","khoojee2");
$query = "DELETE FROM `upload_img` WHERE `id` = $id";
mysqli_query($conn,$query);
header("location:user.php");


?>