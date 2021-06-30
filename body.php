<?php
include "header1.php";
include 'dashboard/database.php'
;


?>
<main>
    <div class="slider  mt-30">
        <div class="container full ">
            <img src="images/5VuE0.jpeg" class="img-fluid w-100" alt="turkey pazzar">
        </div>
    </div>
    <!--    start  news section -->
    <section class="news container mt-30">
        <div class="row">
            <div class="col-md-4">
                <div class="block-content latest  shadow">
                    <div class="block-title pl-2 ">

                        <h5 class="p-3 font-weight-bold">آخر الاخبار</h5>
                    </div>
                    <?php 
                         $sql="SELECT * FROM news ORDER BY id DESC "; 
                         $result =mysqli_query($conn, $sql); 
                    if((mysqli_num_rows($result) )> 0){
                         while($post=mysqli_fetch_assoc($result)){ 
                         ?>

                    <div class="latest-box d-flex">
                        <div class="latest-img col-md-5">
                            <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " alt="">
                        </div>
                        <div class="new-box-text col-md-7">

                            <span class="list-1__date font-weight-bold type"></span>


                            <a href="main.php?id=<?php echo $post['id']?>">
                                <h6 class="pt-1 text-bold"> <?php echo $post['title']?></h6>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <?php } }?>


                </div>
            </div>

            <div class="col-md-5">
                <?php
                   $sql="SELECT * FROM news WHERE category_id=25 LIMIT 1 "; 
                         $result =mysqli_query($conn, $sql); 
                if((mysqli_num_rows($result) )> 0){
                         while($post=mysqli_fetch_assoc($result)){  
                    
                    ?>
                <div class="new-box-lg shadow rounded">
                    <div class="img-new">
                        <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " alt="">
                    </div>
                    <div class="new-text pr-2">
                        <span class="date font-weight-bold">
                            <i class="fas fa-calendar-alt ml-2"></i>,<?php echo $post['date']?> </span> <a href="main.php?id=<?php echo $post['id']?>">
                            <h5 class="font-weight-bold text-white mb-0"><?php echo $post['title']?></h5>
                        </a>
                        <p class="pt-1"><?php echo $post['contain']?> </p>
                    </div>
                </div>
                <?php }} ?>

                <div class="adv mt-30">

                    <img src="images/k7UpZ.png" class="img-fluid " alt="">
                </div>

            </div>
            <div class="col-md-3">
                <?php
                   $sql="SELECT * FROM news  WHERE category_id=24 LIMIT 1 "; 
                         $result =mysqli_query($conn, $sql); 
                if((mysqli_num_rows($result) )> 0){
                         while($post=mysqli_fetch_assoc($result)){  
                    
                    ?>

                <div class="new-box shadow rounded pb-2">
                    <div class="img-box">
                        <div class="img-box">
                            <div class="img-new">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid w-100 " alt="">
                            </div>
                            <div class="img-text pr-2">
                                <span class="date">
                                    <i class="fas fa-calendar-alt ml-2"></i>,<?php echo $post['date']?> </span>
                                     <a href="main.php?id=<?php echo $post['id']?>">
                                    <h6 class="font-weight-bold text-black mb-0"><?php echo $post['title']?></h6>
                                </a>

                            </div>
                        </div>
                    </div>
                </div> <?php }} ?>
                <div class="new-box mt30">
                    <div class="img-box shadow rounded pb-2">
                        <?php
                   $sql="SELECT * FROM news WHERE category_id=22 LIMIT 1 "; 
                         $result =mysqli_query($conn, $sql); 
                        if((mysqli_num_rows($result) )> 0){
                         while($post=mysqli_fetch_assoc($result)){  
                    
                    ?>
                        <div class="new-box shadow rounded pb-2">
                            <div class="img-box">
                                <div class="img-box">
                                    <div class="img-new">
                                        <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " alt="">
                                    </div>
                                    <div class="img-text pr-2">
                                        <span class="date">
                                            <i class="fas fa-calendar-alt ml-2"></i>,<?php echo $post['date']?> </span> <a href="main.php?id=<?php echo $post['id']?>">
                                            <h6 class="font-weight-bold text-black mb-0"><?php echo $post['title']?></h6>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div> <?php }} ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--    end cooktil news section -->

    <!--    start ecnomics news section -->
    <div class="ecnomic-bg">
        <section class="ecnomic container  mar-60">
            <div class="row ">
                <div class="col-md-6">
                    <div class="title d-flex p-1">
                        <h4 class="pr-3 font-weight-bold">اقتصاد تركيا</h4>

                        <a href="category.php?id=17">
                            <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                            </button></a>
                    </div>
                    <?php 
                        $sql="SELECT * FROM news  WHERE category_id=17 LIMIT 1"; 
                $result = mysqli_query($conn,$sql); 
                    if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                    <div class="ecno-post shadow pb-2 rounded">
                        <div class="ecno-img">
                            <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " alt="">
                        </div>
                        <div class="ecno-text pr-2">
                            <a href="main.php?id=<?php echo $post['id']?>">
                                <h6 class="pt-1 font-weight-bold">
                                    <?php echo $post['title']?>
                                </h6>
                            </a>
                            <p class="mb-0"> <?php echo $post['contain']?>
                            </p>
                            <span class="date font-weight-bold">
                                <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                            </span>

                        </div>

                    </div>
                    <?php }} ?>

                    <div class="row d-flex mt30">
                        <?php 
                        $sql="SELECT * FROM news WHERE category_id=17 LIMIT 2"; 
                $result = mysqli_query($conn,$sql); 
                        if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                        <div class="col-md-6  ">

                            <div class="ecno-post ecno1 shadow pb-2 rounded">
                                <div class="ecn-img">
                                    <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid w-100" alt="" style="height:200px !important;width:100%">
                                </div>
                                <div class="ecno-text pr-2">
                                    <span class="date font-weight-bold">
                                        <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                                    </span>
                                    <a href="main.php?id=<?php echo $post['id']?>">
                                        <h6 class="pt-1 font-weight-bold">
                                            <?php echo $post['title']?>
                                        </h6>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <?php }} ?>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="ecno-world">
                        <div class="title d-flex p-1">
                            <h4 class="pr-3 font-weight-bold">اقتصاد العالم </h4>
                            <a href="category.php?id=25">
                                <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                                </button></a>
                        </div>
                        <?php 
                        $sql="SELECT * FROM news  WHERE category_id=25 LIMIT 1"; 
                $result = mysqli_query($conn,$sql); 
                        if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                        <div class="ecno-post shadow pb-2 rounded">
                            <div class="ecno-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " alt="">
                            </div>
                            <div class="ecno-text pr-2">
                                <a href="main.php?id=<?php echo $post['id']?>">
                                    <h6 class="pt-1 font-weight-bold">
                                        <?php echo $post['title']?>
                                    </h6>
                                </a>
                                <p class="mb-0"> <?php echo $post['contain']?>
                                </p>
                                <span class="date font-weight-bold">
                                    <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                                </span>

                            </div>

                        </div>
                        <?php }} ?>

                        <div class="row d-flex mt30">
                            <?php 
                        $sql="SELECT * FROM news WHERE category_id=25 LIMIT 2"; 
                $result = mysqli_query($conn,$sql); 
                            if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                            <div class="col-md-6  ">

                                <div class="ecno-post ecno1 shadow pb-2 rounded">
                                    <div class="ecn-img">
                                        <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " style="height:200px !important;width:100%" alt="">
                                    </div>
                                    <div class="ecno-text pr-2">
                                        <span class="date font-weight-bold">
                                            <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                                        </span>
                                        <a href="main.php?id=<?php echo $post['id']?>">
                                            <h6 class="pt-1 font-weight-bold">
                                                <?php echo $post['title']?>
                                            </h6>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    end ecnomics news section -->

        <!--       start read news section-->
        <section class="read mar-60">
            <div class="container">
                <div class="read-title">
                    <h4>الاكثر قراءة</h4>
                </div>

                <div class="row d-flex">
                    <?php
                $sql="SELECT * FROM news ORDER BY view DESC LIMIT 3";
                $result =mysqli_query($conn,$sql);
                if((mysqli_num_rows($result) )> 0){
                while($post=mysqli_fetch_assoc($result)){
                ?>
                    <div class="col-md-4">

                        <div class="read-box ">
                            <div class="read-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " style="height:200px !important;width:100%" alt="">
                            </div>
                            <div class="read-text px-4 py-1 pl-1">

                                <a href="main.php?id=<?php echo $post['id']?>">
                                    <h6><?php echo $post['title']?></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>

        </section>
        <!--       end read news section-->

        <!--       start travels news section-->
        <section class="travel mar-60 container">
            <div class="col-md-12">
                <div class="title d-flex p-1">
                    <h4 class="pr-3 font-weight-bold">سياحة وسفر </h4>
                    <a href="category.php?id=32">
                        <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                        </button></a>
                </div>
                <?php 
                        $sql="SELECT * FROM news WHERE category_id=32 LIMIT 1"; 
                $result = mysqli_query($conn,$sql); 
                if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                <div class="row">
                    <div class="col-12 col-md-6" style="margin-right:0;">
                        <div class="travel-box-lg">
                            <div class="travel-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid " alt="">
                            </div>
                            <div class="travel-text pr-2">
                                <span class="date font-weight-bold">
                                    <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                                </span>
                                <a href="main.php?id=<?php echo $post['id']?>">
                                    <h6 class="pt-1 font-weight-bold">
                                        <?php echo $post['title']?>
                                    </h6>
                                </a>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <div class="col-12  col-md-3 " style="margin-right:-25px">
                        <?php 
                        $sql="SELECT * FROM news WHERE category_id=32 LIMIT 2"; 
                        if((mysqli_num_rows($result) )> 0){
                $result = mysqli_query($conn,$sql); 
               while($post=mysqli_fetch_assoc($result)){  ?>
                        <div class="travel-box mb-4 ">

                            <div class="travel-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                            </div>
                            <div class="travel-text pr-1 ">

                                <a href="main.php?id=<?php echo $post['id']?>">
                                    <h6 class="pt-1 font-weight-bold  ">
                                        <?php echo $post['title']?>
                                    </h6>
                                </a>
                                <span class="date">
                                    <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                                </span>
                            </div>
                        </div>
                        <?php }} ?>


                    </div>


                    <div class="col-md-3 travel-text-box  w-100" style="margin-right:13px;">
                        <div class="travels-text-box shadow">
                            <?php 
                    $sql="SELECT * FROM news WHERE category_id=32 LIMIT 4"; 
                    $result=mysqli_query($conn,$sql); 
                     if((mysqli_num_rows($result) )> 0){ 
                     while($post =mysqli_fetch_assoc($result)){ 
                    ?>

                            <div class="travels-text mb-3">
                                <span class="date font-weight-bold">
                                    <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                                </span>
                                <a href="main.php?id=<?php echo $post['id']?>">
                                    <h6 class="pt-1"><?php echo $post['title']?> </h6>
                                </a>

                            </div>

                            <hr style="width:100%;margin-right:-8px">
                            <?php }} ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--       end travels news section-->

        <!-- start estate news section-->
        <section class="estate container  mar-60">
            <div class="col-md-12 ">
                <div class="title d-flex p-1">
                    <h4 class="pr-3 font-weight-bold">عقارات </h4>
                    <a href="category.php?id=33">
                        <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                        </button></a>
                </div>
            </div>
            <div class="row" style="margin-right:0px;">

                <?php 
                    $sql="SELECT * FROM news WHERE category_id=33 LIMIT 6"; 
                    $result=mysqli_query($conn,$sql); 
                     if((mysqli_num_rows($result) )> 0){ 
                     while($post =mysqli_fetch_assoc($result)){ 
                    ?>
                <div class="col-md-6">
                    <div class="estate-box mb-30 shadow d-flex">

                        <div class="estate-img">
                            <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                        </div>
                        <div class="estate-text pr-2 mt-4 pl-2">

                            <a href="main.php?id=<?php echo $post['id']?>">
                                <h6 class="pt-1 font-weight-bold  ">
                                    <?php echo $post['title']?>
                                </h6>
                            </a>
                            <span class="date font-weight-bold">
                                <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                            </span>

                        </div>
                    </div>
                </div>
                <?php }} ?>



            </div>
        </section>
        <!-- end estate new section -->

        <!--       start technicals news section-->
        <section class="technical mar-60 container">
            <div class="col-md-12">
                <div class="title d-flex p-1">
                    <h4 class="pr-3 font-weight-bold">تقنية </h4>
                    <a href="category.php?id=34">
                        <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                        </button></a>
                </div>
                <?php 
                        $sql="SELECT * FROM news WHERE category_id=34 LIMIT 1"; 
                $result = mysqli_query($conn,$sql); 
                if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tech-box-lg shadow pb-2 ">
                            <div class="tech-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                            </div>
                            <div class="travel-text pr-2">
                                <span class="date font-weight-bold">
                                    <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                                </span>
                                <a href="main.php?id=<?php echo $post['id']?>">

                                    <h6 class="pt-1"><?php echo $post['title']?> </h6>

                                </a>
                                <p class="pt-1"><?php echo $post['contain']?> </p>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                    <div class="col-md-6">
                        <div class="row">


                            <?php 
                        $sql="SELECT * FROM news WHERE category_id=34 LIMIT 4"; 
                $result = mysqli_query($conn,$sql); 
                            if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                            <div class="col-md-6">
                                <div class="tech-box tech-box-mo shadow pb-2 mb-4">
                                    <div class="tech-img">
                                        <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="travel-text pr-2">
                                        <span class="date font-weight-bold">
                                            <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                                        </span>
                                        <a href="main.php?id=<?php echo $post['id']?>">

                                            <h6 class="pt-1"><?php echo $post['title']?> </h6>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php } }?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--       end technicals news section-->

        <!--       start cokktil news section-->
        <section class="cooktil mar-60 container">
            <div class="col-md-12">
                <div class="title d-flex p-1">
                    <h4 class="pr-3 font-weight-bold">منوعات </h4>
                    <a href="category.php?id=24">
                        <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                        </button></a>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?php 
                    $sql="SELECT * FROM news WHERE category_id=24 LIMIT 4"; 
                    $result=mysqli_query($conn,$sql); 
                     if((mysqli_num_rows($result) )> 0){ 
                     while($post =mysqli_fetch_assoc($result)){ 
                    ?>
                        <div class="estate-box mb-30 shadow d-flex">
                            <div class="estate-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                            </div>
                            <div class="estate-text pr-2 mt-4">

                                <a href="main.php?id=<?php echo $post['id']?>">

                                    <h6 class="pt-1"><?php echo $post['title']?> </h6>

                                </a>
                                <span class="date font-weight-bold">
                                    <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                                </span>

                            </div>
                        </div>
                        <?php }} ?>

                    </div>
                    <div class="col-md-6">
                        <div class="cooktil-box-lg shadow ">
                            <?php 
                        $sql="SELECT * FROM news WHERE category_id=24 LIMIT 1"; 
                $result = mysqli_query($conn,$sql); 
                            if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                            <div class="cooktil-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                            </div>
                            <div class="cooktil-text pr-2">
                                <span class="date font-weight-bold">
                                    <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                                </span>
                                <a href="main.php?id=<?php echo $post['id']?>">

                                    <h6 class="pt-1"><?php echo $post['title']?> </h6>

                                </a>
                                <p class="pb-3"><?php echo $post['contain']?>
                                </p>
                            </div>
                        </div>
                        <?php }} ?>

                    </div>
                </div>
            </div>
        </section>

        <!--       start companies news section-->
        <section class="companies container mar-60">
            <div class="col-md-12">
                <div class="title p-1 mb-0">
                    <h4 class="pr-3 font-weight-bold">شركات </h4>
                    <a href="category.php?id=31">
                        <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                        </button></a>
                </div>

                <div class="row container shadow rounded pt-4 pb-3" style="margin-right:0px;">

                    <?php 
                        $sql="SELECT * FROM news WHERE category_id=31 LIMIT 4"; 
                $result = mysqli_query($conn,$sql);
                    if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                    <div class="col-md-3">
                        <div class="comaney-box">

                            <div class="comp-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="w-100" style="height:180px !important" alt="">
                            </div>
                            <div class="comp-text">
                                <a href="main.php?id=<?php echo $post['id']?>">

                                    <h6 class="pt-1"><?php echo $post['title']?> </h6>

                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>


                </div>
            </div>
        </section>
        <!--       end companies news section-->

        <!--       start cars news section-->
        <section class="companies container  mar-60">
            <div class="col-md-12  ">
                <div class="title p-1 mb-0">
                    <h4 class="pr-3 font-weight-bold">سيارات </h4>
                    <a href="category.php?id=22">
                        <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i>

                        </button></a>
                </div>

                <div class="row container shadow rounded pt-4 pb-3" style="margin-right:0px;">

                    <?php 
                        $sql="SELECT * FROM news WHERE category_id=22 LIMIT 4"; 
                $result = mysqli_query($conn,$sql);
                    if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                    <div class="col-md-3">
                        <div class="comaney-box">

                            <div class="comp-img">
                                <img src="dashboard/images/<?php echo $post['img']?>" class="w-100" style="height:180px !important" alt="">
                            </div>
                            <div class="comp-text">
                                <a href="main.php?id=<?php echo $post['id']?>">

                                    <h6 class="pt-1"><?php echo $post['title']?> </h6>

                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } }?>


                </div>
            </div>
        </section>
        <!--       end cars news section-->


        <?php
include 'footer1.php';
?>
