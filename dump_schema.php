<?php
$mysqli = new mysqli("db.fr-roub1.bengt.wasmernet.com", "user_4cbd00f7", "pw_WRBPrPBLchPnR7YRFG6a51LIEkk8mTKB", "db_902b6764");
$result = $mysqli->query("SHOW TABLES");
while ($row = $result->fetch_array()) {
    $table = $row[0];
    $res2 = $mysqli->query("SHOW CREATE TABLE `$table`");
    $row2 = $res2->fetch_array();
    echo $row2[1] . "\n\n";
}
?>