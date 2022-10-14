<?php
session_start();
if ($_SESSION["usertype"] != 10) {
    ?>
<script>
    window.location.assign("login.php");
</script>
<?php

}

else{



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

    <?php
        include("navbar.php")
    ?>
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jinnah and Civil Missing Person </h1>
                       
<br><br>
                        <table border="3" class="table">
                            <tr>
                                <th>Id</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                
                                <th>Email</th>
                                
                                <th>Contact</th>
                                <th>CNIC</th>
                                <th>Mark/Abnormality</th>
                                
                                <th>Address</th>
                                
                                <th>DOB</th>
                                
                                
                                <th>City</th>
                                
                                <th>Country</th>
                                <th>Gender</th>
                                <th>Picture</th>
                                <th>Remove</th>

                            </tr>
                            <?php
                            

                                $conn = mysqli_connect("localhost","root","","khoojee2");
                              
                                $query = "SELECT * FROM `civil-missing-per`";
                                $result = mysqli_query($conn,$query);
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $row[0]; ?></td>
                                        <td> <?php echo $row[1]; ?></td>
                                        <td> <?php echo $row[2]; ?></td>
                                        <td> <?php echo $row[3]; ?></td>
                                        <td> <?php echo $row[4]; ?></td>
                                        <td> <?php echo $row[5]; ?></td>
                                        <td> <?php echo $row[6]; ?></td>
                                        <td> <?php echo $row[7]; ?></td>
                                        <td> <?php echo $row[8]; ?></td>
                                        <td> <?php echo $row[9]; ?></td>
                                        <td> <?php echo $row[10]; ?></td>
                                        <td> <?php echo $row[11]; ?></td>
                                                                         
                                        <td> <img src="../img/<?php echo $row[12]; ?>" width="100px" alt=""></td>
                                        <td><a href="R-J-C-M.php?id=<?php echo $row["0"];?>"><button>Remove</button></a> </td>

                                    



                                    </tr>



<?php

                                    }
                                }
                            

?>



                        </table>

</div>
</main>
                      
                        
                        
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php
}
?>