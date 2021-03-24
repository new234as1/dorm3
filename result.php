<?php
// include "php_delete_header.php";
include_once "db_connect.php";

$sql = "SELECT * FROM `dorm_master` 
LEFT JOIN `dorm_zone` ON (`dorm_master`.id_zone = `dorm_zone`.id_zone)
LEFT JOIN `totalstar` ON (`dorm_master`.`id_dorm` = `totalstar`.`dorm_id`) 
LEFT JOIN `master_room` ON (`dorm_master`.`id_dorm` = `master_room`.`id_dorm`)
LEFT JOIN `other` ON (`dorm_master`.`id_dorm` = `other`.`id_dorm`)
WHERE `dorm_master`.`id_dorm` IN ('{$_GET['id1']}', '{$_GET['id2']}')
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