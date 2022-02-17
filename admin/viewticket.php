<?php include "../views/header.php";
      require_once "../includes/functions.php";

$result = $mysqli->query("SELECT * FROM request") or die($mysqli->error);?>

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
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
                <td><?php echo $row['ID'];?></th>
                <td><?php echo $row['Title'];?></th>
                <td><?php echo $row['Name'];?></th>
                <td><?php echo $row['Contact_Number'];?></th>
                <td><?php echo $row['Date_Time'];?></th>
                <td><?php echo $row['Priority'];?></th>
              <tr>
                <td colspan="5"><?php echo $row['Content'];?></td>

                <td colspan="1">
                      <a href="editticket.php?edit=<?php echo $row['ID'];?>"
                          class="btn btn-primary" >         <span class="fa fa-pencil">  </span> </a>
                      <a href="deleteticket.php?delete=<?php echo $row['ID'];?>"
                          class="btn btn-danger" >          <span class="fa fa-trash">   </span> </a>
                </td>
              </tr>
          </tr><?php endwhile; ?>
      </tbody>
  </table>
</div>

   <div class="form-group">
   </div>
<?php include "../views/footer.php" ?>
