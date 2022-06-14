<?php
$connection = mysqli_connect('localhost', 'root', '', 'Voting_System');
if (!$connection) {
  die("Could not build connection");
}
