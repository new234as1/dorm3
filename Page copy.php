<html lang="th-TH" ng-app="myapp">
    <head>
        <style>
            .green-lighter {font-size: 1rem;}

            .a {
                 border-bottom: 1px solid #ebf0f7 !important;
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


<main id="content">
    <!-- End Breadcrumb -->
    <div class="mb-8">
        <!-- Images Carousel -->
        <div class="js-slick-carousel u-slick u-slick__img-overlay slick-initialized slick-slider slick-dotted" data-arrows-classes="d-none d-md-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-md-4 ml-xl-8"
            data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-md-4 mr-xl-8" data-infinite="true" data-slides-show="1" data-slides-scroll="1" data-center-mode="true" data-pagi-classes="d-md-none text-center u-slick__pagination mt-5 mb-0"
            data-center-padding="450px" data-responsive="[{
                &quot;breakpoint&quot;: 1480,
                &quot;settings&quot;: {
                    &quot;centerPadding&quot;: &quot;300px&quot;
                }
            }, {
                &quot;breakpoint&quot;: 1199,
                &quot;settings&quot;: {
                    &quot;centerPadding&quot;: &quot;200px&quot;
                }
            }, {
                &quot;breakpoint&quot;: 992,
                &quot;settings&quot;: {
                    &quot;centerPadding&quot;: &quot;120px&quot;
                }
            }, {
                &quot;breakpoint&quot;: 554,
                &quot;settings&quot;: {
                    &quot;centerPadding&quot;: &quot;20px&quot;
                }
            }]">
            



            <div class="slick-list draggable" style="padding: 0px 300px; background-image: url('./img/820x550/img4.jpg');">
                <div class="single-item" > 
                    <?php
                     include("slick.php");
                    ?>
                    <!-- <img class="  mx-auto d-block" ng-src="./img/introdorm/{{x.pic_name}}" alt="img " style="height: auto; width: 705px;"> -->

                </div>
            </div>
            
            <ul class="js-pagination d-md-none text-center u-slick__pagination mt-5 mb-0" style="display: block;" role="tablist">
                <li class="" role="presentation"><span></span></li>
                <li role="presentation" class="slick-active slick-current"><span></span></li>
                <li role="presentation"><span></span></li>
            </ul>
        </div>
        <!-- End Images Carousel -->
    </div>

    <div class="container" >
        <div class="row" >
            <div class="col-lg-8 col-xl-9">
                <div class="d-block d-md-flex flex-center-between align-items-start mb-2">
                    <div class="mb-3">
                        <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap mb-2">
                            <li class="border border-brown bg-brown rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                <span class="font-weight-normal text-white font-size-14">หอพักเอกชน</span>
                            </li>
                            <li class="border border-maroon bg-maroon rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                <span class="font-weight-normal font-size-14 text-white">{{x.zone_name}} </span>
                            </li>
                        </ul>
                        <div class="d-block d-md-flex flex-horizontal-center mb-2 mb-md-0">
                            <h4 class="font-size-23 font-weight-bold mb-1">{{x.dorm_name}}</h4>
                            <div class="ml-3 font-size-10 letter-spacing-2">
                            <?php
                            include_once ('db_connect.php');
                                $sql="SELECT `dorm_id`, ROUND(total, 2) AS  `total`
                                    FROM `totalstar`  
                                    WHERE `dorm_id` like '" . $_GET['dormid'] ."' ORDER BY `total` DESC";         
                                $result = $mysqli -> query($sql);
                                // echo $sql;
                                // echo '<h3>พบ '. $result->num_rows  .' รายการ</h3>';

                                
                                while( $row = $result->fetch_array(MYSQLI_ASSOC) ){          
                                   
                                    if ($row['total']==NULL){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo ' <p style="font-size: 13px; margin-left: 7px;">ยังไม่มีคะแนน</p>';
                                        echo '</span>';
                                    }
                                    else if ($row['total']<1.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star-half"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']==1.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']<2.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-half"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']==2.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']<3.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-half"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']==3.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']<4.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-half"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']==4.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-o"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']<5.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star-half"></i>';
                                        echo '</span>';
                                    }
                                    else if($row['total']==5.00){
                                        echo '<span class="d-block green-lighter ml-1">';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '<i class="fa fa-star"></i>';
                                        echo '</span>';
                                    }
                                    
                                }
                                ?>  
                            </div>
                        </div>
                        <div class="d-block d-md-flex flex-horizontal-center font-size-14 text-gray-1">
                            <i class="icon flaticon-placeholder mr-2 font-size-20"></i> {{x.address}}
                            <a href="{{x.location_link}}" class="ml-1 d-block d-md-inline"> - View on map</a>
                        </div>
                    </div>
                </div>
                <div id="stickyBlockStartPoint" class="mb-4" style="">
                    <div class="border rounded-pill js-sticky-block p-1 border-width-2 z-index-4 bg-white" data-parent="#stickyBlockStartPoint" data-offset-target="#logoAndNav" data-sticky-view="lg" data-start-point="#stickyBlockStartPoint" data-end-point="#stickyBlockEndPoint"
                        data-offset-top="30" data-offset-bottom="30" style="">
                        <ul class="js-scroll-nav nav tab-nav-pill flex-nowrap tab-nav">
                            <li class="nav-item active">
                                <a class="nav-link font-weight-medium" href="#scroll-description">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                        <span class="tabtext font-weight-semi-bold">Description</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium" href="#scroll-rooms">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                        <span class="tabtext font-weight-semi-bold">Amenities</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium" href="#scroll-amenities">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                        <span class="tabtext font-weight-semi-bold">Review</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-bottom position-relative">
                    <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark active">
                        Description
                    </h5>
                    <p>{{x.dorm_name}}อยู่ในบริเวณ {{x.zone_name}} {{x.zone_description}} {{x.detail}}</p>

                    <div class="collapse" id="collapseLinkExample">
                        <p>ลักษณะของหอพัก : {{x.dorm_type}} <br> 
                        ประเภทหอพัก : {{x.gender}} <br>
                        ประเภทห้องพัก : {{x.Room_type}} <br>
                        จำนวนชั้น : {{x.floors}} ชั้น <br>
                        ขนาดห้องพัก : {{x.room_size}} เมตร <br>
                        จำนวนห้องทั้งหมด : {{x.room}} ห้อง <br>
                        ห้องน้ำ : {{x.br_type}} <br>
                        ปีที่สร้าง : {{x.year}} <br>
                        ค่าประกันหอพัก : {{x.ins_fee}} บาท {{x.ins_condition}} <br>
                        เลี้ยงสัตว์ : {{x.pet}} <br>
                        ทำอาหาร : {{x.cook}} <br>
                        พนักงานประจำหอ : {{x.security}}
                        </p>
                    </div>

                    <a class="link-collapse link-collapse-custom gradient-overlay-half mb-5 d-inline-block border-bottom border-primary" data-toggle="collapse" href="#collapseLinkExample" role="button" aria-expanded="false" aria-controls="collapseLinkExample">
                        <span class="link-collapse__default font-size-14">View More <i class="flaticon-down-chevron font-size-10 ml-1"></i></span>
                        <span class="link-collapse__active font-size-14">View Less <i class="flaticon-arrow font-size-10 ml-1"></i></span>
                    </a>
                </div>
                <div class="border-bottom py-4">
                    <h5 id="scroll-rooms" class="font-size-21 font-weight-bold text-dark mb-4 active">
                        หอพักอื่น ๆ
                    </h5>
                    <?php
                     include("recdorm.php");
                    ?>
                    <h5 id="scroll-amenities" class="font-size-21 font-weight-bold text-dark mb-4 active">
                        Amenities
                    </h5>
                    
                    <?php
                     include("conven.php");
                    ?>
                    <div class="a">
                            </div>
                    <!-- <ul class="list-group list-group-borderless list-group-horizontal list-group-flush no-gutters row">
                        <li class="col-md-4 list-group-item"><i class="flaticon-wifi-signal mr-3 text-primary font-size-24"></i>Wifi</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-alarm mr-3 text-primary font-size-24"></i>Wake-up call</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-bathrobe mr-3 text-primary font-size-24"></i>Bathrobes</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-weightlifting mr-3 text-primary font-size-24"></i>Fitness center</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-phone-call mr-3 text-primary font-size-24"></i>Telephone</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-folded-towel mr-3 text-primary font-size-24"></i>Dry cleaning</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-wine-glass mr-3 text-primary font-size-24"></i>Mini bar</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-hair-dryer mr-3 text-primary font-size-24"></i>Hair dryer</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-desk-chair mr-3 text-primary font-size-24"></i>High chair</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-hamburger mr-3 text-primary font-size-24"></i>Restaurant</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-air-conditioner mr-3 text-primary font-size-24"></i>Air Conditioning</li>
                        <li class="col-md-4 list-group-item"><i class="flaticon-slippers mr-3 text-primary font-size-24"></i>Slippers</li>
                    </ul> -->
                </div>
                <!-- <div class="border-bottom py-4">
                    <h5 id="scroll-reviews" class="font-size-21 font-weight-bold text-dark mb-4 active">
                        Average Reviews
                    </h5>
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="border rounded flex-content-center py-5 border-width-2">
                                <div class="text-center">
                                    <h2 class="font-size-50 font-weight-bold text-primary mb-0 text-lh-sm">
                                        4.2<span class="font-size-20">/5</span>
                                    </h2>
                                    <div class="font-size-25 text-dark mb-3">Very Good</div>
                                    <div class="text-gray-1">From 40 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h6 class="font-weight-normal text-gray-1 mb-1">
                                        Cleanliness
                                    </h6>
                                    <div class="flex-horizontal-center mr-6">
                                        <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-3 text-primary font-weight-bold">
                                            4.8
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="font-weight-normal text-gray-1 mb-1">
                                        Facilities
                                    </h6>
                                    <div class="flex-horizontal-center mr-6">
                                        <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-3 text-primary font-weight-bold">
                                            1.4
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="font-weight-normal text-gray-1 mb-1">
                                        Value for money
                                    </h6>
                                    <div class="flex-horizontal-center mr-6">
                                        <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-3 text-primary font-weight-bold">
                                            3.2
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="font-weight-normal text-gray-1 mb-1">
                                        Service
                                    </h6>
                                    <div class="flex-horizontal-center mr-6">
                                        <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-3 text-primary font-weight-bold">
                                            5.0
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="font-weight-normal text-gray-1 mb-1">
                                        Location
                                    </h6>
                                    <div class="flex-horizontal-center mr-6">
                                        <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ml-3 text-primary font-weight-bold">
                                            4.8
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="py-4">
                    <h5 class="font-size-21 font-weight-bold text-dark mb-6" style=" margin-bottom: 0px!important;"><br><br><br>
                        Write a Review
                    </h5>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3"><hr>

                            <form action="connectrat.php" method="post">
                                <div class="form-group">
                                    <label for="">Rating</label>
                                    <div id="rateYo"></div>
                                </div>
                                <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                <label for="">Feedback</label>
                                    <input type="text" class="form-control" name="feedback">
                                    <input type="hidden" name="rating" id="rating">
                                    <input type="hidden" name="dorm" value="<?php echo $_GET['dormid'] ?>">
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="mb-4">
                    <div class="flex-horizontal-center">
                        <ul class="ml-n1 list-group list-group-borderless list-group-horizontal custom-social-share">
                            <li class="list-group-item px-1 py-0">
                                <!-- <a href="#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                    <i class="flaticon-like font-size-18 text-dark"></i>
                                </a> -->
                            </li>
                            <!-- <li class="list-group-item px-1 py-0">
                                <a href="#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                    <i class="flaticon-share font-size-18 text-dark"></i>
                                </a>
                            </li> -->
                        </ul>
                        <div class="flex-horizontal-center ml-2">
                            <div class="badge-primary rounded-xs px-1">
                                <span class="badge font-size-19 px-2 py-2 mb-0 text-lh-inherit">{{x.total}} /5 </span>
                            </div>

                            <div class="ml-2 text-lh-1">
                                <div class="ml-1">
                                    <h4 class="text-primary font-size-17 font-weight-bold mb-0">จำนวนผู้เข้าชม</h4>
                                    <span class="text-gray-1 font-size-14">จำนวนผู้เข้าชมยังไม่ได้ทำโปรแกรม</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled d-md-flex mb-5">
                    <li class="border border-violet-1 bg-violet-1 rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mb-2 mb-md-0">
                        <span class="font-weight-normal font-size-14 text-white">{{x.phone}}</span>
                    </li>
                    <li class="border border-violet-1 rounded-xs d-flex align-items-center text-lh-1 py-1 px-4 ml-md-n1 mb-2 mb-md-0">
                        <span class="font-weight-normal font-size-14 text-violet-1">เบอร์ติดต่อ</span>
                    </li>
                </ul>
                <div class="mb-4">
                    <div id="stickyBlockStartPoint1" style="">
                        <div class="js-sticky-block border border-color-7 rounded mb-5 bg-white" data-parent="#stickyBlockStartPoint1" data-offset-target="#logoAndNav" data-sticky-view="lg" data-start-point="#stickyBlockStartPoint1" data-end-point="#stickyBlockEndPoint1" data-offset-top="30"
                            data-offset-bottom="30" style="">
                            <div class="border-bottom">
                                <div class="p-4">
                                    <span class="font-size-14">ราคา</span>
                                    <span class="font-size-24 text-gray-6 font-weight-bold ml-1">{{x.Room_rate}}</span>
                                    <span class="font-size-14"> / เดือน</span>
                                    <br>
                                    <span class="font-size-14">ค่าไฟฟ้า</span>
                                    <span class="font-size-24 text-gray-6 font-weight-bold ml-1">{{x.electric_unit}}</span>
                                    <span class="font-size-14">บาท / หน่วย</span>
                                    <br>
                                    <span class="font-size-14">ค่าน้ำ</span>
                                    <span class="font-size-24 text-gray-6 font-weight-bold ml-1">{{x.water_bill}}</span>
                                    <span class="font-size-14">บาท / คน/ เดือน</span>
                                    <br>
                                    <span class="font-size-14">ค่าอินเตอร์เน็ต</span>
                                    <span class="font-size-24 text-gray-6 font-weight-bold ml-1">{{x.internet_bill}}</span>
                                    <span class="font-size-14">บาท / เดือน</span>
                                    <br>
                                    <span class="font-size-14">ค่าโทรศัพท์</span>
                                    <span class="font-size-24 text-gray-6 font-weight-bold ml-1">{{x.telephone_bill}}</span>
                                    <span class="font-size-14">บาท / เดือน</span>
                                    <br>
                                    <span class="font-size-14">ค่าอื่น ๆ</span>
                                    <span class="font-size-24 text-gray-6 font-weight-bold ml-1">{{x.extra_fee}}</span>
                                    <span class="font-size-14">บาท / เดือน</span>
                                </div>
                            </div>
                            <div class="p-4">

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary height-60 w-100 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>จอง</button>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-Success height-60 w-100 mb-xl-0 mb-lg-1 transition-3d-hover" data-toggle="modal" data-target="#myModal" ng-click="listcompare();"><i class="fa fa-compress" aria-hidden="true"></i>&nbsp; เปรียบเทียบ</button>
                                
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header" >
                                            <h5 class="modal-title" >เปรียบเทียบหอพัก</h5>
                                            <button type="button" class="close" data-dismiss="modal" >&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <ul>
                                                <li ng-repeat="y in listcompare"><a href="showcompare.php?id1={{x.id_dorm}}&id2={{y.id_dorm}}">{{y.dorm_name}}</a></li>
                                            </ul>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include("poppular.php");
                    ?>
                    <a href="index2.php"> <button type="submit" class="btn btn-primary height-60 w-100 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>หอพักแนะนำ</button> </a>
                </div>
            </div>
        </div>
        
    </div>
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
