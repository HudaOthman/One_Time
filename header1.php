<?php

include 'dashboard/database.php';
include 'weather.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />


    <link href="css/style_1.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/responsive-media.css">
    <title>One Time</title>
</head>
<div class="search-page">
    <span class="closeIcon"><i class="fas fa-times"></i></span>
    <div class="search-content">
        <form action="search.php" method="post" class="search-f">
            <input type="text" class="sear px-2 py-3" name="search" placeholder="بحث ..">
            <button type="submit" class="search"><i class="fas fa-search"></i></button>
        </form>
        <? php print("$output"); ?>
    </div>

</div>

<body>

    <header>
        <div class="container">
            <div class="row top-head d-flex">
                <div class="col-md-3 col-5">
                    <div class=" top-social d-flex mt-3">
                        <a href="#" class="search mr-2"> <i class="fas fa-search "></i></a>
                        <a href="#" class="wheather"><i class="fas fa-cloud-sun"></i></a>
                        <a href="#" class="euro"><i class="fas fa-euro-sign"></i></a>
                        <div class="bars">
                            <label class="navbar-toggler check navbar-toggler-left" type="button" data-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon text-center mt-2" id="bars"><i class="fas fa-bars"></i></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-7">
                    <div class="logo mt-4">
                        <img src="images/logo.png" class="img-fluid " alt="">

                    </div>
                </div>
                <div class="col-md-3 top-soc">
                    <div class="top-social d-flex justify-content-end mt-3">
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook "></i></a>
                        <a href="https://www.twitter.com/"> <i class="fab fa-twitter "></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp "></i></a>
                        <a href="https://www.telegram.com/"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>

            </div>
            <div class="menu-web ">
                <div class="nav container d-flex justify-contnet-center">

                    <nav class="navbar navbar-expand-lg    text-light font-weight-bold d-flex justify-content-center ">


                        <div class="collapse navbar-collapse active" id="navbarSupportedContent">

                            <ul class="navbar-nav nav justify-content-center m-auto" style="">
                                <li class="nav-item  active ">
                                    <a class="nav-link text-uppercase mr-3  ml-3 active " id="basic" href="body.php" tabindex="-1"><i class="fas fa-home"></i>الرئيسية</a>
                                </li>
                                <?php
                            $sql   ="SELECT * FROM categories";
                            $result=mysqli_query($conn,$sql);
                                if((mysqli_num_rows($result) )> 0){
                                    while($category=mysqli_fetch_assoc($result)){
                            ?>

                                <li class="nav-item mr-1 ml-3 active">
                                    <a class="nav-link text-uppercase  " href="category.php?id=<?php echo $category['id']?>" ><?php echo $category['name']?></a>
                                </li>
                                <?php }} ?>


                            </ul>

                        </div>

                    </nav>


                </div>

            </div>

            <!--                            start nav mobile                -->

            <div class="navmo-menu menu-on">
                <!-- Menu Close Button -->
                <div class="close">
                    <div class="cross-wrap"><span class="to"></span><i class="fas fa-times text-white"></i><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="nav-mobile m-5">
                    <ul id="nav " class="list-unstyled">
                        <li class="current-item"><a class="mb-2 text-bold text-white  d-inline-block" href="">الرئيسية</a></li>


                        <li><a href="#" class="mb-2 text-bold text-white  d-inline-block"> اقتصاد</a></li>

                        <li><a href="#" class="mb-2 text-bold text-white  d-inline-block"> عقارات </a></li>

                        <li><a href="#" class="mb-2 text-bold text-white  d-inline-block"> منوعات</a></li>
                        <li><a href="#" class="mb-2 text-bold text-white  d-inline-block"> سياحة وسفر</a></li>
                        <li><a href="" class="mb-2 text-bold text-white  d-inline-block">تقنية </a></li>

                        <li><a href="" class="mb-2 text-bold text-white  d-inline-block"> شركات</a></li>
                        <li><a href="" class="mb-2 text-bold text-white  d-inline-block"> وظائف</a></li>
                        <li><a href="" class="mb-2 text-bold text-white  d-inline-block"> سيارات</a></li>
                        <li><a href="" class="mb-2 text-bold text-white  d-inline-block"> اراء ومختارات</a></li>
                    </ul>


                </div>
                <!-- Nav End -->
            </div>
        </div>

    </header>
    <div class="awsem">
        <div class="euro-box">
            <div class="triangle"></div>
            <div class="item-box p-4" style="">
                <h4 class="font-size-16 font-weight-bold text-center mb-4">أسعار العملات</h4>
                <div class="itm d-flex align-items-center  border-bottom pb-3  mt-3">
                    <span class="ml-auto">دولار أمريكي</span>
                    <span class="text-gray-600">3.33</span>
                </div>
                <div class="itm d-flex align-items-center  border-bottom pb-3 mt-3">
                    <span class="ml-auto">يورو</span>
                    <span class="text-gray-600">3.93</span>
                </div>
                <div class="itm d-flex align-items-center  border-bottom pb-3 mt-3">
                    <span class="ml-auto">جنيه مصري</span>
                    <span class="text-gray-600">0.21</span>
                </div>
                <div class="itm d-flex align-items-center  border-bottom pb-3 mt-3">
                    <span class="ml-auto">دينار أردني</span>
                    <span class="text-gray-600">4.7</span>
                </div>
                <div class="itm d-flex align-items-center  pb-1 mt-3">
                    <span class="ml-auto">جنيه إسترليني</span>
                    <span class="text-gray-600">4.59</span>
                </div>
            </div>
        </div>
      
    </div>