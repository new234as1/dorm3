<?php
// include "php_delete_header.php";
include_once "db_connect.php";

   $sql = "SELECT `dorm_master`.`id_dorm`, `dorm_master`.`thumbnail`, `dorm_master`.`dorm_name`, `dorm_master`.`address`, `master_room`.`Room_rate`, `totalstar`.`total`, `dorm_zone`.`zone_name` , `dorm_master`.id_zone FROM `dorm_master` 
   LEFT JOIN `totalstar` ON (`dorm_master`.`id_dorm` = `totalstar`.`dorm_id`) 
   LEFT JOIN `master_room` ON (`dorm_master`.`id_dorm` = `master_room`.`id_dorm`)
   LEFT JOIN `dorm_zone` ON (`dorm_master`.`id_zone` = `dorm_zone`.`id_zone`)
   WHERE `dorm_master`.`id_zone` LIKE ('{$_GET['idzone']}')
   ORDER BY RAND()
    LIMIT 4
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
        $zone=$row["zone_name"];
        $dormid=$row["id_dorm"];
        $idzone=$row["id_zone"];
        echo ' <div class="card border-color-7 mb-5 overflow-hidden">
        <div class="product-item__outer w-100">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-xl-3dot5">
                <div class="pt-5 pb-md-5 pl-4 pr-4 pl-md-5 pr-md-2 pr-xl-2">
                    <div class="product-item__header mt-2 mt-md-0">
                        <div class="position-relative">
                            <img class="img-fluid rounded-sm" src="./img/introdorm/'. $image_name .'" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-7 col-lg-7 col-xl-5 flex-horizontal-center pl-xl-0">
                <div class="w-100 position-relative m-4 m-md-0">
                    <a href="../hotels/hotel-booking.html" class="mb-2 d-inline-block">
                        <span class="font-weight-bold font-size-17 text-dark text-dark">' . $name .'<br>' . $zone .' </span>
                    </a>
                    <div class="mt-1 pt-2">
                        <div class="d-flex mb-1">
                        <div class="d-flex align-items-center mb-2">
                        <i class="flaticon-placeholder-1 font-size-25 text-primary mr-3 pr-1"></i>
                        <h6 class="mb-0 font-size-14 text-gray-1">
                            <a href="#">' . $address .'</a>
                        </h6>
                     </div>
                        </div>
                        <a href="Page.php?dormid=' . $dormid .'&idzone=' . $idzone .'" class="text-underline font-size-14">ดูรายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col col-xl-3dot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                <div class="flex-content-center border-xl-left py-xl-5 ml-4 ml-xl-0 justify-content-start justify-content-xl-center">
                    <div class="text-center my-xl-1">
                        <div class="mb-2 pb-1">
                            <span class="font-size-14">ราคา </span>
                            <span class="font-weight-bold font-size-22 ml-1">' . $rate .'</span>
                            <span class="font-size-14"> บาท/ เดือน</span>
                        </div>
                        <a href="../hotels/hotel-booking.html" class="btn btn-outline-primary border-radius-3 border-width-2 px-4 font-weight-bold min-width-200 py-2 text-lh-lg">จอง</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';
    }
    
?>