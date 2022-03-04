<?php include "../includes/header.php"; ?>

<div class="container d-flex justify-content-center">
  <!-- This table logs in -->
  <div class="col 12">
    <h1> Login </h1>
    <form action = "/Prj_Organization/model/request/request-post.php" method = "POST">
      <div class="d-flex justify-content-center">
        <div class="form-group col-md-10">
          <label>Your Username</label>
          <input type="text" class="form-control" id="UserName" placeholder="" name="Name" >
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="form-group col-md-10">
          <label>Password</label>
          <input type="text" class="form-control" id="Password" placeholder="" name="Password" >
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="form-group col-md-10" style="padding-top:10px;">
          <button class="btn btn-primary" type = "submit" name = "Login"> Login </button>
        </div>
      </div>
    </form>
  </div>

<div class="col 12">
  <h1> Registration </h1>
<form action = "/Prj_Organization/model/request/request-post.php" method = "POST">
  <div class="d-flex justify-content-center">
    <div class="form-group col-md-10">
      <label>Your Username</label>
      <input type="text" class="form-control" id="UserName" placeholder="" name="Name" >
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div class="form-group col-md-10">
      <label>Your Email</label>
      <input type="text" class="form-control" id="Email" placeholder="" name="Email" >
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div class="form-group col-md-10">
      <label>Password</label>
      <input type="text" class="form-control" id="Password" placeholder="" name="Password" >
    </div>
  </div>


  <div class="d-flex justify-content-center">
    <div class="form-group col-md-10">
      <label>Repeat Password</label>
      <input type="text" class="form-control" id="RepeatPassword" placeholder="" name="RepeatPassword" >
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div class="form-group col-md-10" style="padding-top:10px;">
      <button class="btn btn-primary" type = "submit" name = "AddUser"> Add User </button>
    </div>
  </div>
</form>
</div>

</div>
<?php include "../includes/footer.php"; ?>
