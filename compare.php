<?php
// include "php_delete_header.php";
include_once "db_connect.php";

   $sql = "SELECT * FROM `dorm_master` 
   LEFT JOIN `totalstar` ON (`dorm_master`.`id_dorm` = `totalstar`.`dorm_id`) 
   LEFT JOIN `master_room` ON (`dorm_master`.`id_dorm` = `master_room`.`id_dorm`)
   LEFT JOIN `other` ON (`dorm_master`.`id_dorm` = `other`.`id_dorm`)
   WHERE `dorm_master`.`id_dorm` like '" . $_GET['dormid'] ."'
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
        $ele=$row["electric_unit"];
        $water=$row["water_bill"];
        $internet=$row["internet_bill"];
        $dorm=$row["ins_fee"];
        $phone=$row["telephone_bill"];
        $extra_fee=$row["extra_fee"];
        $road=$row["distance"];
        $parking=$row["parking_size"];
        $pet=$row["pet"];
        $cook=$row["cook"];

        echo '<div class="border border-color-7 rounded px-4 pt-4 pb-3 mb-5">
        <div class="px-2 pt-2" >
            <a href="https://goo.gl/maps/kCVqYkjHX3XvoC4B9" class="d-block border rounded mb-4">
                <img class="img-fluid" src="./img/introdorm/'. $image_name .'"alt="Image-Description">
            </a>
            <div class="flex-horizontal-center mb-4">

                <div class="ml-2 text-lh-1">
                    <div class="ml-1">
                        <h4 class="text-primary font-size-17 font-weight-bold mb-0">' . $name .'</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 30px;   color: royalblue; "></i>&nbsp;&nbsp;
                <h6 class="mb-0 font-size-14 text-gray-1" style="text-align: left;">
                    <a href="#"> ' . $address .'</a>
                </h6>
            </div>

            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-star" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                <h6 class="mb-0 font-size-14 text-gray-1">
                    <a href="#">คะแนนโดยเฉลี่ย ' . $total .' คะแนน</a>
                </h6>
            </div>

            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-credit-card" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                <h6 class="mb-0 font-size-14 text-gray-1" style="text-align: left;">
                    <a href="#">ราคาห้องพัก ' . $rate .' บาท / เดือน</a><br>
                    <a href="#">ค่าไฟฟ้า ' . $ele .' บาท / เดือน</a><br>
                    <a href="#">ค่าน้ำ ' . $water .' บาท / เดือน</a><br>
                    <a href="#">ค่าอินเทอร์เน็ต ' . $internet .' บาท / เดือน</a><br>
                    <a href="#">ค่าประกันหอ ' . $dorm .' บาท / เดือน</a><br>
                    <a href="#">ค่าโทรศัพท์ ' . $phone .' บาท / เดือน</a><br>
                    <a href="#">ค่าอื่น ๆ ' . $extra_fee .' บาท / เดือน</a><br>
                </h6>
            </div>

            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-road" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                <h6 class="mb-0 font-size-14 text-gray-1">
                    <a href="#">ระยะทางจากหน้ามหาวิทยาลัย ' . $road .' เมตร</a>
                </h6>
            </div>

            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-motorcycle" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                <h6 class="mb-0 font-size-14 text-gray-1">
                    <a href="#">ความจุที่จอดรถ ' . $parking .' คัน</a>
                </h6>
            </div>
            
            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-paw" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                <h6 class="mb-0 font-size-14 text-gray-1">
                    <a href="#">เลี้ยงสัตว์ ' . $pet .'</a>
                </h6>
            </div>

            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-cutlery" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                <h6 class="mb-0 font-size-14 text-gray-1">
                    <a href="#">ทำอาหาร ' . $cook .'</a>
                </h6>
            </div>
            
        </div>
    </div>';
    }
    
?>