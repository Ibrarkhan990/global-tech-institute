<?php
require 'config/database.php';
$pdo = Database::getInstance()->getConnection();
$hash = $pdo->query('SELECT password FROM users LIMIT 1')->fetchColumn();
echo "Hash in DB: " . $hash . "\n";
if (password_verify('Admin@2026!', $hash)) {
    echo "Login SUCCESS\n";
} else {
    echo "Login FAILED\n";
}
?>

