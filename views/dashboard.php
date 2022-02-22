<?php include "header.php";
      require_once "../includes/functions.php";

$result = $mysqli->query("SELECT * FROM request") or die($mysqli->error);?>

<div class="container">
  <table class="table table-striped">
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
      <?php while($row = $result->fetch_assoc()):
        $current_id = 'id-' . $row['ID'];?>
        <tr>
                <td><button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#<?=$current_id?>" aria-expanded="false" aria-controls="<?=$current_id?>">
                  <?php echo $row['ID'];?>    </button> </td>
                <td><?php echo $row['Title'];?>         </td>
                <td><?php echo $row['Name'];?>          </td>
                <td><?php echo $row['Contact_Number'];?></td>
                <td><?php echo $row['Date_Time'];?>     </td>
                <td><?php echo $row['Priority'];?>      </td>

        <tr class="collapse" id="<?=$current_id?>">
                <td colspan="5"><p><?php echo $row['Content'];?></p></td>
                <td class="justify-content-center" colspan="1">
                      <a class="btn btn-primary" href="readticket.php?read=<?php echo $row['ID'];?>">
                          <span class="fa fa-eye"></span></a>
                </td>
          </tr>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<?php include "footer.php"; ?>
