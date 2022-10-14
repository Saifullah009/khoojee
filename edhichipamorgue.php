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
  <h1>EDHI/CHHIPA  HONORLESS MORGUE</h1>
  <div class="row">
    <?php
    $sel = "SELECT * FROM `chhipa-morgue` ORDER BY `id` DESC";
    $result = mysqli_query($db, $sel);
    while($row = mysqli_fetch_array($result)):
    
    ?>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <img src="img/<?= $row['upload_img']; ?>" class="img_top img-fluid" alt="">
              <p><b>First Name </B><?= $row['firstnnambody'];    ?></p>
              <p><b> Last Name </B><?= $row['lastnambody'];    ?></p>
              <p><b> date keeping body	 </B><?= $row['datekeepingbody'];    ?></p>
              <p><b> date release body</B><?= $row['datereleasebody'];    ?></p>
              <p><b> time keep body</B><?= $row['timekeepbody'];    ?></p>
              <p><b> time relales body </B><?= $row['timerelalesbody'];    ?></p>
              <p><b> cause of death </B><?= $row['causeofdeath'];    ?></p>
              <p><b> unsusal symptom </B><?= $row['unsusalsymptom'];    ?></p>
              <p><b> name guardian </B><?= $row['nameguardian'];    ?></p>
              <p><b> relation with body </B><?= $row['relationwithbody'];    ?></p>
              <p><b> cnic guardian </B><?= $row['cnicguardian'];    ?></p>
              <p><b>cnic body </B><?= $row['cnicbody'];    ?></p>
              <p><b> contact </B><?= $row['contact'];    ?></p>
              <p><b> address </B><?= $row['address'];    ?></p>
              <p><b> honoable honorless	</B><?= $row['honoablehonorless'];    ?></p>
              <p><b> gender </B><?= $row['gender'];    ?></p>

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

