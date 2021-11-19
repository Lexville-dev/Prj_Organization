<?php include "../includes/header.php"?>
<style>
table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 6px;
            text-align:center;

        }

        table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                    padding: 6px;
                    text-align:center;
                }
</style>

<?php
// Attempt select query execution
    $sql = "SELECT * FROM requests";
    if($result = mysqli_query($mysqli, $sql)){
    if(mysqli_num_rows($result) > 0){

  echo '<div class="container">';
          echo "<thead>";
              echo "<tr>";
                echo '<table class="table">';
                  echo '<th scope="col-4">Note ID</th>';
                  echo '<th scope="col-4">Title</th>';
                  echo '<th scope="col-4">Name</th>';
                  echo '<th scope="col-4">Contact Number</th>';
                  echo '<th scope="col-4">Date/Time</th>';
                  echo '<th scope="col-4">Priority</th>';
               echo '</tr>';
             echo '</thead>';

             echo '<tbody>';
             while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row["ID"] . "</th>";
                   echo "<td>" . $row["Title"] . "</th>";
                   echo "<td>" . $row["Name"] . "</th>";
                   echo "<td>" . $row["Contact Number"] . "</th>";
                   echo "<td>" . $row["Date/Time"] . "</th>";
                   echo "<td>" . $row["Priority"] . "</th>";
                 echo '<tr>';
                   echo '<td colspan="6">' .$row["Content"] . "</td>";
                 echo '</tr>';
               echo '</tr>';
             }
            echo '</tbody>';
           echo '</table>';
           // Free result set
                          mysqli_free_result($result);
                      } else{
                          echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                      }
                  } else{
                      echo "Oops! Something went wrong. Please try again later.";
                  }

                  // Close connection
                  mysqli_close($mysqli);
                  ?>
   </div>

<?php include "../includes/footer.php" ?>
