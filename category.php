<?php 
include 'header1.php'; 
include 'dashboard/database.php';
$category_id=$_GET['id'];
$sql="SELECT * FROM categories WHERE id='$category_id'";
$result=mysqli_query($conn,$sql);
$category=mysqli_fetch_assoc($result);
 ?>
<main>


    <div class="container">
        <div class="bredcrumb mar-60 ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="body.php">الرئيسية</a></li>
                    <li class="breadcrumb-item active"><?php echo' '. $category['name'] ?></li>
                </ol>
            </nav>
        </div>
        <div class="row d-flex ">
            <?php 
            	$sql="SELECT * FROM news WHERE category_id='$category_id'";
            	$result=mysqli_query($conn,$sql);
                        if((mysqli_num_rows($result) )> 0){
            	while($post=mysqli_fetch_assoc($result)){
                ?>

            <div class="col-md-4">
                <a href="main.php?id=<?php echo $post['id']?>">
                    <div class="new-box shadow rounded pb-2 mt-30 ">
                        <div class="img-box">
                                <div class="img-new">
                                   <img src="dashboard/images/<?php echo $post['img']?>" class="img-fluid" alt="">
                                </div>
                                <div class="img-text pr-2">
                                    <span class="date">
                                        <i class="fas fa-calendar-alt ml-2"></i><?php echo $post['date']?>
                                    </span>
                                    <a href="main.php?id=<?php echo $post['id']?>">
                                        <h6 class="">
                                            <?php echo $post['title']?>

                                        </h6>
                                    </a>

                                </div>
                            </div>
                        </div>
                </a>
            </div>
            <?php }} ?>
        </div>
    </div>
</main>

<?php 
include 'footer1.php';
?>