
<div class="cotainer">
 <div class="row">
 <div class="col-md-12">
              <!---nav bar-->
              <nav class="navbar navbar-expand-lg bg-success" width="100%" >
                <div class="container-fluid">
                  <img src="img/final logo.png"width="60px" class="p-2" alt="">
                  <br><br>
                  <a class="navbar-brand text-white" href="index.php">Home</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Jinnah/Civil hospital
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                          <li><a class="dropdown-item  bg-success text-white" href="civil-missing-per.php">jinnah/Civil Missing persons</a></li>
                          <li><a class="dropdown-item bg-success text-white" href="civil-honorless-Morgue.php">Jinnah/Civi honorless Morgue(مردہ خانہ)</a></li>
                          <li><a class="dropdown-item  bg-success text-white" href="civil-contact-nmbrs.php">Jinnah/Civil contact numbers</a>

                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="chipa foundation.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Edhi/Chhipa Foundation
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                          <li><a class="dropdown-item  bg-success text-white" href="chipa-missing-persons.php">Edhi/Chhipa Missing  persons</a></li>
                          <li><a class="dropdown-item bg-success text-white" href="Chhipa-honorless-Morgue(مردہ خانہ).php">Edhi/Chhipa honorless Morgue(مردہ خانہ)</a></li>
                          <li><a class="dropdown-item bg-success text-white" href="chhipa-contact-numbers.php">Edhi/Chhipa contact numbers<a></li>
                        </ul>

                        
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="chipa foundation.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          JDC/Ansar Burney Trust
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                          <li><a class="dropdown-item  bg-success text-white" href="jdc-ansarmiss.php"> JDC/ansar burney Missing persons</a></li>
                          <li><a class="dropdown-item bg-success text-white" href="JDC-contact-number .php">JDC contact numbers</a></li>
                          <li><a class="dropdown-item bg-success text-white" href="Ansar-numbers.php">Ansar burney contact numbers</a></li>


                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Police Department
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                          <li><a class="dropdown-item  bg-success text-white" href="police-contact.php">Police Departments contact numbers</a></li>
                          <li><a class="dropdown-item  bg-success text-white" href="Honerless_presinoers.php">Honorless prisoners</a></li>

                        </ul>
                      </li>
                                          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        NADRA PAKISTAN
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                        <li><a class="dropdown-item  bg-success text-white" href="NADRA.php">NADRA</a></li>
                        <li><a class="dropdown-item  bg-success text-white" href="NADRA-CONTACT-NUM.php">NADRA Contact Numbesr</a></li>

                      </ul>
                    </li>
                    <a class="navbar-brand text-white" href="upload_img.php">upload img</a>

                   
                        

                        <?php
                        error_reporting(0);
                        if(  $_SESSION["email"] == null){

                          ?>  
                           
                           <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Regration/login
                        </a>

                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                          <li><a class="dropdown-item  bg-success text-white" href="Registration.php">Registration</a></li>
                          <li><a class="dropdown-item  bg-success text-white" href="login_form.php">Login</a></li>
                        </ul>


                      <?php
                        }else{
                          ?>
                          <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        </a>
                            


                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                          <li><a class="dropdown-item  bg-success text-white" href="logout.php">Logout</a></li>
                        </ul>


                          <?php
                        }
                        ?>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink bg-success" >
                          <li><a class="dropdown-item  bg-success text-white" href="Registration.php">Registration</a></li>
                          <li><a class="dropdown-item  bg-success text-white" href="login_form.php">Login</a></li>
                        </ul>
                   </div>
                </div>
              </nav>   
    </div>
     </div>
    </div>

 