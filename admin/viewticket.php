<?php include "../views/header.php";

$result = $mysqli->query("SELECT * FROM request") or die($mysqli->error);
?>

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
        $current_id = 'id-' . $row['ID'];
        $content = $row['Content'];

        if (strlen($content) > 200){                         //if the string in the $content row then
          $content = substr($row['Content'], 0, 256) . "..."; //show the first 256 charecters of Content
        } else {
          $content = $content;                                //otherwise just display the content as content
        }

        ?>
        <tr>
                <td class="col-1"><button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#<?=$current_id?>" aria-expanded="true" aria-controls="<?=$current_id?>">
                  <?php echo $row['ID'];?>    </button> </td>
                <td class="col-4"><?php echo $row['Title'];?>         </td>
                <td class="col-2"><?php echo $row['Name'];?>          </td>
                <td class="col-2"><?php echo $row['Contact_Number'];?></td>
                <td class="col-2"><?php echo $row['Date_Time'];?>     </td>
                <td class="col-1"><?php echo $row['Priority'];?>      </td>

        <tr class="collapse" id="<?=$current_id?>">
                <td colspan="5"><p><?php echo $content ?></p></td>

                <td class="justify-content-center" colspan="1">
                      <a href="editticket.php?edit=<?php echo $row['ID'];?>"
                          class="btn btn-primary" >         <span class="fa fa-pencil">  </span> </a>
                      <a href="deleteticket.php?delete=<?php echo $row['ID'];?>"
                          class="btn btn-danger" >          <span class="fa fa-trash">   </span> </a>
                        </td>
                  </tr>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
<?php include "../views/footer.php" ?>
