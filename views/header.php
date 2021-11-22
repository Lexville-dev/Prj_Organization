<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <?php
    include '/includes/db_connection.php';                         //include the databse to the site
    $conn = OpenCon();                                  //open the connection to the db
    echo "Connected Successfully";                      //if opened successfully echo statement
  ?>
</head>

<body>
<h1> header </h1>
