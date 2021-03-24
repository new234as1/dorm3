<?php
// include "php_delete_header.php";
include_once "db_connect.php";

   $sql = "SELECT `dorm_master`.`id_dorm`, `dorm_master`.`thumbnail`, `dorm_master`.`dorm_name`, `dorm_master`.`address`, `master_room`.`Room_rate`, `totalstar`.`total`, `dorm_master`.id_zone FROM `dorm_master` 
   LEFT JOIN `totalstar` ON (`dorm_master`.`id_dorm` = `totalstar`.`dorm_id`) 
   LEFT JOIN `master_room` ON (`dorm_master`.`id_dorm` = `master_room`.`id_dorm`)
   WHERE `dorm_master`.`id_zone` LIKE ('{$_GET['idzone']}')
   ORDER BY `totalstar`.`total` DESC LIMIT 3
   ";
    // echo $sql; return false;
   $result = $mysqli->query($sql);
   $row = array();

    while($row = $result -> fetch_assoc()) {
        $image_name=$row["thumbnail"];
        $name=$row["dorm_name"];
        $address=$row["address"];
        $rate=$row["Room_rate"];
        $total=$row["total"];
        $dormid=$row["id_dorm"];
        $idzone=$row["id_zone"];
        echo '<div class="border border-color-7 rounded px-4 pt-4 pb-3 mb-5">
        <div class="px-2 pt-2" >
            <a href="https://goo.gl/maps/kCVqYkjHX3XvoC4B9" class="d-block border rounded mb-4">
                <img class="img-fluid" src="./img/introdorm/'. $image_name .'"alt="Image-Description">
            </a>
            <div class="flex-horizontal-center mb-4">
                <div class="border-primary border rounded-xs px-3 text-lh-1dot7 py-1">
                    <span class="font-size-21 font-weight-bold px-1 mb-0 text-lh-inherit text-primary">' . $total .'</span>
                </div>

                <div class="ml-2 text-lh-1">
                    <div class="ml-1">
                        <h4 class="text-primary font-size-17 font-weight-bold mb-0">' . $name .'</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="flaticon-placeholder-1 font-size-25 text-primary mr-3 pr-1"></i>
                <h6 class="mb-0 font-size-14 text-gray-1">
                    <a href="#">' . $address .'</a>
                </h6>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="flaticon-medal font-size-25 text-primary mr-3 pr-1"></i>
                <h6 class="mb-0 font-size-14 text-gray-1">
                    <a href="#">' . $rate .' บาท / เดือน</a>
                </h6>
            </div>
            <a href="Page.php?dormid=' . $dormid .'&idzone=' . $idzone .'" class="text-underline font-size-14">ดูรายละเอียดเพิ่มเติม</a>
        </div>
    </div>';
    }
    
?>