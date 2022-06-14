<?php
include("connect.php");
$name = $_POST['name'];
$address = $_POST['address'];
$id = $_POST['id'];
$image = $_FILES['image'];
$image_name = $_FILES['image']['name'];
$image_type = $_FILES['image']['type'];
$image_size = $_FILES['image']['size'];
$image_tmp = $_FILES['image']['tmp_name'];

if ($name == '' || $address == '' || $id == '') {
  $error = "A field was left empty!";
  exit();
}

if ($image_type == "image/jpeg" || $image_type == "image/png") {
  if ($image_size <= 5000000) {
    move_uploaded_file($image_tmp, "images/$image_name");
  } else {
    $error = "Image too large!";
    exit();
  }
} else {
  $error = "Invalid image type!";
  exit();
}

$q = "INSERT INTO `vote`(id, name, address, image) values ('$id', '$name', '$address', '$image_name')";

$res = mysqli_query($connection, $q);
if ($res) {
  $success = true;
} else {
  $error = "Data submission failed!";
}
