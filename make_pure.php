<?php
$db = new mysqli("db.fr-roub1.bengt.wasmernet.com", "user_4cbd00f7", "pw_WRBPrPBLchPnR7YRFG6a51LIEkk8mTKB", "db_902b6764");
$sql = "";
$res = $db->query("SHOW TABLES");
while ($row = $res->fetch_array()) {
    $table = $row[0];
    $sql .= "DROP TABLE IF EXISTS `$table`;\n";
    $cRes = $db->query("SHOW CREATE TABLE `$table`");
    $cRow = $cRes->fetch_array();
    $sql .= $cRow[1] . ";\n\n";
    
    $dRes = $db->query("SELECT * FROM `$table`");
    while ($dRow = $dRes->fetch_assoc()) {
        $keys = array_keys($dRow);
        $vals = array_values($dRow);
        $escaped_vals = array_map(function($v) use ($db) {
            return $v === null ? "NULL" : "'" . $db->real_escape_string($v) . "'";
        }, $vals);
        $sql .= "INSERT INTO `$table` (`" . implode("`, `", $keys) . "`) VALUES (" . implode(", ", $escaped_vals) . ");\n";
    }
    $sql .= "\n";
}
file_put_contents("pure_database.sql", $sql);
?>
