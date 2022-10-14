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
  <br>

<!--- title img---->

<div class="container">
  <form method="post" enctype="multipart/form-data">
                 <h1 class="text-center mt-3 text-primary">EDHI/CHHIPA HONERLESS MORGUE(مردہ خانہ)</h1>
        <div class="conatiner">
              <div class="row" >
           <div class="col-md-12">
              <div class="row">
              <div class="col-md-6">

            </div>
        </div>
        <!--- title img---->

     <div class="container">  
         <div class="row">
         <div class="col-md-6">
             <img src="img/Edhi murdakhana jpg.jpg"width="500px" height="370px"alt="">
         </div>
          <br>
           <div class="col-md-6">
            <img src="img/chhipa morgue.jpg" width="500px" height="370px"alt="">
          </div>
         </div>
          </div>
          <!----form ---->
        
        <div class="row mt-5">
        <label>UPLOAD IMG OF MISSING PERSONS</label>
                   <input type="file" class="form-control" name="img" accept="*/image">
            <div class="col">
                <label >First name of body</label>
                 <input type="text" class="form-control btn btn-success text-white " placeholder="First name of body"name="firstnnambody">
              </div>
             <br>
             <div class="col">
            
              <label>Last name of body</label>
               <input type="text" class="form-control btn btn-success text-white" placeholder="Last name  of body"name="lastnambody">
            </div>
              </div>
            <br>   
         <div class="row">
          <div class="col">
       <label >Date of keeping body</label>
       <input type="date" class="form-control btn btn-success text-white " placeholder="Date of keeping body"name="datekeepingbody">
       </div>
         <br>
         <div class="col">
          <label >Time of keeping body</label>
          <input type="time" class="form-control btn btn-success text-white" placeholder="time of keeping body"name="timekeepbody">
          </div>
          </div>

             <br>
             <div class="row">
              <div class="col">
              <label >Date of realesing body</label>
              <input type="Date" class="form-control btn btn-success text-white" placeholder="Date of realesing body"name="dateraleasebody">
               </div>
             <br>
           <div class="col">
          <label  >Time of reaslesing body</label>"
           <input type="time" class="form-control btn btn-success text-white" placeholder="Time of realesing body"name="timerelalesbody">
         </div>
          </div>
           <br>

           <div class="row">
          <div class="col">
            <label >Cause of death</label>
             <input type="text" class="form-control btn btn-success text-white" placeholder=" cause of death"name="causeofdeath">
            </div>
             <br>
              <div class="col">
               <label >Unsusal sign or symptom</label>
                <input type="text" class="form-control btn btn-success text-white" placeholder="Unsusal sign or symptom"name="unsusalsymptom">
                  </div>
             </div>
                <br>
          <div class="row">
             <div class="col">
         <label > name guardian</label>
         <input type="text" class="form-control btn btn-success text-white" placeholder=" Name of guardian"name="cnicbody">
            </div>
           <br>
    
         <div class="col">
       <label>Relation with dead body  </label>
       <input type="text" class="form-control btn btn-success text-white" placeholder="Relation with Dead body"name="contatct">
             </div>
       </div>
         <br>

              <div class="row">
              <div class="col">
                <label> CNIC No. of gardianu</label>
               <input type="text" class="form-control btn btn-success text-white" placeholder=" CNIC No. of guardian"name="adress">
               </div>
                <br>
                 <div class="col">
               <label >CNIC No. of dead body</label>
                <input type="number" class="form-control btn btn-success text-white" placeholder=" CNIC  No. of dead body"name="cnicbody">
             </div>
               </div>
                  <br>

               <div class="row">
              <div class="col">
               <label >Enter contact number</label>
            <input type="tel" class="form-control btn btn-success text-white " placeholder="Enter contact number"name="contatct">
               </div>
             <br>
             <div class="col">
              <label >Address</label>
             <input type="text" class="form-control btn btn-success text-white" placeholder="Address"name="adress">
              </div>
                 </div>
                 <br>
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
                <br>
               <label >Honorable /honorless</label>
                 <br>
         <div class="btn-group btn-group-toggle " data-toggle="buttons"name="honorable/honoerless" nmae="honorablehonoerless">
            <label class="btn btn-success active">
            <input type="radio" name="options" id="option1" checked> Honerable
              </label>
                <label class="btn btn-success">
                  <input type="radio" name="options" id="option2"> Honerlsse
                    </label>
                  <label class="btn btn-success">
                 <input type="radio" name="options" id="option3"> Dont know
             </label>
               </div>
                 <br>
                     <br>
              <input type="submit" class ="btn btn-primary" name="submit"  >
                       <br>
     </div>
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
  $firstnnambody = $_POST["firstnnambody"];
  $lastnambody = $_POST["lastnambody"];
  $datekeepingbody = $_POST["datekeepingbody"];
  $timekeepbody= $_POST["timekeepbody"];
  $dateraleasebody= $_POST["dateraleasebody"];
  $timerelalesbody= $_POST["timerelalesbody"];
  $causeofdeath= $_POST["causeofdeath"];
  $unsusalsymptom = $_POST["unsusalsymptom"];
  $cnicbody= $_POST["cnicbody"];
  $contatct= $_POST["contatct"];
  $adress= $_POST["adress"];
  $honorablehonoerless	= $_POST["honorablehonoerless"];
  $gender = $_POST["gender"];



  $filename = $_FILES["img"]["name"];

  $imgname = rand() . $filename;
  
  $tmpname = $_FILES["img"]["tmp_name"];
  
  $path = "./img/" . $imgname;
  move_uploaded_file($tmpname, $path);
  
  $profile_img = $imgname;

  $address = $_POST["address"];
  $address = mysqli_real_escape_string($db,$address);

  $insert = "INSERT INTO `chhipa-morgue`( `firstnnambody`, `lastnambody`, `datekeepingbody`, `timekeepbody`, `datereleasebody`, `timerelalesbody`, 
  `causeofdeath`, `unsusalsymptom`, `nameguardian`, `relationwithbody`, `cnicguardian`, `cnicbody`, `contact`, `address`, `honoablehonorless`, 
  `upload_img`,`gender`) VALUES ('$firstnnambody','$lastnambody','$datekeepingbody','$timekeepbody','$dateraleasebody','$timerelalesbody','$causeofdeath',
  '$unsusalsymptom','$nameguardian','$relationwithbody','$cnicguardian','$cnicbody','$contatct','$adress','$honorablehonoerless','$profile_img' , '$gender')";
  
  $result = mysqli_query($db,$insert);

  ?>
  <script>
    window.location.assign("./index.php")
  </script>
  <?php
 }


}
?>