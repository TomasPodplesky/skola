<?php
// db.php
require_once 'config.php';

function getMachines() {
    $pdo = getDB();
    return $pdo->query("SELECT * FROM machines")->fetchAll();
}

function getMaterials() {
    $pdo = getDB();
    return $pdo->query("SELECT * FROM materials")->fetchAll();
}

function getOrders() {
    $pdo = getDB();
    return $pdo->query("SELECT o.*, p.part_name FROM orders o JOIN parts p ON o.part_id = p.part_id ORDER BY o.deadline ASC")->fetchAll();
}

function getParts() {
    $pdo = getDB();
    return $pdo->query("SELECT p.*, m.material_name FROM parts p LEFT JOIN materials m ON p.material_id = m.material_id ORDER BY p.part_name ASC")->fetchAll();
}

function getStats() {
    $pdo = getDB();
    $stats = [];
    $stats['orders'] = $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn();
    $stats['machines_active'] = $pdo->query("SELECT COUNT(*) FROM machines WHERE status = 'Online'")->fetchColumn();
    $stats['materials_low'] = $pdo->query("SELECT COUNT(*) FROM materials WHERE quantity < 10")->fetchColumn();
    return $stats;
}

function getLogs($limit = 10) {
    $pdo = getDB();
    $sql = "SELECT l.*, u.username, m.machine_name, o.customer_name 
            FROM logs l 
            JOIN Users u ON l.user_id = u.user_id 
            JOIN machines m ON l.machine_id = m.machine_id 
            JOIN orders o ON l.order_id = o.order_id 
            ORDER BY l.start_time DESC LIMIT ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$limit]);
    return $stmt->fetchAll();
}

// --- AUTENTIZACE ---
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function requireAuth() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit;
    }
}

function getCurrentUser() {
    if (!isLoggedIn()) return null;
    $pdo = getDB();
    $stmt = $pdo->prepare("SELECT * FROM Users WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    return $stmt->fetch();
}

function loginUser($username, $password) {
    $pdo = getDB();
    $stmt = $pdo->prepare("SELECT * FROM Users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if ($user && $user['password'] === $password) {
        $_SESSION['user_id'] = $user['user_id'];
        return true;
    }
    return false;
}

// --- VKLÁDÁNÍ ZÁZNAMŮ ---
function createOrder($customer_name, $part_id, $part_quantity, $deadline, $status) {
    $pdo = getDB();
    $stmt = $pdo->prepare("INSERT INTO orders (customer_name, part_id, part_quantity, deadline, status) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$customer_name, $part_id, $part_quantity, $deadline, $status]);
}

function createMachine($machine_name, $machine_type, $status) {
    $pdo = getDB();
    $stmt = $pdo->prepare("INSERT INTO machines (machine_name, machine_type, status) VALUES (?, ?, ?)");
    return $stmt->execute([$machine_name, $machine_type, $status]);
}

function createMaterial($material_name, $quantity, $unit, $location) {
    $pdo = getDB();
    $stmt = $pdo->prepare("INSERT INTO materials (material_name, quantity, unit, location) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$material_name, $quantity, $unit, $location]);
}

function getMachine($id) {
    $pdo = getDB();
    $stmt = $pdo->prepare("SELECT * FROM machines WHERE machine_id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function updateMachine($id, $machine_name, $machine_type, $status) {
    $pdo = getDB();
    $stmt = $pdo->prepare("UPDATE machines SET machine_name = ?, machine_type = ?, status = ? WHERE machine_id = ?");
    return $stmt->execute([$machine_name, $machine_type, $status, $id]);
}

function getMaterial($id) {
    $pdo = getDB();
    $stmt = $pdo->prepare("SELECT * FROM materials WHERE material_id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function updateMaterial($id, $material_name, $quantity, $unit, $location) {
    $pdo = getDB();
    $stmt = $pdo->prepare("UPDATE materials SET material_name = ?, quantity = ?, unit = ?, location = ? WHERE material_id = ?");
    return $stmt->execute([$material_name, $quantity, $unit, $location, $id]);
}

function registerUser($username, $password, $name, $surname, $role) {
    $pdo = getDB();
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM Users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->fetchColumn() > 0) {
        throw new Exception("Uživatelské jméno již existuje.");
    }
    // Ukládání jako čistý text pro školní (nezašifrovanou) verzi
    $stmt = $pdo->prepare("INSERT INTO Users (username, password, name, surname, role) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$username, $password, $name, $surname, $role]);
}

function getUsers() {
    $pdo = getDB();
    return $pdo->query("SELECT * FROM Users ORDER BY surname ASC, name ASC")->fetchAll();
}

function createPart($part_name, $schematic, $location, $material_id, $material_need) {
    $pdo = getDB();
    $stmt = $pdo->prepare("INSERT INTO parts (part_name, part_quantity, schematic, location, material_id, material_need) VALUES (?, 0, ?, ?, ?, ?)");
    return $stmt->execute([$part_name, $schematic, $location, $material_id, $material_need]);
}

function createLog($user_id, $machine_id, $order_id, $start_time, $end_time, $part_quantity) {
    $pdo = getDB();
    $pdo->beginTransaction();
    try {
        $stmt = $pdo->prepare("INSERT INTO logs (user_id, machine_id, order_id, start_time, end_time, part_quantity) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $machine_id, $order_id, $start_time, $end_time, $part_quantity]);

        $stmtOrder = $pdo->prepare("SELECT part_id FROM orders WHERE order_id = ?");
        $stmtOrder->execute([$order_id]);
        $order = $stmtOrder->fetch();
        if ($order && isset($order['part_id'])) {
            $stmtUpdate = $pdo->prepare("UPDATE parts SET part_quantity = part_quantity + ? WHERE part_id = ?");
            $stmtUpdate->execute([$part_quantity, $order['part_id']]);
        }
        $pdo->commit();
        return true;
    } catch (Exception $e) {
        $pdo->rollBack();
        throw $e;
    }
}
?>
