<?php include "../includes/header.php";

/*
 * If you do the opposite here, quit early if NOT login, you can
 * reduce the amount of indentation you need :)
 */
if (!isset($_POST['Login'])) {
    return;
}

/*
 * As a general rule of thumb, most variables should be lowercased
 * in 'snake_case' style
 */
$Name = $_POST['Name'];
$Password = $_POST['Password'];

// Query the database for the users details
$query = $mysqli->query("SELECT Password, user_id FROM users WHERE Name = '$Name'");

// First check: Did a user with that name exist?
if ($query->num_rows === 0) {
    echo 'Unknown user: ' . $Name;
    return;
}

// Second check: Does the password match?
$row = $query->fetch_assoc();
$stored_password = $row['Password'];

if (password_verify($Password, $stored_password)) {
    $_SESSION['username'] = $Name;
    $_SESSION['id'] = $row['user_id'];

    header( $admin == 1 ? "location: ../admin/viewticket.php" : "location: ../views/dashboard.php" );
} else {
    echo "<div class='alert alert-danger' role='alert'>password is invalid</div>";
}
