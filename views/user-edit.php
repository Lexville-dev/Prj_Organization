<?php include "../includes/header.php";

  /*  $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM users WHERE id = $id ") or die($mysqli->error);
*/
    ?>

<div class="container-fluid"> <!-- Print out the current main ticket -->
  <?php// while($row = $result->fetch_assoc()): ?>
    <table class="table">
        <thead>
          <tr>
            <th scope="col-4">Username</th>
            <th scope="col-4">Email address</th>
            <th scope="col-4">Phone Number</th>
            <th scope="col-4">Password</th>
          </tr>
        </thead>

        <tbody>
          <tr>
              <td><?php echo $row['Username'];?></th>
              <td><?php echo $row['Email_Address'];?></th>
              <td><?php echo $row['Phone_Number'];?></th>
              <td><?php echo $row['Password'];?></th>
          </tr>
        </tbody>
    </table>
</div>

<div class="container">
    <form action = "/Prj_Organization/model/request/request-edit.php" method = "POST">

        <div class="row">
          <div class="form-group col-md-6">
            <label for="Name">Your Name</label>
                  <input  type="text" class="form-control" id="RequestTitle"
                          name = "Title" value="<?php echo $row['Title']; ?>" placeholder="">
            </div>
          </div>

        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">    <label for="Name">Name</label>
              <input type="text" class="form-control" id="Name"
                     name="Name" value="<?php echo $row['Name']; ?>" placeholder="">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">    <label for="Contact Number">Contact Number</label>
              <input type="text" class="form-control" id="Contact Number"
                     name = "Contact_Number" value="<?php echo $row['Contact_Number']?>" placeholder="">
            </div>
          </div>
        </div>

        <div class="form-group">    <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email"
                   name = "Email" value="<?php echo $row['Email']?>" placeholder="">
        </div>

        <div class="form-group">    <label for="Subject">Subject</label>
            <textarea rows="6" class="form-control" id="Subject"
                      name = "Content" value ="<?php echo $row['Content']?>" placeholder=""></textarea>
        </div>

          <div class="form-group">
            <button class="btn btn-primary" type = "submit" name = "updateid"> Update </button>
              <input type="hidden" name="updateid" value="<?php echo $row['ID'];?>">
          </div>

    </form>
  <?php// endwhile; ?>
</div>
<?php include "../includes/footer.php"?>
