<?php 
include_once("db_connect.php");

$whr=" where ";
$a=array();
if (is_null($d)) {
    $whr = '';
}else{
    if($d->zone){
        if($d->zone==11){
            array_push($a,"1234");
        }else if ($d->rate){
            array_push($a," `dorm_zone`.id_zone like '{$d->zone}'");
        }
    }
    if($d->rate){
        if($d->rate==1){
            array_push($a,"  `master_room`.Room_rate BETWEEN 0 AND 1499");
        }else if ($d->rate==2){
            array_push($a,"  `master_room`.Room_rate BETWEEN 1500 AND 2000");
        }
        else if ($d->rate==3){
            array_push($a,"  `master_room`.Room_rate BETWEEN 2001 AND 2500");
        }else if ($d->rate==4){
            array_push($a,"  `master_room`.Room_rate BETWEEN 2501 AND 3000");
        }else if ($d->rate==5){
            array_push($a,"  `master_room`.Room_rate > 3000");
        }else if ($d->rate==11){
            array_push($a,"1234");
        }
    } 
    if($d->type ){
        if($d->type==1){
            array_push($a,"  `master_room`.Room_type like 'ห้องพัดลม'");
        }else if ($d->type==2){
            array_push($a,"  `master_room`.Room_type like 'ห้องแอร์'");
        }else if ($d->type==11){
            array_push($a,"1234");
        }
    } 
    if($d->pet){
        if($d->pet==1){
            array_push($a,"  `other`.pet like 'ได้' ");
        }else if ($d->pet==2){
            array_push($a,"  `other`.pet like 'ไม่ได้' ");
        }else if ($d->pet==11){
            array_push($a,"1234");
        }
    }
    if($d->cook){
        if($d->cook==1){
            array_push($a,"  `other`.cook like 'ได้' ");
        }else if ($d->cook==2){
            array_push($a,"  `other`.cook like 'ไม่ได้' ");
        }else if ($d->cook==11){
            array_push($a,"1234");
        }
    }
}
if($a == null){
    $whr = '';
}else{
    foreach ($a as $value) {
    $whr=$whr."$value and ";
    }
    $whr= substr($whr,0,-4);
}


// echo $whr;
// print_r($a);
$sql = "SELECT *
        FROM `dorm_master` 
        LEFT JOIN `dorm_zone` ON (`dorm_master`.`id_zone` = `dorm_zone`.`id_zone`) 
        LEFT JOIN `totalstar` ON (`dorm_master`.id_dorm = `totalstar`.dorm_id)
        LEFT JOIN `other` ON (`dorm_master`.id_dorm = `other`.id_dorm)  
        LEFT JOIN `master_room` ON (`dorm_master`.id_dorm = `master_room`.id_dorm)
        {$whr} 
        LIMIT 0,12";
    // echo $sql;
$result = $mysqli->query($sql);
$rows = array();
while ($r = $result->fetch_assoc()) {
    $rows[] = $r;
}
$result->free_result();

print json_encode($rows);

$mysqli->close();
?>