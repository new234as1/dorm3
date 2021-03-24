<?php
// include "php_delete_header.php";
include_once "db_connect.php";

$sql = "SELECT * FROM `dorm_master` 
            LEFT JOIN `dorm_zone` ON (`dorm_master`.`id_zone` = `dorm_zone`.`id_zone`) 
            LEFT JOIN `totalstar` ON (`dorm_master`.id_dorm = `totalstar`.dorm_id)  
LIMIT {$d -> recno},12  ";
$result = $mysqli->query($sql);
$rows = array();
// echo $sql;
while ($r = $result->fetch_assoc()) {
    $rows[] = $r;
}
$result->free_result();

print json_encode($rows);

$mysqli->close();
?>


