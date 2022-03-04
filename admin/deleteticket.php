<?php include "../includes/header.php";

$id = $_GET['delete'];
$result = $mysqli->query("SELECT * FROM request WHERE id = $id ")->fetch_assoc() or die($mysqli->error);

?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h2 class="mt-5 mb-3">Delete Record</h2>
          <form action="../model/request/request-delete.php" method="POST">
              <div class="alert alert-danger">
              <p>Are you sure you want to delete this record?</p>
              <button type="submit" class="btn btn-danger"> delete </button>
                  <input type="hidden" name="delete" value="<?php echo $result['ID']?>"/>
              </div>
          </form>
    </div>
  </div>
</div>

<?php $id = $_GET['delete'];
$result = $mysqli->query("SELECT * FROM request WHERE id = $id ") or die($mysqli->error);?>

<div class="container-fluid">
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

<?php include "../includes/footer.php" ?>
