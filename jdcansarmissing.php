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
  
              <!---nav bar-->
              <?php
 include_once("nav.php");
 ?>
<!---- imgurl---->
<div class="container">
  <h1>JDC/ANSAR BURNEY MISSING PERSONS</h1>
  <div class="row">
    <?php
    $sel = "SELECT * FROM `jdcansarmis` ORDER BY `id` DESC";
    $result = mysqli_query($db, $sel);
    while($row = mysqli_fetch_array($result)):
    
    ?>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <img src="img/<?= $row['upload_img']; ?>" class="img_top img-fluid" alt="">
              <p><b>First Name </B><?= $row['firstname'];    ?></p>
              <p><b> Last Name </B><?= $row['lastname'];    ?></p>
              <p><b> Email </B><?= $row['email'];    ?></p>
              <p><b> Contact </B><?= $row['contact'];    ?></p>
              <p><b> cnic </B><?= $row['cnic'];    ?></p>
              <p><b> Mark/Abnormality	 </B><?= $row['mark/abnormality'];    ?></p>
              <p><b> Address </B><?= $row['address'];    ?></p>
              <p><b> DOB </B><?= $row['dob'];    ?></p>
              <p><b> City </B><?= $row['city'];    ?></p>
              <p><b> Country </B><?= $row['country'];    ?></p>
              <p><b> Gender </B><?= $row['gender'];    ?></p>
              </div>
          </div>
        </div>
    <?php endwhile; ?>
  </div>
</div>
<br>
    


    </div>
  </div>
</div>


<?php
include("footer.php");
?>
 </body>
</html>

