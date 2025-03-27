<?php
require_once("../model/database.php");
require_once("../model/vehicle_db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vehicle_id'])) {
    // Get the vehicle ID from the form data
    $vehicle_id = $_POST['vehicle_id'];
    // Delete the vehicle using the vehicle ID
    delete_vehicle($vehicle_id);
    // Redirect to admin home with a success flag
    header("Location: index.php?success=vehicle_deleted");
    exit;
} else {
    // Invalid access or missing ID
    header("Location: index.php?error=invalid");
    exit;
}
