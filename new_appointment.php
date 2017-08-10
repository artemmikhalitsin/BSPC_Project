<script src="js/func.js"></script>
<?php
include('includes/header.php');
?>

<h1>Schedule an appointment</h1>

<!-- TODO: WRITE TO THE DATABASE-->
<form onsubmit="return checkEmptyFields()" action="" method="get" class="row">
    <div class="form-group col-sm-6">
        <label for="PHN">Patient Health Number (PHN)</label>
        <input type="text" class="form-control input-lg" id="client-name" name="PHN" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="lName">Referral#</label>
        <input type="text" class="form-control input-lg" id="client-email" name="referral" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="DOB">Appointment Date</label>
        <input type="date" class="form-control input-lg" id="patient-center" name="date" value="">
    </div>
    <div class="col-sm-12">
            <a href="index.php" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="add">Create Appointment</button>
    </div>
</form>

<?php
include('includes/footer.php');
?>
