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
  <h3>HONORLESS PRISONERS</h3>
  <div class="row">
    <?php
    // $db = mysqli_connect("localhost", "root", "", "khoojee2");
    $sel = "SELECT * FROM `honorlessprisoners` ORDER BY `id` DESC";
    $result = mysqli_query($db, $sel);
    while($row = mysqli_fetch_array($result)):
    
    ?>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <img src="img/<?= $row['upload_img']; ?>" class="img_top img-fluid" alt="">
              <p><b>First Name </B><?= $row['fname'];    ?></p>
              <p><b> Last Name </B><?= $row['lname'];    ?></p>
              <p><b> start date of prison </B><?= $row['strtdate'];    ?></p>
              <p><b> address </B><?= $row['address'];    ?></p>
              <p><b> cnic	 </B><?= $row['cnic'];    ?></p>
              <p><b> relase date </B><?= $row['relasedate'];    ?></p>
              <p><b> prison name</B><?= $row['prisonname'];    ?></p>
              <p><b> city village </B><?= $row['cityvillag'];    ?></p>
              <p><b> guardien name </B><?= $row['gname'];    ?></p>
              <p><b> gender </B><?= $row['gender'];    ?></p>
              <p><b> honorable/honorless </B><?= $row['hablehless'];    ?></p>


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

