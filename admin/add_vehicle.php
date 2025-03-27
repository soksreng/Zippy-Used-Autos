<?php
require_once("../model/database.php");
require_once("../model/vehicle_db.php");
require_once("../model/makes_db.php");
require_once("../model/types_db.php");
require_once("../model/classes_db.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Call the add_vehicle() function with form input values to insert a new vehicle
    add_vehicle($_POST['year'], $_POST['make_id'], $_POST['type_id'], $_POST['class_id'], $_POST['model'], $_POST['price']);
    header("Location: index.php?success=vehicle_added");
    exit;
    
}
// Fetch all makes, types, and classes from the database to display in the form
$makes = get_makes();
$types = get_types();
$classes = get_classes();
include("../view/add_vehicle_form.php");