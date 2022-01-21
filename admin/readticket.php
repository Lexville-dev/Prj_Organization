<?php include "../views/header.php"; ?>
<?php include "../model/request/request-read.php";


        echo '<div class="container">';
          echo '<table class="table">';
              echo "<thead>";
                  echo "<tr>";
                      echo '<th scope="col-4">Note ID</th>';
                      echo '<th scope="col-4">Title</th>';
                      echo '<th scope="col-4">Name</th>';
                      echo '<th scope="col-4">Contact Number</th>';
                      echo '<th scope="col-4">Date/Time</th>';
                      echo '<th scope="col-4">Priority</th>';
                   echo '</tr>';
                 echo '</thead>';


                 echo '<tbody>';

                   echo "<tr>";
                       echo "<td>" . $row["ID"] . "</th>";
                       echo "<td>" . $row["Title"] . "</th>";
                       echo "<td>" . $row["Name"] . "</th>";
                       echo "<td>" . $row["Contact_Number"] . "</th>";
                       echo "<td>" . $row["Date_Time"] . "</th>";
                       echo "<td>" . $row["Priority"] . "</th>";
                     echo '<tr>';
                       echo '<td colspan="5">' .$row["Content"] . "</td>";
echo '</tr>';
                   echo '</tr>';

                echo '</tbody>';





     echo '</table>';
echo '</div>';
