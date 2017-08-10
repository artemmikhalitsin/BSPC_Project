<?php
include('includes/connection.php');

$result = null;
if($_SERVER['REQUEST_METHOD'] == 'GET'){
}
 ?>


<?php
include('includes/header.php');
?>

<h1>Patients</h1>

<?php if($result == null || mysql_num_rows($result) == 0): ?>
<div class='alert alert-danger'>Your search returned no results.</div>
<div class="text-center"><a href="add.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Patient</a></div>

<?php else: ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Personal Health Number (PHN)</th>
        <th>Name</th>
        <th>Prescription Number</th>
        <th>Phone</th>
        <th>Address</th>
        <th>PhysioCenter</th>
        <th>Diagnosis</th>
        <th>Doctor</th>
        <th>Appointment</th>
        <th>Update</th>
    </tr>
    <?php
        while($row = mysqli_fetch_row($patients)){
          $PHN = $row[0];
          $fName = $row[1];
          $lName = $row[2];
          $DOB = $row[3];
          $Address = $row[5];
          printf("
          <tr>
              <td>$PHN</td>
              <td>$fName $lName</td>
              <td>?????</td>
              <td>?????</td>
              <td>$Address</td>
              <td>?????</td>
              <td>?????</td>
              <td>?????</td>
              <td>?????</td>
              <td><a href=\"update.php\" type=\"button\" class=\"btn btn-default btn-primary btn-sm\"><span class=\"glyphicon glyphicon-edit\"></span></a></td>
          </tr>
          ");
        }
     ?>

    <tr>
        <td colspan="7"><div class="text-center"><a href="add.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Patient</a></div></td>
    </tr>
</table>
<?php endif ?>

<?php
include('includes/footer.php');
?>
