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
    
    <div class="container">
      <img src="img/jdc-png logo.png"class="text-center"width="160px"  alt="">

      
      <i class="fa-solid fa-phone btn btn-danger" ><h1 class="btn btn-danger">HELP LINE NO . 1024</h1></i>

      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h7 class="card-title">Head Office:B-24, Federal B Area Ancholi Block 20 Gulberg Town, Karachi
            </h7>
              <br>
              <a href="#" class="btn btn-success"> <i class="fa-solid fa-phone"></i>(021) 36341059

              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h7 class="card-title"> Branch Address: Nazimabad branch, Karachi

              </h7>
              <br>
              <a href="#" class="btn btn-success">  <i class="fa-solid fa-phone"></i>0081-011633-01-2 </a>
            </div>
          </div>
        </div> 
      </div>
  <br>
<!---- second r0w ---->
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h7 class="card-title">Bank Al Habib Limited, Main water pump Branch, Karachi
        </h7>
        <a href="#" class="btn btn-success"> <i class="fa-solid fa-phone"></i>1031-0081-011633-01-2.</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h7 class="card-title"> JDC BRANCH OFFICE BUKHARI COMMERCIAL DHA PHASE 6
        </h7>
        <br>
        <a href="#" class="btn btn-success">  <i class="fa-solid fa-phone"></i>(021) 36341059.
        </a>
      </div>
    </div>
  </div> 

  <!---- second row---->

</div>
<br>
<!---3rd row---->

    </div>


    <?php
include("footer.php");
?>
    </body>
</html>