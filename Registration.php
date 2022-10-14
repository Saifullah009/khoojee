<?php

 include_once("connection.php");
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
             </div> 
         </div>   
     </div>
     <!---- form start----->
     <div class="container">
         <form  method="POST">
    <h1 class="text-center mt-3"> REGISTRATION FORM</h1>
    <div class="row">
    <div class="col-md-6">
      <label for="exampleInputEmail1" class="form-label">First Name</label>
      <input type="text" class="form-control" id="exampleInputfirstname" name="FirstName" aria-describedby="firstnmaelHelp">
      <div id="firstnameHelp" class="form-text"></div>
    </div>
    <div class="col-md-6">
      <label for="exampleInputlastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" name="LastName"  id="exampleInputlastnmae">
    </div>
    </div>
  <div class="row">
    <div class="col-md-6">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="col-md-6">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="Password" id="exampleInputPassword1">
    </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputcontact" class="form-label">Contact Number</label>
        <input type="phone" class="form-control" name="ContactNumber" id="exampleInputcontact">
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DOB</label>
        <input type="date" class="form-control" id="exampleInputdate" name="DOB" aria-describedby="datelHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      

      
      <div class="mb-3">
        <label name="Gender">Gender:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1" value="Male">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2" value="Female">
              Female
            </label>
          </div>
<div class="row">
      <div class="col-md-6">
        <label for="exampleInputcontact" class="form-label">City</label>
        <input type="phone" class="form-control" name="City" id="exampleInputcontact">
      </div>
      <div class="col-md-6">
        <label for="exampleInputcontact" class="form-label">Country</label>
        <input type="phone" class="form-control" name="Country" id="exampleInputcontact">
      </div>
      </div>
      <br>
     <!-- <a href="login_form.php" class="btn btn-primary">Go to Login Form</a> -->
    
    <input type="submit"  name="submit" class="btn btn-primary">
    <br>
    <a href="login_form.php">Have an account to login</a>

         </form>
     </div>
     </div>  
     </div>  
     



     <?php
include("footer.php");
?>
 </body>
</html>

<?php
if(isset($_POST["submit"])){
  $firstname = $_POST["FirstName"];
  $lastname = $_POST["LastName"];
  $email = $_POST["Email"];
  $password = $_POST["Password"];
  $contactNumber = $_POST["ContactNumber"];
  $dob = $_POST["DOB"];
  $gender = $_POST["Gender"];
  $city = $_POST["City"];
  $country = $_POST["Country"];
  
  // $conn = mysqli_connect("localhost","root","khooje2");
  $query = "INSERT INTO `registration`( `firstname`, `lastname`, `email`, `password`, `dob`, `gender`, `city`, `country`) VALUES ('$firstname','$lastname','$email','$password','$dob','$gender','$city','$country')";

  $result = mysqli_query($db,$query);
    if (mysqli_num_rows($result)) {
      while ($row = mysqli_fetch_array($result)) {
   
?>

<script>
    window.location.assign("login_form.php");
  </script>

<?php



      }
    }

}
  


?>