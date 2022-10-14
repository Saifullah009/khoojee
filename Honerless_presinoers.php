<?php
 include_once("connection.php");

 error_reporting(0);
 
 if ($_SESSION["usertype"] != 4) {
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
<body style="background-color: #dbdbe8 ">
  
              <!---nav bar-->
              <?php
 include_once("nav.php");
 ?>
<!---- imgurl---->
<h1 class="text-primary text-center ">  HONORLESS PRISONERS </h1>

            <div class="col">
<br>
<div class="container">
  <div class="row">

    <div class="col-md-6">

<br>
      <img src="img/sindh police.jpg"width="560px" alt="">
    </div>
<br>
<br>
    <div class="col-md-6">
      <!----form--->

 <form form method="post" enctype="multipart/form-data">
    <input type="file" class="form-control" name="img" accept="*/image">

        <div class="row">
          <div class="col">
            <label >First name of prisoner</label>
            <input type="text" class="form-control btn btn-success text-white " placeholder="First name of prisoner" name="fname">
          </div>
          <br>
          <div class="col">
            
            <label>Last name prison</label>
            <input type="text" class="form-control btn btn-success text-white" placeholder="Last name  of prisoner" name="lname">
          </div>
        </div>
     <br>   
       <div class="row">
      <div class="col">
     <label >starting date of prison</label>
     <input type="date" class="form-control btn btn-success text-white " placeholder="start date of prion" name="strtdate">
     </div>
     <br>
     <div class="col">
       <label >Address</label>
       <input type="text" class="form-control btn btn-success text-white" placeholder="address" name="address">
      </div>
       </div>

       <br>
       <div class="row">
       <div class="col">
       <label >CNIC no</label>
       <input type="text" class="form-control btn btn-success text-white" placeholder="cnic no" name="cnic">
       </div>
       <br>
       <div class="col">
        <label  >date of realsing from prison</label>
        <input type="date" class="form-control btn btn-success text-white" placeholder="Timdate of realesing prisoner" name="relasedate">
       </div>
       </div>
       <br>

       <div class="row">
       <div class="col">
     <label >prison name</label>
     <input type="text" class="form-control btn btn-success text-white" placeholder="prison name" name="prisonname">
      </div>
      <br>
      <div class="col">
       <label >city/vilage</label>
        <input type="text" class="form-control btn btn-success text-white" placeholder="place" name="cityvillag">
        </div>
       </div>
       <br>
       <div class="row">
        <div class="col">
         <label > name of guardien</label>
        <input type="text" class="form-control btn btn-success text-white" placeholder=" Name of guardian" name="gname">
       </div>
      <br>
    
       <div class="col">
       <label> Relation with Dead body</label>
       <input type="text" class="form-control btn btn-success text-white" placeholder="Relation with Dead body" name="rwbody">
      </div>
      </div>

     <br>
     <div class="row">
    <div class="col">
     <label >contact number</label>
     <input type="tel" class="form-control btn btn-success text-white " placeholder="phone" name="contact">
     </div>
     <br>

      <div class="row">
      <label>Gender:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="exampleRadios1" value="male" name="gender">

            <label class="form-check-label" for="exampleRadios1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" id="exampleRadios2" value="female" name="gender">
            <label class="form-check-label" for="exampleRadios2">
              Female
            </label>
  
         <br>
         <label >Honorable /honorless</label>
        <br>
        <div class="btn-group btn-group-toggle " data-toggle="buttons" name="hablehless">
        <label class="btn btn-success active">
        <input type="radio" name="hablehless" value="Honerable" id="option1" checked> Honerable
        </label>
        <label class="btn btn-success">
        <input type="radio" name="hablehless"  value="Honerlsse" id="option2"> Honerlsse
      </label>
       <label class="btn btn-success">
        <input type="radio" name="hablehless" value="Dont know" id="option3">Dont know
          </label>
        </div>
        <br>
        <br>
           <input type="submit" class="btn btn-primary" name="submit"  >
         <br>

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
// $db = mysqli_connect("localhost", "root", "", "khoojee2");
 if(isset($_POST["submit"])) {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $strtdate = $_POST["strtdate"];
  $address= $_POST["address"];
  $cnic= $_POST["cnic"];
  $relasedate = $_POST["relasedate"];
  $prisonname	= $_POST["prisonname"];
  $cityvillag = $_POST["cityvillag"];
  $gname =$_POST["gname"];
  $rwbody =$_POST["rwbody"];
  $contact= $_POST["contact"];
  $gender= $_POST["gender"];
  $hablehless	=$_POST["hablehless"];
  



  $filename = $_FILES["img"]["name"];

  $imgname = rand() . $filename;
  
  $tmpname = $_FILES["img"]["tmp_name"];
  
  $path = "./img/" . $imgname;
  move_uploaded_file($tmpname, $path);
  
  $upload_img = $imgname;

  $address = $_POST["address"];
  $address = mysqli_real_escape_string($db,$address);

  $insert = "INSERT INTO `honorlessprisoners`(`fname`, `lname`, `strtdate`, `address`, `cnic`, 
  `relasedate`, `prisonname`, `cityvillag`, `gname`, `rwbody`, `contact`, `gender`, `hablehless`, 
  `upload_img`) VALUES ('$fname','$lname','$strtdate','$address','$cnic','
  $relasedate','$prisonname','$cityvillag','$gname','$rwbody','$contact','$gender','$hablehless','$upload_img')";
  
  $result = mysqli_query($db,$insert);

  ?>
  <script>
    window.location.assign("./index.php")
  </script>
  <?php
 }


}
?>