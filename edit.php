<?php
$id = $_GET['id'];
$name = $_GET['name'];
$address = $_GET['address'];
?>

<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>
  <div class="container">
    <div class="title">
      <h2>Update Vote</h2>
      <div class="caption">Enter your data and click submit.</div>
    </div>
    <form method="POST" action="edit-data.php">
      <div class="form-group">
        <label>Your ID</label>
        <input type="text" placeholder="12345-6789123-4" maxlength="15" value="<?php echo $id ?>" disabled>
        <input hidden name="id" value="<?php echo $id ?>" />
      </div>

      <div class="form-group">
        <label> Full Name</label>
        <input required type="text" name="name" placeholder="Zara Khan" value="<?php echo $name ?>">
      </div>

      <div class="form-group">
        <label> Address</label>
        <input required type="text" name="address" placeholder="House#1, St#2, Block 3..." value="<?php echo $address ?>">
      </div>
      <div class="footer flex">
        <button>Update</button>
      </div>
    </form>
  </div>
</body>