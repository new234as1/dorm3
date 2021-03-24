<!---------------------- รายการพอพักเอกชน ------------------------>
<main id="dormitory" class="tabs-block tab-v1 " data-aos="fade-up" style="background-color: whitesmoke;">
    <div class="container space-1 space-bottom-3">
        <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
            <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">รายการหอพัก</h2>
        </div>
        <!-- Nav Classic -->
        <ul class="nav tab-nav-pill flex-nowrap pb-4 pb-lg-5 tab-nav justify-content-lg-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link font-weight-medium active" id="pills-one-example-t1-tab" data-toggle="pill" href="#pills-one-example-t1" role="tab" aria-controls="pills-one-example-t1" aria-selected="true">
                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                        <span class="tabtext font-weight-semi-bold">ทั้งหมด</span>
                    </div>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link font-weight-medium" id="pills-three-example-t1-tab" data-toggle="pill" href="#pills-three-example-t1" role="tab" aria-controls="pills-three-example-t1" aria-selected="true">
                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                        <span class="tabtext font-weight-semi-bold">แนะนำ</span>
                    </div>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link font-weight-medium" id="pills-four-example-t1-tab" data-toggle="pill" href="#pills-four-example-t1" role="tab" aria-controls="pills-four-example-t1" aria-selected="true">
                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                        <span class="tabtext font-weight-semi-bold">Rental</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-medium" id="pills-five-example-t1-tab" data-toggle="pill" href="#pills-five-example-t1" role="tab" aria-controls="pills-five-example-t1" aria-selected="true">
                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                        <span class="tabtext font-weight-semi-bold">Car</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-medium" id="pills-six-example-t1-tab" data-toggle="pill" href="#pills-six-example-t1" role="tab" aria-controls="pills-six-example-t1" aria-selected="true">
                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                        <span class="tabtext font-weight-semi-bold">Yatch</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-medium" id="pills-seven-example-t1-tab" data-toggle="pill" href="#pills-seven-example-t1" role="tab" aria-controls="pills-seven-example-t1" aria-selected="true">
                    <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                        <span class="tabtext font-weight-semi-bold">Flights</span>
                    </div>
                </a>
            </li> -->
        </ul>
        <!-- End Nav Classic -->
        <div class="tab-content">
            <div class="tab-pane fade active show" id="pills-one-example-t1" role="tabpanel" aria-labelledby="pills-one-example-t1-tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1" ng-model="domebo" ng-repeat="x in dormSet track by $index" data-aos="zoom-in" data-aos-delay="300">
                        <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100 ">

                            <div class="position-relative mb-2 ">
                                <div class="ribbon">
                                    <span class="ribbon4">{{x.id_dorm}}</span>
                                </div>
                                <a href="././Page.php?dormid={{x.id_dorm}}&idzone={{x.id_zone}} " class="d-block gradient-overlay-half-bg-gradient-v5 ">
                                    <img class="min-height-230 card-img-top rounded mx-auto d-block" ng-src="./img/introdorm/{{x.thumbnail}}" alt="img ">
                                </a>
                                <!-- <div class="position-absolute top-0 left-0 pt-5 pl-3 ">
                                    <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal ">5%</span>
                                </div> -->
                                <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                    <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top " title=" " data-original-title="Save for later">
                                    <span class="fa fa-heart-o"></span>
                                  </button>
                                </div>
                                <div class="position-absolute bottom-0 left-0 right-0">
                                    <div class="px-3 pb-2 ">
                                        <span class="text-white font-weight-normal font-size-20 ">{{x.dorm_name}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-4 py-2 ">
                                <a href="././Page.php?dormid={{x.id_dorm}} " class="d-block ">
                                    <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1 ">
                                        <i class="icon flaticon-pin-1 mr-2 font-size-15 "></i>{{x.zone_name}}, พะเยา
                                    </div>
                                </a>
                                <a href="././Page.php?dormid={{x.id_dorm}} " class="card-title text-dark font-size-17 font-weight-bold ">{{x.address}}</a>
                                <div class="my-2 ">
                                    <div class="d-inline-flex align-items-center font-size-17 text-lh-1 ">
                                    <div class="green-lighter mr-2 ">
                                        <?php
                                        $a = "{{1*x.total}}"; $x=0;
                                        $b= $a;
                                        echo $b;
                                        // for( $i=1; $i<=$a; $i++){    
                                        //     $x+=$i;      
                                        //     echo '<i class="fas fa-star text-warning"></i>';
                                        // }
                                        // if($x<$a){
                                        //     echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                        // }
                                        //     if ($row['total']==NULL){
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo ' <p style="font-size: 13px; margin-left: 7px;">ยังไม่มีคะแนน</p>';
                                        //     }
                                        //     else if ($row['total']<1.00){
                                        //         echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']==1.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']<2.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']==2.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']<3.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']==3.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']<4.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']==4.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="far fa-star text-warning"></i>';
                                        //     }
                                        //     else if($row['total']<5.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star-half-alt text-warning"></i>';
                                        //     }
                                        //     else if($row['total']==5.00){
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //         echo '<i class="fas fa-star text-warning"></i>';
                                        //     }
                                        echo '</div>';
                                        ?>
                                        
                                        <span class="text-secondary font-size-14 mt-1 ">คะแนน จากผู้ใช้งาน</span>
                                    </div>
                                </div>
                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1 ">
                                    <i class="p_w wifi mr-2 " title="อินเตอร์เน็ต Wifi "><img src="icons/wifi.svg"></i>
                                    <i class="mr-2 font-size-15" title="อินเตอร์เน็ต Lan"><img src="icons/globe.svg" class="p_w wifi"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="list-pagination-1 pagination border border-color-4 rounded-sm mb-5 mb-lg-0 overflow-auto overflow-xl-visible justify-content-md-center align-items-center py-2" 
                        >
                            <li class="page-item" >
                                <a class="page-link border-right rounded-0 text-gray-5" href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left font-size-23 font-weight-bold"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item" 
                            ng-repeat="xx in buttonSet track by $index"
                            ng-click="dormbo1(xx)">
                            <a class="page-link font-size-14" href="#" >{{xx+1}}</a></li>
                            <li class="page-item">
                                <a class="page-link border-left rounded-0 text-gray-5" href="#" aria-label="Next">
                                    <i class="fa fa-angle-right font-size-23 font-weight-bold"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- <div id="loadMore " data-aos="zoom-in " data-aos-delay="500 ">
                        <a href="# ">Load More</a>
                    </div> -->

                </div>
               
                    
                      
                    </div>
                </div>
            </div>
            
                            </div>
                        </div>
                    </div>
                    <div id="loadMore ">
                        <a href="# ">Load More</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>