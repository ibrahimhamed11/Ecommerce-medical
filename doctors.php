<?php
session_start();
require_once ('componant/CreateDb.php');
require_once ('componant/component.php');


//get doctor name from ussers table 
// $select= mysqli_query($conn, "SELECT `name` FROM users where id =$docId");
// $docname = mysqli_fetch_assoc($select);
// $docnn=($docname['name']);



// create instance of Createdb class
$database = new CreateDb("reaya", "users");
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
        }
    }else{
        $item_array = array(
                'product_id' => $_POST['product_id']
        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        // print_r($_SESSION['cart']);
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" />
    <title>Doctors</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <!--fontawesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--icons library-->
    <link rel="stylesheet" href="css/pharmacie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />

</head>

<body>
    <div class="pharmaceies-page">
        <!-- start nav -->
        <nav class="navbar navbar-expand-lg navbar-light nav sticky-top p-0">
            <div class="container">
                <div class="col-6 logo">
                    <div class="images">
                        <img src="assets/images/logo.PNG" alt="" />
                        <span>Re<h>ع</h>aya</span>
                    </div>
                </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3 " aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3" href="pharmacies.php">PHARMACEIES</a>

                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3 active" href="pharmacie_profile.php">PHARMACY PROFILE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3" href="#">DOCTORS</a>
                        </li>
                        <li class="nav-item align-self-center ">
                            <a class="nav-link p-1 p-lg-3" href="doctor_profile.php">DOCTOR PROFILE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3" href="contact.php">CONTACT</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3" href="join us.php">JOIN</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3" href="donate.php">DONATE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end nav -->
    </div>
    <!-- end header -->

    <!--start head lines-->
    <div>
        <div class="cartnav" id="cardnav">
            <header class="line" style="display: flex;">
                <p class="title">
                    All medicines are dispensed from pharmacies licensed by the Ministry of Health in the Arab Republic
                    of Egypt
                </p>



                <div class="card-close">
                    <button type="button" class="closebtn">×</button>

                    <div class="carttt">
                        <div class="navbar-nav ">

                        </div>
                    </div>
                </div>
            </header>



            <div class="listitems">

                <div class="searchcontainer">
                    <form action="search.php" method="post" class=" d-flex py-0">
                        <input type="text" name="search" class="form-control mb-4" placeholder="Enter any details">
                        <br>

                        <button type="submit" name="submit" class="btn btn-primary mb-4">Search</button>
                    </form>

                    <div>

                        <form action="filter.php" method="post" action="">
                            <div class="form-inline">
                                <!-- <label>Specialization</label> -->
                                <select class="form-control" name="Specialization">
                                    <option value="Specialization">Specialization</option>

                                    <option value="skin">skin</option>
                                    <option value="teeth">teeth</option>
                                    <option value="child">child</option>
                                    <option value="brain">brain</option>
                                    <option value="bones">bones</option>
                                </select>
                                <!-- <label>Address</label> -->
                                <select class="form-control" name="address">
                                    <option value="">Address</option>
                                    <option value="Mansoura">Mansoura</option>
                                    <option value="aswan">Aswan</option>
                                </select>
                                <button class="btn btn-primary" name="filter">Filter</button>
                                <!-- <button class="btn btn-success" name="reset">Reset</button> -->
                            </div>
                        </form>
                        <br /><br />
                    </div>
                </div>

                <!-------------------------lables container div------------------------->
            </div>
        </div>
        <!--******************************************************* -->
        <!--Fileter-->


        <div>
            <form class="filter" method="post" action="./test.php" enctype="multipart/form-data">
                <div class="part2_province_region">
                    <div class="container">

                        <!-- <select class="card" id="sec2">
                                <option>Choose the region</option>
                                <option></option>
                            </select> -->
                    </div>

                </div>
        </div>
    </div>
    </section>
    </form>
    </div>
    <style>
    .filter {
        display: flex;
    }
    </style>
    <!--Fileter-->

    <div class="container">

        <div class="row text-center py-5 carddoc">

            <style>
            .carddoc {

                margin-top: 40px;
                min-width: 400px
            }
            </style>

            <?php
                $result = $database->getDoctorsData();
                
                while ($row = mysqli_fetch_assoc($result)){

                    doctorsCard($row['name'],$row['price'],$row['specialization'],$row['docDesc'],$row['address'],$row ['image'],$row['id']);
                  
                }


            ?>
        </div>
    </div>


    <!-- start footer -->
    <footer class="section_end text-center text-lg-start pt-2">
        <!-- Section: Links  -->
        <div class="container p-3">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->

                <!-- Copyright -->

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-2">
                    <!-- Content -->
                    <div class="pb-2">
                        <img src="./assets/images/logoFooter.PNG" alt="" />
                        <span>Re<h>ع</h>aya</span>
                    </div>
                    <p></p>
                    <div class="pt-3">
                        <a class="text-reset" href="">©2020 Thousand Sunny. All rights reserved</a>
                    </div>
                </div>
                <!-- Copyright -->

                <!-- Start Grid column -->

                <!-- End Grid column -->

                <!-- Start Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">OUR PAGE</h6>
                    <p>
                        <a href="#!" class="text-reset">HOME</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">PHARMACEIES</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">DOCTORS</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">JOIN US</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">CONTACT US</a>
                    </p>
                </div>
                <!-- End Grid column -->

                <!-- Start Grid column -->
                <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">ABOUT</h6>
                    <p><i class="fa-solid fa-phone"></i> +1800-001-658</p>
                    <p>
                        <i class="fa-solid fa-envelope"></i> Info@Peacefulthemes.Com
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Themeforest, Envato HQ
                        24 Fifthst., Los Angeles, USA
                    </p>
                </div>

                <!-- End Grid column -->
                <!-- Grid row -->
            </div>
            <!-- Section: Links  -->

            <!-- Icons -->
            <div class="text-center pl-4">
                <div class="container" style="border-top: 1px solid white">
                    <!-- Twitter -->
                    <a class="btn btn-link btn-floating btn-lg text-dark mt-2" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                    <!-- Facebook -->
                    <a class="btn btn-link btn-floating btn-lg text-dark mt-2" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark mt-2" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-dark mt-2" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>

                    <!-- Google -->
                    <a class="btn btn-link btn-floating btn-lg text-dark mt-2" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
                </div>
            </div>
            <!-- Icons -->
        </div>
    </footer>
    <!-- end footer -->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="js/main.js"></script>

</html>