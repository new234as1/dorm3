<html lang="th-TH" ng-app="myapp">
    <head>
        <style>
            .green-lighter {font-size: 1rem;}
            h3{
                margin-left: 80;
            }
            .img-fluid {
                width: auto !important; 
                height: 150px !important;
            }
        </style>
        <link href="" rel="icon">
        <title>หอพัก หน้ามหาวิทยาลัยพะเยา</title>
<?php   include './bo_head.php'; ?>
    </head>
    <body ng-controller="detailContoller" ng-init="dormid='<?php echo $_GET["dormid"]; ?>'; dorm();">
    <?php
        include './index_navbar.html';
    ?>


<main id="content" ng-init="selectcompare()">
    <!-- Breadcrumb -->
    
    <?php
    include_once 'db_connect.php';
    $sql = "SELECT * FROM `dorm_master` 
    LEFT JOIN `dorm_zone` ON (`dorm_master`.id_zone = `dorm_zone`.id_zone)
    LEFT JOIN `totalstar` ON (`dorm_master`.`id_dorm` = `totalstar`.`dorm_id`) 
   LEFT JOIN `master_room` ON (`dorm_master`.`id_dorm` = `master_room`.`id_dorm`)
   LEFT JOIN `other` ON (`dorm_master`.`id_dorm` = `other`.`id_dorm`)
WHERE `dorm_master`.`id_dorm` IN ('{$_GET['id1']}', '{$_GET['id2']}')
";
//  echo $sql; return false;
 $result = $mysqli->query($sql);
echo '<h3>เปรียบเทียบหอพัก</h3>';
echo '<div class="row" style="justify-content: center;">';
  while($r = $result -> fetch_assoc()) {

    echo '<div class="card border-color-7 mb-5 overflow-hidden d-flex flex-row" style="width: 45%; ";>
    <div class="product-item__outer w-100">
    <div class="row">
        <div class="col-md-5 col-lg-5 col-xl-3dot5">
            <div class="pt-5 pb-md-5 pl-4 pr-4 pl-md-5 pr-md-2 pr-xl-2">
                <div class="product-item__header mt-2 mt-md-0">
                    
                </div>
            </div>
        </div>
        <div class="col col-md-7 col-lg-7 col-xl-5 flex-horizontal-center pl-xl-0">
            <div class="w-100 position-relative m-4 m-md-0">
                <a href="../hotels/hotel-booking.html" class="mb-2 d-inline-block"><br>
                <div class="position-relative">
                        <img class="img-fluid rounded-sm" src="./img/introdorm/'. $r["thumbnail"] .'" alt="Image Description">
                    </div>
                    <span class="font-weight-bold font-size-17 text-dark text-dark"> <br>ชื่อหอพัก : ' . $r["dorm_name"] .'&nbsp;&nbsp;ตั้งอยู่ : ' . $r["zone_name"] .' </span>
                </a>
                <div class="mt-1 pt-2">
                    <div class="d-flex mb-1">
                    <div class="d-flex align-items-center mb-2">
                    
                    <h6 class="mb-0 font-size-14 text-gray-1">
                        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px;   color: royalblue; "></i>&nbsp;&nbsp;
                        ที่อยู่ : ' . $r["address"] .'<br>
                        <i class="fa fa-bolt" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ค่าไฟฟ้า ' . $r["electric_unit"] .' บาท / เดือน<br>
                        <i class="fa fa-tint" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ค่าน้ำ ' . $r["water_bill"] .' บาท / เดือน<br>
                        <i class="fa fa-globe" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ค่าอินเทอร์เน็ต ' . $r["internet_bill"] .' บาท / เดือน<br>
                        <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ค่าประกันหอ ' . $r["ins_fee"] .' บาท / เดือน<br>
                        <i class="fa fa-phone" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ค่าโทรศัพท์ ' . $r["telephone_bill"] .' บาท / เดือน<br>
                        <i class="fa fa-archive" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ค่าอื่น ๆ ' . $r["extra_fee"] .' บาท / เดือน<br>
                        <i class="fa fa-road" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ระยะทางจากหน้ามหาวิทยาลัย ' . $r["distance"] .' เมตร<br>
                        <i class="fa fa-motorcycle" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ความจุที่จอดรถ ' . $r["parking_size"] .' คัน<br>
                        <i class="fa fa-paw" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        เลี้ยงสัตว์ ' . $r["pet"] .'<br>
                        <i class="fa fa-cutlery" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        ทำอาหาร ' . $r["cook"] .'<br>
                        <span class="font-size-14">ราคา </span>
                        <span class="font-weight-bold font-size-22 ml-1">' . $r["Room_rate"] .'</span>
                        <span class="font-size-14"> บาท/ เดือน</span><br>
                        <i class="fa fa-star" aria-hidden="true" style="font-size: 20px;   color: royalblue;" ></i>&nbsp;&nbsp;
                        คะแนนโดยเฉลี่ย : <span class="font-weight-bold font-size-22 ml-1">' . $r["total"] .'</span> คะแนน <br>
                        <a href="../hotels/hotel-booking.html" class="btn btn-outline-primary border-radius-3 border-width-2 px-4 font-weight-bold min-width-200 py-2 text-lh-lg">จอง</a>
                    </h6>
                    
                 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>';
  }
  echo '<hr>';
  echo '</div>';
?>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
        <h4>สรุปผล</h4> <?php
                    
        ?>
        </div>
    </div>
</footer>
   
</main>
<?php
include './index_footer.php';
?>
<script>
   $('.single-item').slick();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="Page.js?p=<?php echo filemtime('Page.js'); ?>"></script>
</body>
</html>
