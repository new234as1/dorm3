<html lang="th-TH" ng-app="myapp">
    <head>

        <link href="" rel="icon">
        <title>หอพัก หน้ามหาวิทยาลัยพะเยา</title>
<?php   include './bo_head.php'; ?>
    </head>
    <body ng-controller="detailContoller" ng-init="dormid='<?php echo $_GET["dormid"]; ?>'; dorm();">
    <?php
        include './index_navbar.html';
    ?>

<main id="content" >
    <!-- Breadcrumb -->
    <div class="border-bottom">
        <div class="container">
            <nav class="py-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter mb-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="#">Home</a></li>
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="#">Hotels</a></li>
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="#">London Hotels</a></li>
                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Park Avenue Baker Street London</li>
                </ol>
            </nav>
        </div>
    </div>
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
            <div class="js-prev d-none d-md-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-md-4 ml-xl-8 slick-arrow" style=""></div>



            <div class="slick-list draggable" style="padding: 0px 300px; background-image: url('./img/820x550/img4.jpg');">
                <div class="slick-track"> 
                    <img class="  mx-auto d-block" ng-src="./img/introdorm/1432865280.jpg" alt="img " style="height: auto; width: 705px;">
                
                </div>
            </div>
            <div class="js-next d-none d-md-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-md-4 mr-xl-8 slick-arrow" style=""></div>
            <ul class="js-pagination d-md-none text-center u-slick__pagination mt-5 mb-0" style="display: block;" role="tablist">
                <li class="" role="presentation"><span></span></li>
                <li role="presentation" class="slick-active slick-current"><span></span></li>
                <li role="presentation"><span></span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row" >
            <div class="col-lg-8 col-xl-9">
                <div class="d-block d-md-flex flex-center-between align-items-start mb-2">
                    <div class="mb-3">
                        <ul class="list-unstyled mb-2 d-md-flex flex-lg-wrap flex-xl-nowrap mb-2">
                            <li class="border border-brown bg-brown rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0">
                                <span class="font-weight-normal text-white font-size-14">หอพักเอกชน</span>
                            </li>
                            <li class="border border-maroon bg-maroon rounded-xs d-flex align-items-center text-lh-1 py-1 px-3 mr-md-2 mb-2 mb-md-0 mb-lg-2 mb-xl-0 mb-md-0">
                                <span class="font-weight-normal font-size-14 text-white">{{body3set.zone_name}}</span>
                            </li>
                        </ul>
                        <div class="d-block d-md-flex flex-horizontal-center mb-2 mb-md-0">
                            <h4 class="font-size-23 font-weight-bold mb-1">{{x.dorm_name}}</h4>
                            <div class="ml-3 font-size-10 letter-spacing-2">
                                <span class="d-block green-lighter ml-1">
                                    <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                </span>
                            </div>
                        </div>
                        <div class="d-block d-md-flex flex-horizontal-center font-size-14 text-gray-1">
                            <i class="icon flaticon-placeholder mr-2 font-size-20"></i> {{x.address}}
                            <a href="{{x.location_link}}" class="ml-1 d-block d-md-inline"> - View on map</a>
                        </div>
                    </div>
                </div>
               
                
               
                <div class="py-4">
                    <h5 class="font-size-21 font-weight-bold text-dark mb-6">
                        Write a Review
                    </h5>
                    <div class="row">
                    <?php include_once ("connectrat.php"); ?>
                        <div class="col-md-6 col-md-offset-3">
                        <br><br>
                            <h2>Rate this Product</h2><hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Rating</label>
                                    <div id="rateYo"></div>
                                </div>
                                <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                <label for="">Feedback</label>
                                    <input type="text" class="form-control" name="feedback">
                                    <input type="text" name="rating" id="rating">
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
include './index_footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="Page.js?p=<?php echo filemtime('Page.js'); ?>"></script>
</body>
</html>