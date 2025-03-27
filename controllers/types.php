<?php
require_once("../model/database.php");
require_once("../model/types_db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If the form action is "add", insert the new type and redirect with success message
    if ($_POST['action'] === 'add') {
        add_type($_POST['type']);
        header("Location: ../admin/manage_types.php?success=type_added");
        exit;
    }
    // If the form action is "delete", delete the specified type and redirect with success message
    if ($_POST['action'] === 'delete') {
        delete_type($_POST['type_id']);
        header("Location: ../admin/manage_types.php?success=type_deleted");
        exit;
    }
    
}
// Fetch all types from the database to display in the view
$types = get_types();
include("../view/types_list.php");