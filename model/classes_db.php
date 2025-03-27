<?php
// Retrieve all classes from the database, ordered alphabetically by class name
function get_classes() {
    global $db;
    return $db->query("SELECT * FROM classes ORDER BY class")->fetchAll();
}
// Adds a new vehicle class to the database
function add_class($class) {
    global $db;
    $stmt = $db->prepare("INSERT INTO classes (class) VALUES (:class)");
    $stmt->bindValue(':class', $class);
    $stmt->execute();
}
// Deletes a vehicle class from the database based on its ID
function delete_class($class_id) {
    global $db;
    $stmt = $db->prepare("DELETE FROM classes WHERE class_id = :class_id");
    $stmt->bindValue(':class_id', $class_id);
    $stmt->execute();
}