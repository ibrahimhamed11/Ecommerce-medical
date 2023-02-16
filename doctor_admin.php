<?php
//connect to db 
session_start();
// print_r($_SESSION);
// if (!isset($_SESSION["user"])) {
//    header("Location:login.php");

//    // print_r($_SESSION);

// }

@include 'config.php';
//validation
if (isset($_POST['add_doctor'])) {
   //get data from user
   $doctor_name = $_POST['doctor_name'];
   $doctor_adress = $_POST['adress'];
   $doctor_specialization= $_POST['specialization'];
   $doctor_price = $_POST['examination_price'];
   $doctor_phone = $_POST['doctor_phone'];
   $doctor_email=$_POST['doctor_email'];
   $doctor_description =$_POST['doctor_descrip'];
   $doctor_image = $_FILES['doctor_img']['name'];
   $doctor_image_tmp_name = $_FILES['doctor_img']['tmp_name'];
   $doctor_image_folder = 'upload/' . $doctor_image;
   //validation 
   if (empty($doctor_name) || empty($doctor_price)|| empty($doctor_adress)) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO doctors(doctor_name,doctor_adress,specialization,examination_price,doctor_phone,doctor_email,doctor_descrip,doctor_img)
       VALUES('$doctor_name','$doctor_adress','$doctor_specialization','$doctor_price','$doctor_phone','$doctor_email','$doctor_description', '$doctor_image')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file($doctor_image_tmp_name, $doctor_image_folder);
         $message[] = 'new doctor added successfully';
      } else {
         $message[] = 'could not add the doctor';
      }
   }};
//delete product
if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   //mysql quiry 
   mysqli_query($conn, "DELETE FROM doctors WHERE doctors_id  = $id");
   // return user in same page 
   header('location:doctor_admin.php');
};?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- Bootstrap css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome css file -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Our css file -->
    <link rel="stylesheet" href="css/new.css" />
    <!-- Google Fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet" />
</head>

<body>
    <?php

if (isset($message)) {
   foreach ($message as $message) {
      echo '<span class="message">' . $message . '</span>';
   }
}

?>
    <div class="page d-flex">
        <div id="side" class="sidebar">
            <!-- logo -->
            <div class="logo text-center text-white">
                <a class="logo__icon d-block text-light fw-bold" href="dashboard.html"><i
                        class="fa-solid fa-hand-holding-medical"></i>
                    Re<span>ع</span>aya</a>
                <a class="img__link d-block" href="#"><img class="img-fluid" src="images/admin.png" alt="Admin" /></a>
                <h5 class="mt-2 mb-2 fw-semibold">Dr.Mohammed</h5>
                <h6 class="mb-3">Admin</h6>
            </div>
            <ul>
                <li>
                    <a class="d-flex align-items-center" href="dashboard.html">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="active d-flex align-items-center" href="doctor.html">
                        <i class="fa-solid fa-stethoscope"></i>
                        <span>Doctor</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="pharmacies.html">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        <span>Pharmacies</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="patient.html">
                        <i class="fa-solid fa-user"></i>
                        <span>Patient</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="appointment.html">
                        <i class="fa-regular fa-square-check"></i>
                        <span>Appointment</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="order.html">
                        <i class="fa-regular fa-circle-user fa-fw"></i>
                        <span>Order</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="admin.html">
                        <i class="fa-regular fa-circle-user fa-fw"></i>
                        <span>Admin</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
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
            <div class="popup">
                <div class="form-container">
                    <div class="close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" id="addForm"
                        enctype="multipart/form-data">


                        <div class="input-control mb-3">
                            <input type="file" accept="image/png, image/jpeg, image/jpg" name="doctor_img" class="box">
                            <div class="error"></div>
                        </div>

                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateName" placeholder="Name"
                                name="doctor_name" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateEmail" placeholder="Email"
                                name="doctor_email" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validatePhone" placeholder="Phone"
                                name="doctor_phone" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateSpecialization"
                                placeholder="Doctor Descripition" name="doctor_descrip" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateSpecialization"
                                placeholder="specialization" name="specialization" />
                            <div class="error"></div>
                        </div>
                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateAddress" placeholder="Address"
                                name="adress" />
                            <div class="error"></div>
                        </div>

                        <div class="input-control mb-3">
                            <input type="text" class="form-control" id="validateAddress" placeholder="Examination price"
                                name="examination_price" />
                            <div class="error"></div>
                        </div>

                        <div class="input-control mb-3 mt-4">
                            <input type="submit" class="form-control btn btn-outline-primary" id="submit"
                                name="add_doctor" value="add_doctor" />
                        </div>

                    </form>
                </div>
            </div>
            <!-- end form -->
            <?php

$select = mysqli_query($conn, "SELECT * FROM doctors");
?>
            <!-- start patient table -->
            <div class="patient bg-white">
                <div class="table-header">
                    <h2>DOCTORS LIST</h2>
                    <a href="#" id="add-button">Add doctor</a>
                </div>
                <div class="responsive-table">
                    <table>
                        <thead>
                            <tr>
                                <td>Photo</td>
                                <td>Name</td>
                                <td>Address</td>
                                <td>Specialization</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                            <tr>
                                <td><img src="upload/<?php echo $row['doctor_img']; ?>" height="100" alt=""></td>
                                <td>
                                    <?php echo $row['doctor_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['doctor_adress']; ?>
                                </td>
                                <td>
                                    <?php echo $row['specialization']; ?>
                                </td>
                                <td>
                                    <?php echo $row['doctor_phone']; ?>
                                </td>
                                <td>
                                    <?php echo $row['doctor_email']; ?>
                                </td>

                                <td>
                                    <a href="doctor_admin.php?delete=<?php echo $row['doctors_id']; ?>" class="btn"> <i
                                            class="fas fa-trash"></i>
                                        delete </a>
                                    <a href="doctors_update.php?edit=<?php echo $row['doctors_id']; ?>" class="btn"> <i
                                            class="fas fa-edit"></i>
                                        edit </a>

                                </td>
                            </tr>
                            </tr>

                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>
            <!-- end patiente -->
        </div>
    </div>

</body>
<!-- Bootstrap js file -->
<script src="js/dashboard/bootstrap.bundle.min.js"></script>
<!-- Font Awesome js file -->
<script src="js/dashboard/all.min.js"></script>
<!-- Our js file -->
<script src="js/dashboard/main.js"></script>
<script>
document.querySelector(".close").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none";
});
</script>

</html>