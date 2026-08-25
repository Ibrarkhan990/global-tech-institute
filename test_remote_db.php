<?php
try {
    $pdo = new PDO("mysql:host=db.fr-roub1.bengt.wasmernet.com;port=20184;dbname=db_f3f90f23;charset=utf8mb4", "user_c136f466", "pw_aTXKnuCR2h8MLQoW7cO3G9yDQDbmc2On", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "SUCCESS\n";
    $stmt = $pdo->query("SHOW TABLES");
    while($row = $stmt->fetch()) {
        echo $row[0] . "\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
?>

