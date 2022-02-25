<?php include "../views/header.php";

    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM request WHERE id = $id ") or die($mysqli->error);

    ?>

<div class="container-fluid"> <!-- Print out the current main ticket -->
  <?php while($row = $result->fetch_assoc()): ?>
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
          </tr>
        </tbody>
    </table>
</div>

<div class="container">
    <form action = "/Prj_Organization/model/request/request-edit.php" method = "POST">

        <div class="row">
          <div class="col-xs-12 col-sm-10">
            <div class="form-group">    <label for="RequestTitle">Request Title</label>
                  <input  type="text" class="form-control" id="RequestTitle"
                          name = "Title" value="<?php echo $row['Title']; ?>" placeholder="">
            </div>
          </div>
          <div class="col-xs-12 col-sm-2">
            <div class="form-group">    <label for="SelectPriority">Select Priority</label>
                <select class="form-select" aria-label=".form-select-sm example" name = "Priority">
                      <option value="1">Note</option>
                      <option value="2">Low</option>
                      <option value="3" selected>Medium</option>
                      <option value="4">High</option>
                      <option value="5">Urgent</option>
                </select>
            </div>
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
  <?php endwhile; ?>
</div>
<?php include "../views/footer.php"?>
