<?php
// include "php_delete_header.php";
include_once "db_connect.php";

   $sql = "SELECT dorm_data.zoneID ,dorm_zone.zoneName ,dorm_data.roomDorm ,ratesPerMonth ,ratesPerMonth2,pet ,cooking 
   FROM `dorm_data`";
   $result = $mysqli->query($sql);
   $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    print json_encode($rows);
$mysqli->close();
?>