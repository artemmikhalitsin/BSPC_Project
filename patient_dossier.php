<?php
include('includes/connection.php');
include('includes/header.php');
//Query the patinet's info via request (probably get)

$patient_info = null;
if(isset($_GET))
{
  //Do the stuff here
}
?>

<h1>Patient Dossier</h1>

<!-- TODO: WRITE TO THE DATABASE-->
<!-- TODO: On submit verify (via php i suppose) that a patient is over 18-->

<div class="row">
  <div class="col-sm-5 col-md-4">
    <h3>Patient Info</h3>
    <label> First Name: </label> </br>
    <label> Last Name: </label> </br>
    <label> Date of Birth: </label> </br>
    <label> Gender: </label> </br>
    <label> Address: </label> </br>
    <label> Email: </label> </br>
  </div>
  <div class="col-sm-5 col-md-4">
    <h3> Prescriptions </h3>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Prescription Number</th>
            <th>Referring Trainer</th>
            <th>Diagnosis</th>
            <th>Notes</th>
        </tr>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-sm-5 col-md-4">
    <h3>Future Appointments</h3>
    <table class="table table-striped table-bordered">
        <tr>
        <!--TODO: IDK what to put here-->
        </tr>
    </table>
  </div>
  </div>
  <div class="col-sm-5 col-md-4">
    <h3> Past Visits </h3>
    <table class="table table-striped table-bordered">
      <!--TODO:Maybe Therapists can link to a doctor's profile-->
        <tr>
            <th>Date</th>
            <th>Prescription#</th>
            <th>Therapists</th>
            <th>Treatments</th>
            <th>Equipment</th>
        </tr>
    </table>
  </div>
</div>
<?php
include('includes/footer.php');
?>
