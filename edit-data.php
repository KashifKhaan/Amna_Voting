<?php
include("connect.php");
$name = $_POST['name'];
$address = $_POST['address'];
$id = $_POST['id'];

echo $name;
echo $address;
echo $id;

if ($name == '' || $address == '' || $id == '') {
  die("A field was left empty!");
}

$q = "UPDATE `vote` set name = '$name', address = '$address' where id = '$id';";

$res = mysqli_query($connection, $q);
if ($res) {
  header('Location: table.php');
} else {
  die("Data submission failed!");
}
