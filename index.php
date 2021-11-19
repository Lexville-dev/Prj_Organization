<?php include "includes/header.php" ?>
<?php

//Define variables for the table, set with no value
$Title = $Name = $Contact_Number = $Email = $Priority = $Content = "";
$Title_err = $Name_err = $Contact_Number_err = $Email_err = $Priority_err = $Content_err = "";

//processing the data after submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //Validation of Title
    $input_title = trim($_POST["Title"]);
    if(empty($input_title)){
        $Title_err = "Please put a title.";
    } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-Za-z0-9-_.\s]+$/")))){
        $Title_err = "Please enter a valid title";
    } else{
        $Title = $input_title;
      }

  //Validation of Name
    $input_name = trim($_POST["Name"]);
    if(empty($input_name)){
        $Name_err = "Please put your name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-Za-z\s]+$/")))){
        $Name_err = "Please enter a valid Name";
    } else{
        $Name = $input_name;
      }

  //Validation of Contact Number
    $input_ConNum = trim($_POST["Contact Number"]);
    if(!ctype_digit($input_ConNum)){
        $Contact_Number_err = "Please enter a valid phone number";
    } else{
        $Contact_Number = $input_ConNum;
      }

  //Validation of Email Address
    $input_email = trim($_POST["Email"]);
    if(empty($input_email)){
        $Email_err = "Please put your Email Address.";
    } elseif(!filter_var($input_email, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+.[A-Za-z]$/")))){
        $Email_err = "Please enter a valid Email Address";
    } else{
        $Email = $input_email;
      }

  //Validation of Priority


  //Validation of Content
    $input_content = trim($_POST["Content"]);
    if(empty($input_content)){
        $Content_err = "Why is your request empty?";
    } else{
        $Content = $input_content;
      }

  // Check input errors before inserting in database
      if(empty($title_err) && empty($name_err) && empty($Contact_Number_err)&& empty($Email_err)&& empty($Content_err)){
    // Prepare an insert statement
            $sql = "INSERT INTO requests (Title, Name, Contact_Number, Email_Address, Priority, Content) VALUES (?, ?, ?, ?, ?, ?)";

            if($stmt = mysqli_prepare($mysqli, $sql)){
      // Bind variables to the prepared statement as parameters
                  mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary, $param_Email_Address, $param_Priority, $param_Content);

      // Set parameters
                  $param_title = $Title;
                  $param_name = $Name;
                  $param_salary = $Contact_Number;
                  $param_Email_Address = $Email_Address;
                  $param_Priority = $Priority;
                  $param_Content = $Content;

      // Attempt to execute the prepared statement
                  if(mysqli_stmt_execute($stmt)){
      // Records created successfully. Redirect to landing page
                      header("location: index.php");
                      exit();
                  } else{
                      echo "Oops! Something went wrong. Please try again later.";
                  }
              }

    // Close statement
            mysqli_stmt_close($stmt);
        }

  // Close connection
      mysqli_close($link);
  }
?>
<header><title>Create</title></header>

<div class="container">
  <h1>Create a Notice</h1>

    <form>
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="form-group">
                <label for="RequestTitle">Request Title</label>
                <input type="text" class="form-control" id="RequestTitle" placeholder="">
              </div>
            </div>

            <div class="col-xs-12 col-sm-6">
              <div class="form-group">
                <label for="SelectPriority">Select Priority</label>
                  <select class="form-select" aria-label=".form-select-sm example">
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
                <input type="text" class="form-control" id="Name" placeholder="" <?php echo (!empty($Name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Name; ?> >
                <?php if(isset($name_err)){ ?>
                  <span class="invalid-feedback">
                    <?php echo $name_err; ?>
                  </span>
                <?php } ?>
              </div> >
            </div>

            <div class="col-xs-12 col-sm-6">
              <div class="form-group">
                <label for="Contact Number">Contact Number</label>
                <input type="text" class="form-control" id="Contact Number" placeholder="01234 12345">
              </div>
            </div>
        </div>

          <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" id="Email" placeholder="example@example.com">
            </div>


            <div class="form-group">
              <label for="Subject">Subject</label>
              <textarea class="form-control" id="Subject" rows="6"></textarea>
            </div>

            <div class="form-group">
              <a href="/Prj_Organization/admin/viewticket.php" class="btn btn-primary"> Submit </a>
            </div>

      </div>
</form>

<?php include "includes/footer.php" ?>
