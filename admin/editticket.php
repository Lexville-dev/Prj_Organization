<?php include "../views/header.php"; ?>
<?php include "../model/request/request-edit.php" ?>


<div class="container">

  <form action = "/Prj_Organization/model/request/request-post.php" method = "POST">
        <div class="row">
          <div class="col-xs-12 col-sm-10">
            <div class="form-group">
              <label for="RequestTitle">Request Title</label>
              <input type="text" class="form-control" id="RequestTitle" placeholder="" name = "Title" >
            </div>
          </div>

          <div class="col-xs-12 col-sm-2">
            <div class="form-group">
              <label for="SelectPriority">Select Priority</label>
                <select class="form-select" aria-label=".form-select-sm example" name = "Priority" >
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
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
            </div>
          </div>

          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="Contact Number">Contact Number</label>
              <input type="text" class="form-control" id="Contact Number" placeholder="01234 12345" name = "Contact_Number" >
            </div>
          </div>
      </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="example@example.com"  name = "Email" >
          </div>


          <div class="form-group">
            <label for="Subject">Subject</label>
            <textarea class="form-control" id="Subject" rows="6"  name = "Content" ></textarea>
          </div>

          <div class="form-group">
            <button class="btn btn-primary" type = "submit"> Submit </button>
          </div>
  </form>
    </div>

</div>
<?php include "../views/footer.php"?>
