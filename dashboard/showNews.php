<?php 
include 'header.php';
include 'main.php';
include 'database.php';
if(isset($_GET['del'])){
    $id=$_GET['del'];
    $sql="DELETE FROM news WHERE id='$id'";
   $result= mysqli_query($conn,$sql);
    if($result){
          $suc="تم الحذف";
      }else{
          $err= "عذرا لم يتم الحذف";
      }
}

?>

<div class="page-wrapper" style="display:block">

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- File export -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">عرض الاخبار</h4>
     <?php if(isset($suc)){?>
                            <div class="alert alert-success" role="alert"><?php echo $suc?></div> 

    <?php } ?>
                                     <?php if(isset($err)){?>
                            <div class="alert alert-danger" role="alert"><?php echo $err?></div> 

    <?php } ?>
                        <div class="table-responsive">
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم القسم</th>
                                        <th>اسم الخبر</th>
                                        <th>الوصف</th>
                                        <th>الصورة</th>
                                        <th>اجراءات</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$sql="SELECT * FROM news";
$result=mysqli_query($conn,$sql);
if((mysqli_num_rows($result) )> 0){
while($new=mysqli_fetch_assoc($result)){
    $id= $new['id'];
   
    
?>
                                    <tr>
                                        <td><?php echo $new['id']?></td>
                                        <?php
        $cat_id=$new['category_id'];
                                        $s="SELECT * FROM categories WHERE id='$cat_id'";
    $re=mysqli_query($conn,$s);
    $cat=mysqli_fetch_assoc($re); 
        ?>                                 <td><?php echo $cat['name'] ?></td>
                                        <td><?php echo $new['title']?></td>
                                        <td><?php echo $new['contain']?></td>
                                        <td><img src="images/<?php echo $new['img']?>" alt="" height="100px" width="150px"></td>

                                        <td>
                                            <a  name="mod" href="editNews.php?mod=<?php echo $id?>
                                               " class="btn btn-primary">تعديل</a>
                                            <a type="submit" name="del" href="showNews.php?del=<?php echo $id?>
                                               " class="btn btn-danger">حدف</a>
                                        </td>

                                    </tr>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php 
include 'footer.php';
?>
