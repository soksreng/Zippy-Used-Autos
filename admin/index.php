<?php
require_once("../model/database.php");
require_once("../model/vehicle_db.php");
// Get all vehicles, sorted by price (default), with no filters applied
$vehicles = get_filtered_vehicles('price', null, null, null);
// Initialize success message variable
$success_message = null;
// Check for success messages in the URL parameters and set the message accordingly
if (isset($_GET['success']) && $_GET['success'] === 'vehicle') {
    $success_message = "Vehicle added successfully!";
} elseif (isset($_GET['success']) && $_GET['success'] === 'deleted') {
    $success_message = "Vehicle deleted successfully!";
}

include("../view/admin_home.php");
