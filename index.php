<?php
if (isset($_POST['name'])) {
  include "save-data.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>
  <div class="container">
    <div class="title">
      <div class="flex">
        <h2 class="nav-active mr-1">Register Vote</h2>
        <h2><a href="table.php" class="nav-inactive">View Votes</a></h2>
      </div>
      <div class="caption">Enter your data and click submit.</div>
    </div>
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label> Full Name</label>
        <input type="text" name="name" placeholder="Enter Name">
      </div>

      <div class="form-group">
        <label> Address</label>
        <input type="text" name="address" placeholder="House#1, St#2, Block 3...">
      </div>

      <div class="form-group">
        <label>ID Card</label>
        <input type="text" name="id" placeholder="12345-6789123-4" maxlength="15">
      </div>

      <div class="form-group">
        <label>Image</label>
        <input name="image" type="file" />
      </div>

      <div class="form-group">
        <label>Gender</label>
        <div class="flex">
          <input class="m-1" type="radio" name="gender" value="male" checked>
          <label>Male</label>
          <input class="m-1" type="radio" name="gender" value="female">
          <label>Female</label>
        </div>
      </div>
      <?php
      if (isset($success) && $success) {
        echo "<div class='alert-box text-success'>Data saved successfully!</div>";
      } else if (isset($error)) {
        echo "<div class='alert-box text-error'>$error</div>";
      }
      ?>
      <div class="footer flex">
        <button>Submit</button>
      </div>
    </form>
  </div>
</body>