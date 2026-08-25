<?php
$filename = "database_export.sql";
header('Content-Type: application/sql');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$output = shell_exec('c:\xampp2\mysql\bin\mysqldump.exe -u root global_tech_institute');
echo $output;
exit;
?>
