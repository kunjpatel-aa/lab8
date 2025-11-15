<?php
$title = "View Records";
require_once './includes/header.php';
require_once './db/conn.php';

$sql = "SELECT * FROM client_info";
$result = mysqli_query($conn, $sql);
?>

<h2 class="mb-4">All Client Records</h2>

<?php if ($result && mysqli_num_rows($result) > 0): ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Client ID</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>Province</th>
        <th>Postal Code</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['client_id'] ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= htmlspecialchars($row['address']) ?></td>
          <td><?= htmlspecialchars($row['city']) ?></td>
          <td><?= htmlspecialchars($row['province']) ?></td>
          <td><?= htmlspecialchars($row['postalcode']) ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
<?php else: ?>
  <div class="alert alert-info">No records found.</div>
<?php endif; ?>

<h3 class="mt-5 mb-2">Delete a Record</h3>
<p class="text-muted">Enter the Client ID (primary key) to delete.</p>

<form action="delete.php" method="post" class="p-3 rounded" style="background-color:#d4edda;">
  <div class="mb-3">
    <input type="number" name="client_id" class="form-control" placeholder="Enter Client ID" required>
  </div>
  <button type="submit" class="btn btn-danger">Delete</button>
</form>

<?php
require_once './includes/footer.php';
