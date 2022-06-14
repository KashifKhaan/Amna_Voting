<?php
include 'connect.php';

$id = $_GET['id'];

$q = "delete from vote where id = '$id'";

$res = mysqli_query($connection, $q);

header('Location: table.php');
