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

if (isset($_POST['add_product'])) {
   //get data from user
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_description = $_POST['product_description'];


   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'upload/' . $product_image;

   //validation 


   if (empty($product_name) || empty($product_price) || empty($product_image)) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO producttb(product_name, product_price,product_description,product_image) VALUES('$product_name', '$product_price','$product_description', '$product_image')";
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
   mysqli_query($conn, "DELETE FROM producttb WHERE id = $id");
   // return user in same page 
   header('location:admin_page.php');
}
;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
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


        <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
        </li>


        <div class="admin-product-form-container">

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h3>add a new product</h3>
                <input type="text" placeholder="enter product name" name="product_name" class="box">
                <input type="number" placeholder="enter product price" name="product_price" class="box">

                <input type="text" placeholder="enter product description" name="product_description" class="box">
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                <input type="submit" class="btn" name="add_product" value="add product">
            </form>

        </div>

        <?php

      $select = mysqli_query($conn, "SELECT * FROM producttb");

      ?>
        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>product image</th>
                        <th>product name</th>
                        <th>product price</th>
                        <th>product description</th>
                        <th>action</th>
                    </tr>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                <tr>
                    <td><img src="upload/<?php echo $row['product_image']; ?>" height="100" alt=""></td>
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
                        <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i
                                class="fas fa-edit"></i>
                            edit </a>
                        <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i
                                class="fas fa-trash"></i>
                            delete </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>


</body>

</html>