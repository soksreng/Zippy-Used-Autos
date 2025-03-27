<?php
// Retrieves all vehicle types from the database, ordered alphabetically by type name
function get_types() {
    global $db;
    return $db->query("SELECT * FROM types ORDER BY type")->fetchAll();
}
// Adds a new vehicle type to the database
function add_type($type) {
    global $db;
    $stmt = $db->prepare("INSERT INTO types (type) VALUES (:type)");
    $stmt->bindValue(':type', $type);
    $stmt->execute();
}
// Deletes a vehicle type from the database based on its ID
function delete_type($type_id) {
    global $db;
    $stmt = $db->prepare("DELETE FROM types WHERE type_id = :type_id");
    $stmt->bindValue(':type_id', $type_id);
    $stmt->execute();
}
