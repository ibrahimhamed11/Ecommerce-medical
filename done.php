<?php
$conn = mysqli_connect("localhost", "root", "", "reaya");

if (!$conn) {
  echo mysqli_connect_error();
  exit;
}
$id = $_GET['edit'];
$update_data = "UPDATE appointment SET status = 'Done'  WHERE appointmentId = '$id'";
mysqli_query($conn, $update_data);
header("Location: doctor_profile.php");