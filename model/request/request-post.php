<?php
include "../../includes/db_connection.php";

if (isset($_POST['submit'])){
      $Title = $_POST['Title'];
      $Priority = $_POST['Priority'];
      $Name = $_POST['Name'];
      $Contact_Number = $_POST['Contact_Number'];
      $Email = $_POST['Email'];
      $Content = $_POST['Content'];

      $mysqli->query("INSERT INTO request (Title, Priority, Name, Contact_Number, Email, Content) VALUES('$Title', '$Priority', '$Name', '$Contact_Number', '$Email', '$Content')") or
          die($mysqli->error);
}
