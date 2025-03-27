<?php
require_once("../model/database.php");
require_once("../model/makes_db.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If the form action is "add", insert the new make and redirect with success message
    if ($_POST['action'] === 'add') {
        add_make($_POST['make']);
        header("Location: ../admin/manage_makes.php?success=make_added");
        exit;
    }
    // If the form action is "delete", delete the specified make and redirect with success message
    if ($_POST['action'] === 'delete') {
        delete_make($_POST['make_id']);
        header("Location: ../admin/manage_makes.php?success=make_deleted");
        exit;
    }
}
// Fetch all makes from the database to display in the view
$makes = get_makes();
include("../view/makes_list.php");

?>