<?php
include('includes/header.php');
?>

<h1>Patient Search</h1>

<!--TODO: The actual query-->
<form action="patient_search_results.php" method="get" class="row">
    <div class="form-group col-sm-6">
        <label for="fName">First Name</label>
        <input type="text" class="form-control input-lg" id="client-name" name="fName" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="lName">Last Name</label>
        <input type="text" class="form-control input-lg" id="client-email" name="lName" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="email">Email</label>
        <input type="text" class="form-control input-lg" id="patient-phone" name="email" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="address">Address</label>
        <input type="text" class="form-control input-lg" id="patient-address" name="address" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="DOB">Date of Birth</label>
        <input type="date" class="form-control input-lg" id="patient-center" name="DOB" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="gender">Gender</label>
        <input type="text" class="form-control input-lg" id="patient-notes" name="gender"></textarea>
    </div>
    <div class="col-sm-12">
            <a href="index.php" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="add">Search</button>
    </div>
</form>

<?php
include('includes/footer.php');
?>
