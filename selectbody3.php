<?php
// include "php_delete_header.php";
include_once "db_connect.php";

   $sql = "SELECT  * 
   FROM `dorm_detail`
   LEFT JOIN `totalstar` ON (`dorm_detail`.id_dorm = `totalstar`.dorm_id)
   WHERE `dorm_detail`.id_dorm = '{$d->dormid}'";
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