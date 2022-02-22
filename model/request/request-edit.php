<?php



if (isset($_POST['edit'])){
    $id = $_POST['edit'];
    $result = $mysqli->query("SELECT * FROM request WHERE id = $id") or die($mysqli->error());

    if (count($result) == 1 ){

        $row = $result -> fetch_array();

        $Title = $_POST['Title'];
        $Priority = $_POST['Priority'];
        $Name = $_POST['Name'];
        $Contact_Number = $_POST['Contact_Number'];
        $Email = $_POST['Email'];
        $Content = $_POST['Content'];

    }

}
