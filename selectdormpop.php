<?php
// include "php_delete_header.php";
include_once "db_connect.php";
$sql = "SELECT `dorm_master`.`id_dorm`, `dorm_master`.`thumbnail`, `dorm_master`.`dorm_name`, `dorm_master`.`address`, `master_room`.`Room_rate`, `totalstar`.`total`, `dorm_master`.id_zone FROM `dorm_master` 
LEFT JOIN `totalstar` ON (`dorm_master`.`id_dorm` = `totalstar`.`dorm_id`) 
LEFT JOIN `master_room` ON (`dorm_master`.`id_dorm` = `master_room`.`id_dorm`)
ORDER BY `totalstar`.`total` DESC 
";
    // echo $sql; return false;
   $result = $mysqli->query($sql);
   $rows = array();

    while($r = $result -> fetch_assoc()) {
        $rows[] = $r;
    }
    $result -> free_result();
    print json_encode($rows);
$mysqli->close();
?>