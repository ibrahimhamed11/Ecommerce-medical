<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" />
    <title>PHARMACEIES</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />
    <link rel="stylesheet" href="css/pharmacie.css">
</head>

<body>
    <!-- start nav -->
    <div class="pharmaceies-page">
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
                            <a class="nav-link p-1 p-lg-3" href="pharmacies">PHARMACEIES</a>

                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3 " href="pharmacie_profile.php">PHARMACY PROFILE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-1 p-lg-3" href="doctor.php">DOCTORS</a>
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
                            <a href="cart.php" class="nav-item nav-link active">
                                <h5 class="px-5 cart">
                                    <i class="fas fa-shopping-cart"></i> Cart
                                    <?php
                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\">$count</span>";
                            
                        }else{
                            echo "<span id=\"cart_count\">0</span>";
                        }
                        ?>
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <?php $search = $_POST['search'];?>
            <div style="margin:30px auto; text-align:center ;margin-bottom: -40px;">
                <h3>This page content is based on: <?php echo $search;?></h3>
            </div>
            <div class="container">
                <div class="row text-center py-5">

                    <?php

//connect ot the database
        require 'componant/conn.php';
        require_once ('componant/CreateDb.php');
        require_once ('componant/component.php');
        //get the search keyword
        //$search = $_POST['search'];
        //SQL query to get the products based on the search keyword
        $sql = "SELECT * FROM producttb WHERE product_name LIKE 
        '%$search%' OR product_description LIKE '%$search%'
        ";

        //execute the query

        $res = mysqli_query($con, $sql);
        //count the rows
        $count = mysqli_num_rows($res);
        //check whether the product is available
        if ($count > 0) {
            while ($row= mysqli_fetch_assoc($res)) {
                component($row['product_name'], $row['product_price'],$row['product_description'], $row ['product_image'], $row['id']);
                ?>

                    <?php

            }
        }else {
            echo "<div class='alert alert-danger'>
            there is no product matching your search....
            </div>";
        }

            ?>
                </div>


            </div>





            < <!-- start footer -->
                <footer class="section_end text-center text-lg-start pt-2" style="  bottom: 0;
    margin-top: 100px;">
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
<!-- end footer -->

</html>