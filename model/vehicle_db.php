<?php
// Retrieves vehicles from the database based on optional filters (make, type, class)
// and sorts them either by year (descending) or price (descending)
// Joins related tables (makes, types, classes) to get full vehicle info

function get_filtered_vehicles($sort_by, $make_id, $type_id, $class_id) {
    global $db;
    $query = "SELECT v.*, m.make, t.type, c.class FROM vehicles v
              JOIN makes m ON v.make_id = m.make_id
              JOIN types t ON v.type_id = t.type_id
              JOIN classes c ON v.class_id = c.class_id";
    // Build the WHERE clause based on provided filters
    $where = [];
    if ($make_id) $where[] = "v.make_id = :make_id";
    if ($type_id) $where[] = "v.type_id = :type_id";
    if ($class_id) $where[] = "v.class_id = :class_id";
    // If there are any filters, add them to the query
    if (!empty($where)) $query .= " WHERE " . implode(" AND ", $where);
    // Add sorting based on the sort_by parameter
    $query .= $sort_by === 'year' ? " ORDER BY v.year DESC" : " ORDER BY v.price DESC";
    // Prepare and execute the query
    $stmt = $db->prepare($query);
    if ($make_id) $stmt->bindValue(':make_id', $make_id);
    if ($type_id) $stmt->bindValue(':type_id', $type_id);
    if ($class_id) $stmt->bindValue(':class_id', $class_id);
    $stmt->execute();
    return $stmt->fetchAll();
}
// Adds a new vehicle to the database with the specified attributes
function add_vehicle($year, $make_id, $type_id, $class_id, $model, $price) {
    global $db;
    $stmt = $db->prepare("INSERT INTO vehicles (year, make_id, type_id, class_id, model, price) VALUES (:year, :make_id, :type_id, :class_id, :model, :price)");
    $stmt->execute(compact('year','make_id','type_id','class_id','model','price'));
}
// Deletes a vehicle from the database based on its ID
function delete_vehicle($vehicle_id) {
    global $db;
    $stmt = $db->prepare("DELETE FROM vehicles WHERE vehicle_id = :vehicle_id");
    $stmt->bindValue(':vehicle_id', $vehicle_id);
    $stmt->execute();
}