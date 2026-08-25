<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "<h3>Database Connection Test</h3>";

require_once 'config/database.php';

try {
    echo "Connecting to: " . DB_HOST . ":" . DB_PORT . " as " . DB_USER . "<br>";
    
    $dsn = sprintf(
        'mysql:host=%s;port=%s;dbname=%s;charset=%s',
        DB_HOST,
        DB_PORT,
        DB_NAME,
        DB_CHARSET
    );
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "<p style='color:green;'><b>SUCCESS!</b> Connected to the database!</p>";
    
    $stmt = $pdo->query("SHOW TABLES");
    echo "<h4>Tables found:</h4><ul>";
    while($row = $stmt->fetch()) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";
} catch (Exception $e) {
    echo "<p style='color:red;'><b>CONNECTION FAILED!</b><br>";
    echo "Error Message: " . $e->getMessage() . "</p>";
    
    if (strpos($e->getMessage(), 'Access denied') !== false) {
        echo "<p>Tip: The username or password is incorrect, or the database host rejects connections from this IP.</p>";
    } elseif (strpos($e->getMessage(), 'Connection refused') !== false || strpos($e->getMessage(), 'No connection could be made') !== false) {
        echo "<p>Tip: The host or port is wrong, or the host blocks the connection.</p>";
    }
}
?>
