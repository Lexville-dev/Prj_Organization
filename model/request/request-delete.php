<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
  include "../includes/db_connection.php";

        // Prepare a delete statement
        $sql = "DELETE FROM request WHERE id = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = trim($_POST["id"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records deleted successfully. Redirect to landing page
                header("location: crud-index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($mysqli);
    } else{
        // Check existence of id parameter
        if(empty(trim($_GET["id"]))){
            // URL doesn't contain id parameter. Redirect to error page
            header("location: error.php");
            exit();
        }
    }

$conn = OpenCon();
