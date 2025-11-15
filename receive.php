<?php
$title = "Received";
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);

    $sql = "INSERT INTO client_info (email, address, city, province, postalcode)
            VALUES ('$email', '$address', '$city', '$province', '$postal_code')";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success mt-4">Record added successfully.</div>';
    } else {
        echo '<div class="alert alert-danger mt-4">Error: ' . mysqli_error($conn) . '</div>';
    }
} else {
    echo '<div class="alert alert-warning mt-4">No data submitted.</div>';
}

require_once './includes/footer.php';
