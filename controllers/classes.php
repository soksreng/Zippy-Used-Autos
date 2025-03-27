<?php
require_once("../model/database.php");
require_once("../model/classes_db.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If the form action is "add", insert the new class and redirect with success message
    if ($_POST['action'] === 'add') {
        add_class($_POST['class']);
        header("Location: ../admin/manage_classes.php?success=class_added");
        exit;
    }
    // If the form action is "delete", delete the specified class and redirect with success message
    if ($_POST['action'] === 'delete') {
        delete_class($_POST['class_id']);
        header("Location: ../admin/manage_classes.php?success=class_deleted");
        exit;
    }    
}
// Fetch all classes from the database to display in the view
$classes = get_classes();
include("../view/classes_list.php");