<?php
include "../../includes/db_connection.php";

$conn = OpenCon();

  $sql = "INSERT INTO request (Title, Name, Contact_Number, Priority, Email, Content) VALUES (?, ?, ?, ?, ?, ?)";
      if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("sssiss",$_POST["Title"], $_POST["Name"], $_POST["Contact_Number"], $_POST["Priority"], $_POST["Email"], $_POST["Content"]);
              if($stmt->execute()){
                  header("Location: ../../admin/viewticket.php");
              }
          else{
            echo "Better luck next time, fix your data";
        }
      }
$conn->close();
