<?php
include('includes/header.php');
?>

<h1>Update Patient Information</h1>

<form action="patient.php" method="post" class="row">
    <div class="form-group col-sm-6">
        <label for="patient-name">Name</label>
        <input type="text" class="form-control input-lg" id="patient-name" name="patientName" value="John Doe">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-email">Personal Health Number</label>
        <input type="text" class="form-control input-lg" id="p_h_n" name="phn" value="123456789">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-phone">Phone</label>
        <input type="text" class="form-control input-lg" id="patient-phone" name="patientPhone" value="(123) 456-7890">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-address">Address</label>
        <input type="text" class="form-control input-lg" id="patient-address" name="patientAddress" value="111 Address Street, Montreal, QC">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-company">Physio Center</label>
        <input type="text" class="form-control input-lg" id="physio-center" name="physioCenter" value="BSPC">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-notes">Notes</label>
        <textarea type="text" class="form-control input-lg" id="patient-notes" name="patientNotes">Lower-Back Problems</textarea>
    </div>
    <div class="col-sm-12">
        <hr>
        <button type="submit" class="btn btn-lg btn-danger pull-left" name="delete">Delete</button>
        <div class="pull-right">
            <a href="patient.php" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success" name="update">Update</button>
        </div>
    </div>
</form>

<?php
include('includes/footer.php');
?>