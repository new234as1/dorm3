<?php
// include "php_delete_header.php";
include_once "db_connect.php";

$sql = "SELECT COUNT(*) AS bo FROM `dorm_master`";
$result = $mysqli->query($sql);
$rows = array();
$r = $result->fetch_assoc();
$a = ceil($r['bo']/12);
// while ($r = $result->fetch_assoc()) {
//     $rows[] = ceil($r['bo']/12);
// }
// for($i=0; $i<$a; $i++){
//     $rows[] = $i;
// }
$result->free_result();
print json_encode($a);
$mysqli->close();
