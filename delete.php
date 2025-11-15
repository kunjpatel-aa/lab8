<?php
$title = "Delete Record";
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = (int) $_POST['client_id'];
    $sql = "DELETE FROM client_info WHERE client_id = $id";

    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo '<div class="alert alert-success mt-4">Record with ID ' . $id . ' deleted successfully.</div>';
        } else {
            echo '<div class="alert alert-warning mt-4">No record found with ID ' . $id . '.</div>';
        }
    } else {
        echo '<div class="alert alert-danger mt-4">Error deleting record: ' . mysqli_error($conn) . '</div>';
    }
} else {
    echo '<div class="alert alert-warning mt-4">Invalid request.</div>';
}

echo '<a href="viewrecords.php" class="btn btn-secondary mt-3">Back to Records</a>';

require_once './includes/footer.php';
