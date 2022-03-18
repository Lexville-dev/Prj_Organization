<?php include "../includes/header.php"?>
<style>

</style>

<div class="container d-flex justify-content-center">
  <!-- This table logs in -->
  <div class="login-form">
    <h1> Login </h1>
    <form action = "/Prj_Organization/model/login.php" method = "POST">
      <div class="d-flex justify-content-center">
        <div class="form-group col-md-10">
          <label>Your Username</label>
          <input type="text" class="form-control" id="UserName" placeholder="Your username here" name="Name" >
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="form-group col-md-10">
          <label>Password</label>
          <input type="text" class="form-control" id="Password" placeholder="Your password here" name="Password" >
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="form-group col-md-10" style="padding-top:10px;">
          <button class="btn btn-primary" type = "submit" name = "Login"> Login </button>
        </div>
      </div>
    </form>
  </div>

<?php include "../includes/footer.php"?>
