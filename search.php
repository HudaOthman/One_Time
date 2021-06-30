<?php 
include 'header1.php'; 
include 'dashboard/database.php';
$output="";
if(isset($_POST['search'])){
    
    $searchq=$_POST['search'];
  
}
?>
<div class="container">
        <div class="bredcrumb mar-60 ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="body.php">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">نتيجة البحث عن : <?= $searchq?></li>
                </ol>
            </nav>
    </div>
      <?php
  $query= mysqli_query($conn,"SELECT * FROM news WHERE title LIKE '%$searchq%'") or die("could not search!");
    if( mysqli_num_rows($query)>0) {
        while($posts = mysqli_fetch_assoc($query)){

             ?>
                <a href="main.php?id=<?php echo $posts['id'] ?>">
                   <div class="col-md-3">

                   <div class="new-box shadow rounded pb-2 mt-30 ">
                        <div class="img-box">
                                <div class="img-new">
                                   <img src="dashboard/images/<?php echo $posts['img']?>" class="img-fluid" alt="">
                                </div>
                                <div class="img-text pr-2">
                                    <span class="date">
                                        <i class="fas fa-calendar-alt ml-2"></i><?php echo $posts['date']?>
                                    </span>
                                    <a href="main.php?id=<?php echo $posts['id']?>">
                                        <h6 class="">
                                            <?php echo $posts['title']?>

                                        </h6>
                                    </a>

                                </div>
                            </div>
                       </div></div></a>
             <?php                   
           
       }}
    else{
       echo "لا يوجد نتائج عن البحث!";
    }
    ?>
</div>      

<?php 
include 'footer1.php'; ?>