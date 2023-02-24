<?php
// get id of doctor from appointment. 
$docId=$id=$_GET['addbooking'];
// start connection.
$conn = mysqli_connect('localhost', 'root','', 'reaya');//get doctor name from ussers table 
$select= mysqli_query($conn, "SELECT `name` FROM users where id =$docId");
$docname = mysqli_fetch_assoc($select);
$docnn=($docname['name']);



if (isset($_POST['adding'])) {
  //get data from user
$doctor_name =$docnn;
  $patient_name = $_POST['name'];
  $patient_phone = $_POST['phone'];
  $patient_date=$_POST['patient_date'];

  //validation 
  if (empty($doctor_name) ) {
      print_r('please fill out all');
  } else {
      $insert = "INSERT INTO appointment(patientName,patient_phone,doctor_name,status,doctorId,date)
       VALUES ('$patient_name','$patient_phone','$docnn','inprocess','$docId','$patient_date')";
      $upload = mysqli_query($conn,$insert);
      
      if ($upload) {
        $message[]='New Appointment added successfully';
      } else {
        $message[]='Could not add the Appointment';
      }
  }
};
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
<style>
/* Start Form */
.section-two {
    background-image: url(./assets/images/images.png), url(./assets/images/images.png);
    background-repeat: no-repeat;
    background-size: 50px;
    background-position: 18% 4%, 79% 73%;
}

.container .form {
    background-image: url(./assets/images/1db315228240eb2ed1a3432ab564f4f6.png);
    height: 400px;
    object-fit: cover;
    vertical-align: middle;
    background-size: cover;
    background-position: 0% 20%;
    background-repeat: no-repeat;
    /* display: none; */
}

.form {
    width: 40%;
    margin: 0px auto;
    background-color: #f4f6f9;
    padding: 15px;
    box-shadow: 2px 1px 6px 0px #2490eb;
}

.form_butt {
    background-color: #009efb;

}

.message {
    display: block;
    background: var(--bg-color);
    padding: 1.5rem 1rem;
    font-size: 2rem;
    color: var(--black);
    margin-bottom: 2rem;
    text-align: center;
}

/* End Form */
</style>



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



    <!-- Start Form -->
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

    </div>
    <div> <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<span class="message">' . $message . '</span>';
                }
            }
            ?></div>
    <section class="section-two">
        <div class="container mt-5 mb-4">
            <form method="post" enctype="multipart/form-data" class="form" id="form">
                <div class="mb-3">
                    <input type="text" class="form-control mb-4" name="name" placeholder="Enter Your Name"
                        aria-label="product-name" />
                    <input type="number" class="form-control mb-4" name="phone" placeholder="Enter Your Phone"
                        aria-label="Server" />
                    <input type="text" class="form-control mb-4" name="bookdate" placeholder="Enter Your Description"
                        aria-label="Server" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Enter Your Booking Date</label>
                    <input name="patient_date" class="form-control" type="datetime-local" />
                </div>
                <!-- here i add a doctor id which it is hidden -->
                <div>
                    <input type="text" name="status" value="inprocess" hidden>


                    <!-- <input type="text" name="doctor_n" value="<?php $select = mysqli_query($conn, "SELECT * FROM users where id =$docId");
            $row = mysqli_fetch_assoc($select);
            echo $row['name']; ?>">
                    <input type="text" name="doctor_id" value="<?php echo $docId ?>">
                </div> -->
                    <div class="mb-3">
                        <button type="submit" name="adding" id="form_butt" onclick="nonedisplay()"
                            class="btn form_butt mt-5">
                            Submit
                        </button>
                    </div>
            </form>
        </div>
    </section>
    <!-- End Form -->
</body>
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
<!-- Bootstrap js file -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome js file -->
<script src="js/all.min.js"></script>
<!-- Our js file -->

</html>