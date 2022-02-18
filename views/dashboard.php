<?php include "header.php";
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
                <td>
                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <?php echo $row['ID'];?>
                </button></td>
                <td><?php echo $row['Title'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Contact_Number'];?></td>
                <td><?php echo $row['Date_Time'];?></td>
                <td><?php echo $row['Priority'];?></d>
          <tr>
                <td colspan="5"><?php echo $row['Content'];?></td>
                <td class="justify-content-center" colspan="1">
                      <a class="btn btn-primary" href="readticket.php?read=<?php echo $row['ID'];?>">
                          <span class="fa fa-eye"></span></a>
                  <!--<a class="btn btn-primary" href="editticket.php?id=<?php echo $row['ID'];?>">
                          <span class="fa fa-pencil"></span>  </a> -->
                </td>
          </tr>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<?php include "footer.php"; ?>
