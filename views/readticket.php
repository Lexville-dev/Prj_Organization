<?php include "../views/header.php";
require_once "../includes/functions.php";

$id = $_GET['read'];
$result = $mysqli->query("SELECT * FROM request WHERE id = $id ") or die($mysqli->error);

?>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col-4">Note ID</th>
            <th scope="col-4">Title</th>
            <th scope="col-4">Name</th>
            <th scope="col-4">Contact Number</th>
            <th scope="col-4">Date/Time</th>
            <th scope="col-4">Priority</th>
          </tr>
        </thead>

          <?php while($row = $result->fetch_assoc()): ?>

        <tbody>
          <tr>
              <td><?php echo $row['ID'];?></th>
              <td><?php echo $row['Title'];?></th>
              <td><?php echo $row['Name'];?></th>
              <td><?php echo $row['Contact_Number'];?></th>
              <td><?php echo $row['Date_Time'];?></th>
              <td><?php echo $row['Priority'];?></th>
            <tr>
              <td colspan="6"><?php echo $row['Content'];?></td>
            </tr>
          </tr> <?php endwhile; ?>
        </tbody>
    </table>
</div>
