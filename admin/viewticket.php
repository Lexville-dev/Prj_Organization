<?php include "../includes/header.php" ?>
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
                }</style>

<div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col-4">Note ID</th>
              <th scope="col-4">Title</th>
              <th scope="col-4">Name</th>
              <th scope="col-4">Contact Number</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              <tr colspan="0">
                <td>Overview</td>
              </tr>
            </tr>

            <tr>
              <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              <tr rowspan="2">
                <td> Overview </td>
              </tr>
            </tr>

            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter<
                <tr rowspan="2">
                  <td> Overview </td>
              </tr>
            </tr>
          </tbody>
        </table>
</div>

<?php include "../includes/footer.php" ?>
