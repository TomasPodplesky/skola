<?php
// config.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
define('DB_HOST', 'sql6.webzdarma.cz');
define('DB_NAME', 'podpleskytbo4613');
define('DB_USER', 'podpleskytbo4613');
define('DB_PASS', 'A8VN3945d78d37M1)BiA'); // <-- Zde doplňte své heslo z administrace Webzdarma
define('DB_CHARSET', 'utf8mb4');

/**
 * Database connection using PDO
 */
function getDB() {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        return new PDO($dsn, DB_USER, DB_PASS, $options);
    } catch (\PDOException $e) {
        // In a real app, don't show the error message to users
        die("Connection failed: " . $e->getMessage());
    }
}
?>
