<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>
  <div class="container">
    <div class="title">
      <div class="flex">
        <h2 class="mr-1"><a href="index.php" class="nav-inactive">Register Vote</a></h2>
        <h2 class="nav-active">View Votes</h2>
      </div>
      <div class="caption">This table shows all the votes.</div>

      <table cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Image</th>
            <th>Actions</th>
            <th>Total Votes</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "connect.php";
          $q = "select * from vote";
          $res = mysqli_query($connection, $q);
          while ($r = $res->fetch_assoc()) {
            $id = $r['id'];
            $name = $r['name'];
            $address = $r['address'];
            $img = $r['image'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
            echo "<td>$address</td>";
            echo "<td>
                    <img width='32' height='32' src='images/$img'/>
                  </td>";
            echo "<td>
                    <a href='edit.php?id=$id&name=$name&address=$address'>
                      <button class='button-outline' style='color: blue; border-color: blue;'>Edit</button>
                    </a>
                    <a href='delete.php?id=$id'>
                      <button class='button-outline' style='color: red; border-color: red;'>Delete</button>
                    </a>
                  </td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>