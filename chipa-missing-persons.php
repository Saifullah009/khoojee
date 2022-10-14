<?php
 include_once("connection.php");
 error_reporting(0);
 
 if ($_SESSION["usertype"] != 2) {
  ?>

  <script>
    window.location.assign("login_form.php");
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
 <body style="background-color:  #dbdbe8

	">
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
         <form method="post" enctype="multipart/form-data">
    <h1 class="text-center mt-3 text-primary">Edhi/Chhipa missing perons</h1>
    <div class="conatiner">
  <div class="row" >
    <div class="col-md-6">
    <div class="row">
    <div class="col-md-6">
      <label>UPLOAD IMG OF MISSING PERSONS</label>
      <input type="file" class="form-control" name="img" id="exampleInputchoosefile" aria-describedby="choosefile">
      <div id="choosefileHelp" class="form-text"></div>
    </div>

<br>
<br>
    </div>
  </div>
</div>
    <div class="row">
    <div class="col-md-6">
      <label for="exampleInputEmail1" class="form-label">First Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="fname" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="col-md-6">
      <label for="exampleInputPassword1" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="lname">
    </div>
    </div>
  <div class="row">
    <div class="col-md-6">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="col-md-6">
      <label for="exampleInputPassword1" class="form-label">Contact</label>
      <input type="tel" class="form-control" name="contact" id="exampleInputPassword1">
    </div>
    </div>

    <div class="row">
    <div class="col-md-6">
      <label for="exampleInputEmail1" class="form-label">CNIC</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="cnic" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="col-md-6">
      <label for="exampleInputPassword1" class="form-label">Mark / Abnormality</label>
      <input type="text" class="form-control" name="mark" id="exampleInputPassword1">
    </div>
    </div>  

    <div class="row">
    <div class="col-md-6">
      <label for="exampleInputEmail1" class="form-label">Address</label>
      <textarea name="address" class="form-control" cols="30" rows="3"></textarea>
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="col-md-6">
      <label for="exampleInputPassword1" class="form-label">DOB</label>
      <input type="date" class="form-control" name="dob" id="exampleInputPassword1">
    </div>
    </div> 
    

<div class="row">
      <div class="col-md-6">
        <label for="exampleInputcontact" class="form-label">City</label>
        <input type="text" name="city" class="form-control" id="exampleInputcontact">
      </div>
      <div class="col-md-6">
        <label for="exampleInputcontact" class="form-label">Country</label>
        <input type="text" name="country" class="form-control" id="exampleInputcontact">
      </div>
      </div>
      
      <div class="mb-3">
        <label>Gender:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" >
            <label class="form-check-label" for="exampleRadios1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
            <label class="form-check-label" for="exampleRadios2">
              Female
            </label>
          </div>

          <button type="submit" name="submit" class="btn btn-primary text-center" >Submit</button>
         </form>
     </div>

     <?php
include("footer.php");
?>
 </body>
</html>

<?php
// $db = mysqli_connect("localhost", "root", "", "khoojee2");
 if(isset($_POST["submit"])) {
  $firstname = $_POST["fname"];
  $lastname = $_POST["lname"];
  $Email = $_POST["email"];
  $contact = $_POST["contact"];
  $cnic = $_POST["cnic"];
  $mark = $_POST["mark"];
  $dob = $_POST["dob"];
  $city = $_POST["city"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];

  $filename = $_FILES["img"]["name"];

  $imgname = rand() . $filename;
  
  $tmpname = $_FILES["img"]["tmp_name"];
  
  $path = "./img/" . $imgname;
  move_uploaded_file($tmpname, $path);
  
  $profile_img = $imgname;

  $address = $_POST["address"];
  $address = mysqli_real_escape_string($db,$address);

  $insert = "INSERT INTO `chipa-mis-per`(`firstname`, `lastname`, `email`, `contact`, `cnic`, `mark/abnormality`, `address`, `dob`, `city`, `country`, `gender`, `upload_img`) VALUES ('$firstname','$lastname','$Email','$contact','$cnic','$mark','$address','$dob','$city','$country','$gender','$profile_img')";
  $result = mysqli_query($db, $insert);
  ?>
  <script>
    window.location.assign("./index.php")
  </script>
  <?php
 }



}
?>