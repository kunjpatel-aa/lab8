<?php
$title = "Client Form";
require_once './includes/header.php';
?>

<h2 class="mb-4">Client Information Form</h2>

<form action="receive.php" method="post" class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">City</label>
    <input type="text" name="city" class="form-control" required>
  </div>
  <div class="col-md-4">
    <label class="form-label">Province</label>
    <select name="province" class="form-select" required>
      <option value="" disabled selected>Select Province/Territory</option>
      <option>Alberta</option>
      <option>British Columbia</option>
      <option>Manitoba</option>
      <option>New Brunswick</option>
      <option>Newfoundland and Labrador</option>
      <option>Northwest Territories</option>
      <option>Nova Scotia</option>
      <option>Nunavut</option>
      <option>Ontario</option>
      <option>Prince Edward Island</option>
      <option>Quebec</option>
      <option>Saskatchewan</option>
      <option>Yukon</option>
    </select>
  </div>
  <div class="col-md-4">
    <label class="form-label">Postal Code</label>
    <input type="text" name="postal_code" class="form-control" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="viewrecords.php" class="btn btn-info ms-2">View Records</a>
  </div>
</form>

<?php
require_once './includes/footer.php';
