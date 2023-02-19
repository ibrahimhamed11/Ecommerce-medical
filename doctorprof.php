<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie Profile</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/pharmacie-profile.css" />
    <!-- <link rel="stylesheet" href="css/pharmacie.css"> -->

    <link rel="stylesheet" href="css/Doctor-profile.css" />

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
                        <a class="nav-link p-1 p-lg-3 active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link p-1 p-lg-3" href="pharmacies.php">PHARMACEIES</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link p-1 p-lg-3" href="doctor.php">DOCTORS</a>
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
    <!-- start section one -->
    <div class="parent">
        <div class="Doctor_profile">
            <div class="img__doctor_profile">
                <h1>A</h1>
            </div>
            <h3>Ahmed</h3>
            <h4>Dentistry</h4>
            <h6>Lorem, ipsum.</h6>
        </div>
    </div>
    <!-- end section one -->
    <!-- start section two -->
    <div class="description_doctor_profile">
        <div class="Description ">
            <div class="icon">
                <i class="fa-solid fa-pen"></i>
            </div>
            <div class="title_description col-9 ">
                <h3>Description</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="Age">
            <div class="icon">
                <i class="fa-solid fa-cake-candles"></i>
            </div>
            <div class="title_age col-9 ">
                <h3>Age</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="Phone">
            <div class="icon">
                <i class="fa-solid fa-mobile"></i>
            </div>
            <div class="title_phone col-9">
                <h3>Phone Number</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="Address">
            <div class="icon">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="title_address col-9">
                <h3>Address</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
    <!-- end section two -->
    <!-- start section three -->
    <div class="table-doctor-profile">
        <!-- <div class="container">
            <div class="row"> -->
        <div class="table table-bordered table-color ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">i</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Date Time</th>
                        <th scope="col">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ahmed</td>
                        <td>Dentistry</td>
                        <td>Date</td>
                        <td>status</td>
                        <td><input type="button" value="Done" name="Action" class="input1">
                            <input type="button" value="Denied" name="Action" class="input2">
                            <input type="button" value="In progress" name="Action" class="input3">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>mohamed</td>
                        <td>Dentistry</td>
                        <td>Date</td>
                        <td>status</td>
                        <td><input type="button" value="Done" name="Action" class="input1">
                            <input type="button" value="Denied" name="Action" class="input2">
                            <input type="button" value="In progress" name="Action" class="input3">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Ali</td>
                        <td>Dentistry</td>
                        <td>Date</td>
                        <td>status</td>
                        <td><input type="button" value="Done" name="Action" class="input1">
                            <input type="button" value="Denied" name="Action" class="input2">
                            <input type="button" value="In progress" name="Action" class="input3">
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- </div>
            </div>
        </div>  -->

        </div>
        <!-- end section three -->

        <!-- start footer -->
        <footer class="section_end text-center text-lg-start pt-2 mt-5">
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





        <script src="all.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>