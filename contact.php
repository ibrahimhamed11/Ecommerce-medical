<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact us</title>
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/contact.css" />
    <!-- دي لينكات google fonts بتاع الخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body>
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
                        <a class="nav-link p-1 p-lg-3" href="doctor.php">DOCTORS</a>
                    </li>
                    <li class="nav-item align-self-center ">
                        <a class="nav-link p-1 p-lg-3" href="#">DOCTOR PROFILE</a>
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
    <div class="header pb-3" id="header">
        <div class="parent">
            <div class="container align-self-center">
                <h1>Contact Us</h1>
                <div class="logo_of_contactUS">
                    <a href="#" class="link_of_contactUS">
                        <i class="fa-solid fa-house"></i>
                        <h3>Home</h3>
                    </a>
                    <h3 class="link_of_contactUS">> Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card__contact pt-5 pb-3">
        <div class="container">
            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
                <div class="col text-center mb-sm-2">
                    <div class="card color__card" style="height: 250px">
                        <div class="card-body">
                            <i class="fa-solid fa-location-dot"></i>
                            <h3 class="card-title">Our Location</h3>
                            <p class="card-text text-black-50">
                                The Queen's Walk, Bishop's, London SE1 7PB, United Kingdom.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col text-center mb-sm-2">
                    <div class="card color__card" style="height: 250px">
                        <div class="card-body">
                            <i class="fa-solid fa-phone"></i>
                            <h3 class="card-title">Our Contact</h3>
                            <p class="card-text text-black-50">+ (567) 1234-567-8900</p>
                            <p class="card-text text-black-50">+ (567) 1234-567-8900</p>
                        </div>
                    </div>
                </div>
                <div class="col text-center mb-sm-2">
                    <div class="card color__card" style="height: 250px">
                        <div class="card-body">
                            <i class="fa-solid fa-envelope"></i>
                            <h3 class="card-title">Mail Us</h3>
                            <p class="card-text text-black-50">info@peacefulthemes.com</p>
                            <p class="card-text text-black-50">info@peacefulthemes.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="form_contactUs">
                    <div class="input_container">
                        <form name="formValidation" id="formValidation">
                            <span>contact us</span>
                            <h1>Get In Touch With Us</h1>
                            <div class="input-row">
                                <input type="text" name="name" placeholder="Enter Your Email" required />
                            </div>
                            <div class="input-row">
                                <input type="email" name="email" placeholder="Enter Your Email" required />
                            </div>
                            <div class="input-row">
                                <input type="number" name="phone" placeholder="Enter Your Phone Number" required />
                            </div>
                            <div class="input-row">
                                <input type="text" name="subject" placeholder="subject" required />
                            </div>
                            <div class="input-row">
                                <textarea placeholder="Message" name="formMessage" required></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="send" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                        <img src="assets/images/logoFooter.PNG" alt="" />
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
                    <p><i class="fa-solid fa-envelope"></i> Info@Peacefulthemes.Com</p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Themeforest, Envato HQ 24
                        Fifthst., Los Angeles, USA
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
    type="text/javascript"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>

</html>