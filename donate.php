<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation</title>
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/mohammed.css" />
    <!-- دي لينكات google fonts بتاع الخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="donation-page">
        <!-- start nav -->
        <nav class="navbar navbar-expand-lg navbar-light nav sticky-top p-0">
            <div class="container">
                <div class="col-3 logo">
                    <div class="images">
                        <img src="assets/images/logo.PNG" alt="" />
                        <span>Re<h>ع</h>aya</span>
                    </div>
                </div>
                <button class="navbar-toggler navbar-toggler-right " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-7 justify-content-end" id="navbarTogglerDemo02">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2 active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2" href="PHARMACEIES.php">PHARMACEIES</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2" href="doctor.php">DOCTORS</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2" href="contact.php">CONTACT</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2" href="join us.php">JOIN</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2" href="donate.php">DONATE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2" href="pharmacie_profile.php">PHARMACEIES PROFILE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link  p-lg-2" href="#">DOCTORS PROFILE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end nav -->
        <!-- start title -->
        <div class="title">
            <div>Medical Donations<br />Program</div>
        </div>
        <!-- end title -->
        <!-- start donate -->
        <div class="donate">
            <button class="dropdown-toggle donate-button" data-target="#x" data-toggle="collapse">
                DONATE PRODUCT
            </button>
            <button class="dropdown-toggle request-button" data-target="#y" data-toggle="collapse">
                REQUEST PRODUCT
            </button>
        </div>

        <!-- start popup Donate -->
        <div class="popup1">
            <div class="form-container">
                <div class="close1">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <form method="post" action="" id="addForm">
                    <div class="input-control mb-3">
                        <input type="text" class="form-control" id="validateName" placeholder="Name" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <input type="text" class="form-control" id="validateEmail" placeholder="Email" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <input type="text" class="form-control" id="validatePhone" placeholder="Phone" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <input type="text" class="form-control" id="validateAddress" placeholder="Address" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <input type="text" class="form-control" id="validateProduct"
                            placeholder="What is the type your of donated product?" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <textarea class="form-control" rows="3" placeholder="Write product description"
                            required></textarea>
                    </div>
                    <div class="input-control mb-3 mt-4">
                        <input type="submit" class="form-control btn btn-outline-primary" id="submit" />
                    </div>
                </form>
            </div>
        </div>
        <!-- end popup Donate -->

        <!-- start popup Request -->
        <div class="popup2">
            <div class="form-container">
                <div class="close2">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <form method="post" action="" id="addForm">
                    <div class="input-control mb-3">
                        <label for="validateName">Name</label>
                        <input type="text" class="form-control" id="validateName" placeholder="Name" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <label for="validateEmail">Email</label>
                        <input type="text" class="form-control" id="validateEmail" placeholder="Email" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <label for="validatePhone">Phone</label>
                        <input type="text" class="form-control" id="validatePhone" placeholder="Phone" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <label for="validateAddress">Address</label>
                        <input type="text" class="form-control" id="validateAddress" placeholder="Address" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <label for="validateProduct">Product</label>
                        <input type="text" class="form-control" id="validateProduct"
                            placeholder="What is the type your of donated product?" required />
                        <div class="error"></div>
                    </div>
                    <div class="input-control mb-3">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Write product description"
                            required></textarea>
                    </div>
                    <div class="input-control mb-3">
                        <label>Attach proof that you really need</label>
                        <input type="file" class="form-control-file" />
                    </div>
                    <div class="input-control mb-3 mt-4">
                        <input type="submit" class="form-control btn btn-outline-primary" id="submit" />
                    </div>
                </form>
            </div>
        </div>
        <!-- end popup Request -->

        <!-- end donate -->
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
                            <img src="/assets/logoFooter.PNG" alt="" />
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
    </div>
</body>
<!-- <script src="assets/js/popper.min.js"></script> -->
<!-- <script src="assets/js/jquery-3.6.3.min.js"></script> -->
<!-- <script src="assets/js/bootstrap.js"></script> -->
<!-- ....................................... -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/mohammed.js"></script>

</html>