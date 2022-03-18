<?php include "../includes/header.php";
    $id = $_SESSION['id'];
    $result = $mysqli->query("SELECT * FROM users WHERE user_id = $id ") or die($mysqli->error);
?>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col-4">Name</th>
          </tr>
        </thead>
    <?php while($row = $result->fetch_assoc()): ?>
        <tbody>
          <tr>
              <td><?php echo $row['Name'];?></td>
              <td></td>
            <tr>
              <td colspan="6"></td>
            </tr>
          </tr>
        </tbody>
    </table>
</div>

<div class="container">
  <form action = "/Prj_Organization/model/request/request-edit.php" method = "POST">
    <div class="row">
      <div class="col-10">
        <div class="form-group">    <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name"
                   name="Name" value="<?php echo $row['Name']; ?>" placeholder="">
        </div>
      </div>

      <div class="col-xs-12 col-sm-2">
        <div class="form-check">    <label for="Administrator" class="form-check-label"> Administrator? </label>
                <input class="form-check-input" type="checkbox" id="Admin"
                       name="Admin" value="1" >
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="form-group">    <label for="Phone Number">Contact Number</label>
          <input type="text" class="form-control" id="Phone Number"
                 name = "Phone_Number" value="<?php echo $row['Phone_Number']?>" placeholder="">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">    <label for="Email">Email</label>
          <input type="email" class="form-control" id="Email"
                 name = "Email" value="<?php echo $row['Email']?>" placeholder="">
        </div>
      </div>
    </div>

    <div class="form-group">
      <button class="btn btn-primary" type = "submit" name = "updateuser"> Update </button>
      <input type="hidden" name="updateuser" value="<?php echo $row['user_id'];?>">
    </div>

  </form>
  <?php endwhile; ?>
</div>

<?php include "../includes/footer.php"?>
