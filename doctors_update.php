<?php
//sql connection
// @include 'config.php';
require_once("config.php");
// get data from 
$id = $_GET['edit'];
if (isset($_POST['update_doctor'])) {
   $doctor_name = $_POST['doctor_name'];
   $doctor_adress = $_POST['doctor_adress'];
   $doctor_adress = $_POST['doctor_phone'];
   $doctor_price = $_POST['examination_price'];
   $doctor_description = $_POST['doctor_descrip'];
   $doctor_image = $_FILES['doctor_img']['name'];
   $doctor_image_tmp_name = $_FILES['doctor_img	']['tmp_name'];
   $doctor_image_folder = 'upload/' . $doctor_image;

   //validation
   if (empty($doctor_name) || empty($doctor_price) || empty($doctor_image)|| empty($doctor_adress)) {
      $message[] = 'please fill out all';
   } else {

      $update_data = "UPDATE doctors SET doctor_name='$doctor_name','adress=$doctor_adress', product_price='$doctor_price', doctor_img='$doctor_image'  WHERE id = '$id'";
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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<span class="message">' . $message . '</span>';
      }
   }
   ?>

    <div class="container">


        <div class="admin-product-form-container centered">

            <?php

         $select = mysqli_query($conn, "SELECT * FROM doctors WHERE doctors_id  = '$id'");
         while ($row = mysqli_fetch_assoc($select)) {

            ?>

            <form action="" method="post" enctype="multipart/form-data">
                <h3 class="title">update the doctor</h3>
                <input type="text" class="box" name="doctor_name" value="<?php echo $row['doctor_name']; ?>"
                    placeholder="enter the doctor name">
                <input type="number" min="0" class="box" name="examination_price"
                    value="<?php echo $row['examination_price']; ?>" placeholder="enter the examination price">

                <input type="text" class="box" name="doctor_adress" value="<?php echo $row['doctor_adress']; ?>"
                    placeholder="enter the new adress">


                <input type="text" class="box" name="doctor_descrip" value="<?php echo $row['doctor_descrip']; ?>"
                    placeholder="enter the new description">



                <input type="file" class="box" name="doctor_image" accept="image/png, image/jpeg, image/jpg">
                <input type="submit" value="update doctor" name="update_doctor" class="btn">
                <a href="doctor_admin.php" class="btn">go back!</a>
            </form>
            <?php }
         ; ?>


        </div>

    </div>

</body>

</html>