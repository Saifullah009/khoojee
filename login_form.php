<?php
 include_once("connection.php");
 
 error_reporting(0);
 
 if ($_SESSION["email"] != null) {
  ?>

  <script>
    window.location.assign("index.php");
  </script>

<?php
 }
 else{
 ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khojee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js">
    </script>
    <script src="js/app.js"></script>
 </head>
 <body style="background-color: #dbdbe8 ">
  <div class="cotainer">
 <div class="row">
 <div class="col-md-12">
              <!---nav bar-->
              <?php
 include_once("nav.php");
 ?> 
<!---- form start----->
<div class="container">
<form action="#" method="POST">
    <h1 class="text-center mt-3"> LOGIN FORM</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email </label>
      <input type="email" class="form-control" name="email">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="pass">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
  <a href="Registration.php">Don't have account <br>Create Account</a>
  </div>




  <?php
include("footer.php");
?>
 </body>
</html>

<?php

if(isset($_POST["submit"])){
  // $conn = mysqli_connect("localhost","root","","khoojee2");
  
  $email = $_POST["email"];
  $password = $_POST["pass"];
  
  $query = "SELECT * FROM `registration` WHERE `email` = '$email' && `password` = '$password'";


$result =  mysqli_query($db,$query);

if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
      $_SESSION["email"] = $row[3];
      $row[3] = $_SESSION["email"];

      $_SESSION["usertype"] = $row[9];
      $row[9] = $_SESSION["usertype"];
      
  ?>
  <script>
    window.location.assign("Chhipa-honorless-Morgue(مردہ خانہ).php");
  </script>
  
  <?php
    }
}
else{
  echo "value incorrect";
}


}



 }
?>


