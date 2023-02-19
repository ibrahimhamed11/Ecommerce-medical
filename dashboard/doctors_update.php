<?php
//sql connection
// @include 'config.php';
require_once("../componant/config.php");
// get data from 
$id = $_GET['edit'];
if (isset($_POST['update_doctor'])) {
$doctor_name = $_POST['doctor_name'];
$doctor_adress = $_POST['doctor_adress'];
$doctor_phone = $_POST['doctor_phone'];
$examination_price = $_POST['examination_price'];
$doctor_descrip = $_POST['doctor_descrip'];
$examination_price=$_POST['examination_price'];
$doctor_img = $_FILES['doctor_img']['name'];
$doctor_image_tmp_name = $_FILES['doctor_img']['tmp_name'];
$doctor_image_folder = 'upload/' . $doctor_img;

//validation
if (empty($doctor_name) || empty($examination_price)) {
    $message[] = 'please fill out all!';
 } else {
    $update_data = "UPDATE doctors SET doctor_name='$doctor_name', examination_price='$examination_price', doctor_img='$doctor_img', doctor_adress='$doctor_adress',examination_price='$examination_price'  WHERE doctors_id = '$id'";
    $upload = mysqli_query($conn, $update_data);
    if ($upload) {
       move_uploaded_file($doctor_image_tmp_name, $doctor_image_folder);
       header('location:doctor_admin.php');
    } else {
       $$message[] = 'please fill out all!';
    }
 }
}
;

?>


<!DOCTYPE html>
<html lang="en">

<?php
@include '../componant/dashboard-header.php';
?>

<body>

    <div class="page d-flex">
        <div id="side" class="sidebar">
            <!-- logo -->
            <div class="logo text-center text-white">
                <a class="logo__icon d-block text-light fw-bold" href="home.php"><i
                        class="fa-solid fa-hand-holding-medical"></i>
                    Re<span>ع</span>aya</a>
                <a class="img__link d-block" href="#"><img class="img-fluid" src="/images/admin.png" alt="Admin" /></a>
                <h5 class="mt-2 mb-2 fw-semibold">Admin</h5>
                <h6 class="mb-3">Admin</h6>
            </div>
            <ul>
                <li>
                    <a class="d-flex align-items-center" href="home.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="active  d-flex align-items-center" href="doctors.php">
                        <i class="fa-solid fa-stethoscope"></i>
                        <span>Doctor</span>
                    </a>
                </li>
                <li>
                    <a class=" d-flex align-items-center" href="products.php">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li>
                    <a class=" d-flex align-items-center" href="pharmacies.php">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        <span>Pharmacies Users</span>
                    </a>
                </li>

                <li>
                    <a class="d-flex align-items-center" href="patient.php">
                        <i class="fa-solid fa-user"></i>
                        <span>Patient</span>
                    </a>
                </li>
                <li>
                    <a class=" d-flex align-items-center" href="appointment.php">
                        <i class="fa-regular fa-square-check"></i>
                        <span>Appointment</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="order.php">
                        <i class="fa-regular fa-circle-user fa-fw"></i>
                        <span>Order</span>
                    </a>
                </li>
                <li>
                    <a class="  d-flex align-items-center" href="admin.php">
                        <i class="fa-regular fa-circle-user fa-fw"></i>
                        <span>Admin</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            <?php
if (isset($message)) {
foreach ($message as $message) {
echo '<span class="message">' . $message . '</span>';
}
}
?>
            <!-- start head -->
            <div class="head">
                <div onclick="hide()" class="menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="icon d-flex align-items-center">
                    <img src="images/admin.png" alt="" />
                </div>
            </div>
            <!-- end head -->
            <!-- start form -->
            <div class="popedit" id="pop">
                <div class="form-container">

                    <?php
$select = mysqli_query($conn, "SELECT * FROM doctors WHERE doctors_id  = '$id'");
while ($row = mysqli_fetch_assoc($select)) {
?>
                    <form method="post" id="addForm" enctype="multipart/form-data">
                        <div class="input-control mb-3">
                            <input type="file" class="box" name="doctor_img" accept="image/png, image/jpeg, image/jpg">
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateName" name="doctor_name"
                                value="<?php echo $row['doctor_name']; ?>" />
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateEmail" placeholder="Email"
                                name="doctor_email" value="<?php echo $row['doctor_email']; ?>" />
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validatePhone" placeholder="Phone"
                                name="doctor_phone" value="<?php echo $row['doctor_phone']; ?>" />
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateSpecialization"
                                placeholder="Doctor Descripition" name="doctor_descrip"
                                value="<?php echo $row['doctor_descrip']; ?>" />
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateSpecialization"
                                placeholder="specialization" value="<?php echo $row['specialization']; ?>" />
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateAddress" placeholder="Address"
                                name="doctor_adress" value="<?php echo $row['doctor_adress']; ?>" />
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateAddress" placeholder="Examination price"
                                name="examination_price" value="<?php echo $row['examination_price']; ?>" />
                            <!-- <div class="error"></div> -->
                        </div>
                        <div class="input-control mb-3 mt-4">
                            <input type="submit" class="form-control btn btn-outline-primary" id="submit"
                                name="update_doctor" value="update doctor" />
                        </div>
                        <div class="input-control mb-3 mt-4">
                            <a href="doctor_admin.php"> <input type="submit!"
                                    class="form-control btn btn-outline-primary" id="submit" value="go back!" /></a>
                        </div>
                    </form>
                    <?php }
         ; ?>
                </div>
                <!------------------------------------------------------------------------------------------->

            </div>
            <!-- end form -->

            <!-- start patient table -->

            <!-- end patiente -->
        </div>
    </div>

</body>
<!-- Bootstrap js file -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome js file -->
<script src="../js/all.min.js"></script>
<!-- Our js file -->
<script src="../js/main.js"></script>

</html>