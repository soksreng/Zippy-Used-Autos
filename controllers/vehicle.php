<?php
require_once("model/classes_db.php");
require_once("model/database.php");
require_once("model/vehicle_db.php");
require_once("model/makes_db.php");
require_once("model/types_db.php");
// Fetch all available makes, types, and classes for filter dropdowns
$makes = get_makes();
$types = get_types();
$classes = get_classes();
// Get sorting method from URL (default is 'price' if not provided)
$sort_by = $_GET['sort'] ?? 'price';
// Get filter values from URL (default is null if not provided)
$make_id = $_GET['make_id'] ?? null;
$type_id = $_GET['type_id'] ?? null;
$class_id = $_GET['class_id'] ?? null;
// Fetch filtered list of vehicles based on selected filters and sort order
$vehicles = get_filtered_vehicles($sort_by, $make_id, $type_id, $class_id);
include("view/vehicle_list.php");

?>