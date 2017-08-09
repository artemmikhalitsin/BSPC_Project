<?php
include('includes/header.php');
?>

<h1>Patients</h1>

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
    <tr>
        <td>123456789</td>
        <td>John Doe</td>
        <td>0198765432</td>
        <td>(123) 456-7890</td>
        <td>111 Address Street, Montreal, QC</td>
        <td>BSPC</td>
        <td>Sciatica. Lower back pain, left thigh</td>
        <td>Doctor Charles</td>
        <td>01/11/17</td>
        <td><a href="update.php" type="button" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>
    </tr>
    <tr>
        <td>987654321</td>
        <td>Jane Doe</td>
        <td>0145678923</td>
        <td>(123) 456-7890</td>
        <td>12a Address Avenue, Montreal, QC</td>
        <td>BSPC</td>
        <td>Pulled muscle, right thigh</td>
        <td>Doctor Charles</td>
        <td>01/11/17</td>
        <td><a href="update.php" type="button" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>
    </tr>

    <tr>
        <td colspan="7"><div class="text-center"><a href="add.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Patient</a></div></td>
    </tr>
</table>

<h1>Employees</h1>

<table class="table table-striped table-bordered">
    <tr>
        <th>Employee ID</th>
        <th>Occupation</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>PhysioCenter</th>
        <th>Notes</th>
        <th>Update</th>
    </tr>
    <tr>
        <td>123456789</td>
        <td>Doctor</td>
        <td>Charles Nocks</td>
        <td>charles@nocks.com</td>
        <td>(123) 456-7890</td>
        <td>111 Address Street, Montreal, QC</td>
        <td>BSPC</td>
        <td>Gone on vacation in June</td>
        <td><a href="update.php" type="button" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>
    </tr>
    <tr>
        <td>987654321</td>
        <td>PhysioTherapist</td>
        <td>Susan Jones</td>
        <td>susan@jones.com</td>
        <td>(123) 456-7890</td>
        <td>12a Address Avenue, Montreal, QC</td>
        <td>BSPC</td>
        <td>Unavailable March 4, 2017</td>
        <td><a href="update.php" type="button" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>
    </tr>

    <tr>
        <td colspan="7"><div class="text-center"><a href="add_employee.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Employee</a></div></td>
    </tr>
</table>

<?php
include('includes/footer.php');
?>