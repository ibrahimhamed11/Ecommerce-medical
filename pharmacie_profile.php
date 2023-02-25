<?php
//connect to db 
session_start();
@include 'componant/config.php';
//validation
$doc=$_SESSION['pharmacie_id'];

if (isset($_POST['add_product'])) {
    //get data from user
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'upload/' . $product_image;
    $doctors_id=$_SESSION['pharmacie_id'];
    //validation 



    if (empty($product_name) || empty($product_price) || empty($product_image)) {
        $message[] = 'please fill out all';
    } else {

     

        $insert = "INSERT INTO products (product_name, product_price,product_description,product_image,user_id ) VALUES('$product_name', '$product_price','$product_description', '$product_image','$doc')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'new product added successfully';
        } else {
            $message[] = 'could not add the product';
        }
    }

}
;
//delete product
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    //mysql quiry 
    mysqli_query($conn, "DELETE FROM products WHERE product_id  = $id");
    // return user in same page 
    header('location:pharmacie_profile.php');
}
; ?>
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
    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/pharmacie-profile.css" />

</head>


<?php
//check session if true continue else transfare to login
if (!isset($_SESSION['pharmacie_id'])) {
    header('location:pharmacie_login.php');
}
?>

<body>
    <div class="pharmaceies-page">
        <!-- start nav -->
        <nav class="navbar navbar-expand-lg navbar-light nav sticky-top p-0">
            <div class="container">
                <div class="col-3 logo">
                    <div class="images">
                        <img src="images/logo.PNG" alt="" />
                        <span>Re<h>ع</h>aya</span>
                    </div>
                </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-7 justify-content-end" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2" href="pharmacies.php">PHARMACEIES</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2" href="doctors.php">DOCTORS</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2" href="contact.php">CONTACT</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2" href="join us.php">JOIN</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2" href="pharmacie_profile.php">PHARMACEIES PROFILE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2 active" href="doctor_profile.php">DOCTORS PROFILE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link p-lg-2" href="user_prodile.php">USER PROFILE</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="btn btn-outline-primary p-lg-2" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end nav -->
    </div>
    <!-- end nav -->
    <!-- start section two -->

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }
    ?>
    <section class="section-one">
        <div class="container">
            <div class="row">
                <div class="description_doctor_profile ">

                    <div class="Description ">
                        <div class="icon">
                            <i class="fa-solid fa-pen"></i>
                        </div>


                        <div class="title_description col-9 ">
                            <h3>Hello Doctor</h3>
                            <h3>

                                <?php
                                require_once('componant/config.php');


                                $query = mysqli_query($conn, "SELECT * FROM users WHERE id=$doc AND role='pharmacie'");
                                $fetch = mysqli_fetch_array($query);

                                echo "<h2 class='text-success'>" . $fetch['name'] . "</h2>";
                                ?>
                            </h3>

                        </div>
                    </div>
                    <div class="Age">
                        <div class="icon">
                            <i class="fa-solid fa-list-ol"></i>
                        </div>
                        <div class="title_age col-9 ">


                            <h3>Tolal your products</h3>
                            <?php


                            require_once('componant/config.php');

                            $doc="$_SESSION[pharmacie_id]";

                            // print_r($doc);

            //                 $query = mysqli_query($conn, "SELECT * FROM `producttb` 
            // ");
                            $query = mysqli_query($conn, "SELECT count(*) as total from products WHERE user_id=$doc");
                            $fetch = mysqli_fetch_array($query);
                            echo "<h2 class='text-success'>" . $fetch['total'] . "</h2>";
                            ?>
                        </div>
                    </div>
                    <div class="Phone">
                        <div class="icon">
                            <i class="fa-solid fa-mobile"></i>
                        </div>
                        <div class="title_phone col-9">
                            <h3>Phone Number</h3>
                            <h3>
                                <?php
                                require_once('componant/config.php');
                                $query = mysqli_query($conn, "SELECT * FROM `users` WHERE id=$doc AND role='pharmacie'");
                                $fetch = mysqli_fetch_array($query);
                                echo "<h2 class='text-success'>" . $fetch['phone'] . "</h2>";
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="Address">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="title_address col-9">
                            <h3>Address</h3>
                            <?php
                            require_once('componant/config.php');
                            $query = mysqli_query($conn, "SELECT * FROM users WHERE id=$doc AND role='pharmacie'");
                            $fetch = mysqli_fetch_array($query);
                            echo "<h2 class='text-success'>" . $fetch['address'] . "</h2>";
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="su" onClick="location.href='add-profile.php'" id="buttons"
                            class="btn form_butt mt-5">Add
                            Product</button>
                    </div>

                    <!-- <input type="submit" value="update product" name="Add Product" class="btn"> -->



                </div>

            </div>
        </div>
    </section>
    <!-- end section two -->

    <!-- Start Form -->
    <section class="section-two">
        <div class="container mt-5 mb-4">

            <form class="form" id="form">
                <div class="mb-3">
                    <input type="text" class="form-control mb-4" name="product_name" placeholder="Enter Product Name"
                        aria-label="product-name">
                    <input type="text" class="form-control mb-4" name="product_price" placeholder="Enter Product Price"
                        aria-label="Server">
                    <input type="text" class="form-control mb-4" name="product_description"
                        placeholder="Enter Product Description" aria-label="Server">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label"></label>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">

                    <div class="">
                        <input type="submit" class="addbtn" name="add_product" value="add product">
                        <a href="add-profile.php" class="btn">Add Product</a>

                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- End Form -->
    <?php
    $select = mysqli_query($conn, "SELECT * FROM products where user_id=$doc");
    ?>
    <!-- Start Table -->
    <div class=" section-trhee">
        <div class="container mt-5 mb-4">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($select)) { ?>

                        <tr>
                            <td><img src="upload/<?php echo $row['product_image']; ?>" height="100" width="100" alt="">
                            </td>
                            <td>
                                <?php echo $row['product_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['product_price']; ?>
                            </td>
                            <td>
                                <?php echo $row['product_description']; ?>
                            </td>

                            <td>
                                <a href="products_update.php?edit=<?php echo $row['product_id']; ?>" class="btn"> <i
                                        class="fas fa-edit"></i>
                                    edit </a>
                                <a href="pharmacie_profile.php?delete=<?php echo $row['product_id']; ?>" class="btn"> <i
                                        class="fas fa-trash"></i>
                                    delete </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Table -->

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
                        <img src="images/logoFooter.PNG" alt="" />
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
<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
function display() {
    var display = document.getElementById("form");
    display.style.display = "block";
}

function nonedisplay() {
    var x = document.getElementById("form");
    x.style.display = "none";
}
</script>

</html>