<?php
// Retrieves all vehicle makes from the database, ordered alphabetically by makes name
function get_makes() {
    global $db;
    return $db->query("SELECT * FROM makes ORDER BY make")->fetchAll();
}
// Adds a new vehicle make to the database
function add_make($make) {
    global $db;
    $stmt = $db->prepare("INSERT INTO makes (make) VALUES (:make)");
    $stmt->bindValue(':make', $make);
    $stmt->execute();
}
// Deletes a vehicle make from the database based on its ID
function delete_make($make_id) {
    global $db;
    $stmt = $db->prepare("DELETE FROM makes WHERE make_id = :make_id");
    $stmt->bindValue(':make_id', $make_id);
    $stmt->execute();
}

