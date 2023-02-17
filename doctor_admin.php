<?php
//connect to db 
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


<?php
@include 'dashboard-header.php';
?>

<body>
    <?php
if (isset($message)) {
foreach ($message as $message) {
echo '<span class="message">' . $message . '</span>';
}
}
?>
    <?php
    @include 'dashboard-body.php';
    ?>


    <!-- start form -->
    <div class="popup">
        <div class="form-container">
            <div class="close">
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" id="addForm" enctype="multipart/form-data">


                <div class="input-control mb-3">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="doctor_img" class="box">
                    <div class="error"></div>
                </div>

                <div class="input-control mb-3">
                    <input type="text" class="form-control" id="validateName" placeholder="Name" name="doctor_name" />
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
                    <input type="text" class="form-control" id="validateSpecialization" placeholder="specialization"
                        name="specialization" />
                    <div class="error"></div>
                </div>
                <div class="input-control mb-3">
                    <input type="text" class="form-control" id="validateAddress" placeholder="Address" name="adress" />
                    <div class="error"></div>
                </div>

                <div class="input-control mb-3">
                    <input type="text" class="form-control" id="validateAddress" placeholder="Examination price"
                        name="examination_price" />
                    <div class="error"></div>
                </div>

                <div class="input-control mb-3 mt-4">
                    <input type="submit" class="form-control btn btn-outline-primary" id="submit" name="add_doctor"
                        value="add_doctor" />
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