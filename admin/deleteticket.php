<?php include "../views/header.php";
$id = $_GET['delete'];
$result = $mysqli->query("SELECT * FROM request WHERE id = $id ")->fetch_assoc() or die($mysqli->error);?>

cum

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5 mb-3">Delete Record</h2>
              <form action="../model/request/request-delete.php" method="DELETE">
                    <div class="alert alert-danger">
                        <p>Are you sure you want to delete this record?</p>
                        <button type="submit" class="btn btn-danger"> delete </button>
                          <input type="hidden" name="delete" value="<?php echo $result['ID']?>"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include "../views/footer.php" ?>
