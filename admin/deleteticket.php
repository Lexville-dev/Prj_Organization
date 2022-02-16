<?php include "../views/header.php";

$result = $mysqli->query("SELECT * FROM request") or die($mysqli->error);

$row = $result->fetch_assoc(); 

?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5 mb-3">Delete Record</h2>
              <form action="../model/request/request-delete.php" method="DELETE">
                    <div class="alert alert-danger">
                        <p>Are you sure you want to delete this record?</p>
                        <a href="../model/request/request-delete.php"
                          name="delete" class="btn btn-danger"> delete </a>
                        <a href="viewticket.php"
                          name="" class="btn btn-info"> no </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include "../views/footer.php" ?>
