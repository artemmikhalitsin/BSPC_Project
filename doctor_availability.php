<script>
function displayAvailabilitites() {
  //fill the space with availabilitites
}
</script>

<?php
$today = date("Y-m-d");
$in60days = strtotime("+60 Days");
$max_date = date("Y-m-d", $in60days);
include('includes/header.php');
?>

<h1>Doctor's availability</h1>

<div class="row">
  <div class="col-sm-5 col-md-4">
    <!--TODO: FILL THIS WITH DOCTORS-->
    <label for="date">Doctor</label>
    <select class="input-md" id="doctor" class="row"></select>
  </div>
  <div class="col-sm-3 col-md-3">
    <label for="date">Date</label>
    <input type="date" class="input-md" id="apt_date" class="row"
            min="<?php echo $today ?>"
            max="<?php echo $max_date?>"/>
  </div>
  <div class="col-sm-2 col-md-2">
      <button type="button" class="btn btn-lg btn-success pull-right" name="search">Search</button>
  </div>
</div>
<div class="row">
  <table class="table table-striped table-bordered table-responsive">
    <tr>
      <th id="8:00-9:00">8:00-9:00</th>
      <th id="9:00-10:00">9:00-10:00</th>
      <th id="10:00-11:00">10:00-11:00</th>
      <th id="11:00-12:00">11:00-12:00</th>
      <th id="12:00-13:00">12:00-13:00</th>
      <th id="13:00-14:00">13:00-14:00</th>
      <th id="14:00-15:00">14:00-15:00</th>
      <th id="15:00-16:00">15:00-16:00</th>
      <th id="16:00-17:00">16:00-17:00</th>
      <th id="17:00-18:00">17:00-18:00</th>
      <th id="18:00-19:00">18:00-19:00</th>
      <th id="19:00-20:00">19:00-20:00</th>
      <th id="20:00-21:00">20:00-21:00</th>
      <th id="21:00-22:00">21:00-22:00</th>
    </tr>
    <!--This is where the availabilities will go (Filled with JS)-->
    <tr id="availability_container">
    </tr>
  </table>
</div>

<?php
include('includes/footer.php');
?>
