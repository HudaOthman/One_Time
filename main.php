<?php
ob_start();
include "header1.php";
include 'dashboard/database.php';
   $id=intval($_GET['id']);
$s="SELECT * FROM news WHERE id='$id'"; 
     $re = mysqli_query($conn,$s); 
     $po=mysqli_fetch_assoc($re);



if($id > 0 &&($po!=null)){    
     $sql="SELECT * FROM news WHERE id='$id'"; 
     $result = mysqli_query($conn,$sql); 
     $post=mysqli_fetch_assoc($result);
     $view=$post['view']+1;
 
    $mod="UPDATE news SET view='$view'
WHERE id = '$id'";
    $update=mysqli_query($conn,$mod);
}else{
    header('Location:body.php');
}


?>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v10.0" nonce="l3jWXKCK"></script>
</body>
<main>


    <div class="container">
        <div class="bredcrumb mar-60">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="body.php">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الاخبار</li>
                </ol>
            </nav>
        </div>
        <div class="row ">
            <div class="col-md-8">
                <div class="post-box-lg mt-30">

                    <h3 class="mb-30">
                        <?php echo $post['title']?> </h3>

                    <div class="img-post">
                        <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" style="width: 100% ; height: 400px" alt="">
                    </div>
                    <div class="text-post  ">


                        <div class="share d-flex justify-content-between">
                            <span class="date font-weight-bold">
                                <i class="fas fa-calendar-alt ml-2 "></i><?php echo $post['date']?>
                            </span>
                            <div class=" social-sh justify-content-end share-social-info pl-2">

                                <span>مشاركة عبر :</span>
                                <a href="#"><i class="fa fa-facebook" style="padding-right:14px"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        <p class="px-2 py-3 font-size-16">

                            <?php echo $post['contain']?>
                        </p>

                    </div>


                </div>
                <!-- Contenedor Principal -->
                <div class="comments-container mt-30 mb-30">
                    <h4>التعليقات</h4>
                    <div class="fb-comments" data-href="http://localhost/turk-ecno/post.php" data-width="" data-numposts=""></div>

                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="title d-flex p-1">
                    <h6 class=" pr-3 font-weight-bold ">أخبار ذات صلة </h6>
                    <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i></button>
                </div>
                <div class="news-box-related box">
                    <div class="travel-box  pt-2 ">
                        <?php 
                        $sql="SELECT * FROM news WHERE category_id=33 LIMIT 1"; 
                $result = mysqli_query($conn,$sql); 
                        if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                        <div class="travel-img">
                            <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                        </div>
                        <div class="travel-text">

                            <h6 class="pt-1 mb-0 font-weight-bold">
                                <a href="main.php?id=<?php echo $post['id']?>">
                                    <?php echo $post['title']?>
                                </a>
                            </h6>
                            <span class="dateN">
                                <i class="fas fa-calendar-alt ml-2  pb-2"></i><?php echo $post['date']?>
                            </span>
                        </div>
                    </div>
                    <?php }} ?>

                    <?php 
                    $sql="SELECT * FROM news WHERE category_id=33 LIMIT 3"; 
                    $result=mysqli_query($conn,$sql); 
                     if((mysqli_num_rows($result) )> 0){ 
                     while($post =mysqli_fetch_assoc($result)){ 
                    ?>
                    <div class="relate-box mt-30 d-flex">

                        <div class="relate-img col-md-6 ">
                            <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" style="width:150px; hieght: 100px " alt="">
                        </div>
                        <div class="relate-text  mt-1">
                            <a href="main.php?id=<?php echo $post['id']?>">


                                <h6><?php echo $post['title']?>
                                </h6>
                            </a>
                            <span class="date font-weight-bold">
                                <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                            </span>

                        </div>
                    </div>
                    <?php }} ?>
                </div>



                <div class="title d-flex p-1 mar-60">
                    <h6 class=" pr-3 font-weight-bold"> اقرأ أيضا </h6>
                    <button class="more px-2">المزيد <i class="fas fa-chevron-left"></i></button>
                </div>

                <div class="news-box-related box">
                    <div class="travel-box  pt-2 ">
                        <?php 
                        $sql="SELECT * FROM news  ORDER BY id DESC LIMIT 1"; 
                $result = mysqli_query($conn,$sql); 
                        if((mysqli_num_rows($result) )> 0){
               while($post=mysqli_fetch_assoc($result)){  ?>
                        <div class="travel-img">
                            <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                        </div>
                        <div class="travel-text">

                            <h6 class="pt-1 mb-0 font-weight-bold">
                                <a href="main.php?id=<?php echo $post['id']?>">
                                    <?php echo $post['title']?>
                                </a>
                            </h6>
                            <span class="dateN">
                                <i class="fas fa-calendar-alt ml-2  pb-2"></i><?php echo $post['date']?>
                            </span>
                        </div>
                    </div>
                    <?php }} ?>

                    <?php 
                    $sql="SELECT * FROM news ORDER BY id DESC LIMIT 3"; 
                    $result=mysqli_query($conn,$sql); 
                     if((mysqli_num_rows($result) )> 0){ 
                     while($post =mysqli_fetch_assoc($result)){ 
                    ?>
                    <div class="relate-box mt-30 d-flex">

                        <div class="relate-img col-md-6 ">
                            <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" style="width:150px; hieght: 100px " alt="">
                        </div>
                        <div class="relate-text  mt-1">

                            <h6> <a href="main.php?id=<?php echo $post['id']?>">
                                    <?php echo $post['title']?>
                                </a>
                            </h6>
                            <span class="date font-weight-bold">
                                <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                            </span>

                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include 'footer1.php';
?>
