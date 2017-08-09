<?php
include('includes/header.php');
?>

<h1>Patient Information</h1>

<form action="clients.php" method="post" class="row">
    <div class="form-group col-sm-6">
        <label for="client-name">Name *</label>
        <input type="text" class="form-control input-lg" id="client-name" name="clientName" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-email">Email *</label>
        <input type="text" class="form-control input-lg" id="client-email" name="clientEmail" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-phone">Phone</label>
        <input type="text" class="form-control input-lg" id="patient-phone" name="patientPhone" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-address">Address</label>
        <input type="text" class="form-control input-lg" id="patient-address" name="patientAddress" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-center">Physio Center</label>
        <input type="text" class="form-control input-lg" id="patient-center" name="patientCenter" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="patient-notes">Notes</label>
        <textarea type="text" class="form-control input-lg" id="patient-notes" name="patientNotes"></textarea>
    </div>
    <div class="col-sm-12">
            <a href="patient_employee.php" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="add">Add Patient</button>
    </div>
</form>

<?php
include('includes/footer.php');
?>