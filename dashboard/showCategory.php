<?php 

include 'header.php';
include 'main.php';
include 'database.php';
if(isset($_GET['del'])){
    $id=$_GET['del'];
    $sql="DELETE FROM categories WHERE id='$id'";
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
                        <h4 class="card-title">عرض الاقسام</h4>
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
                                        <th>الاسم</th>
                                        <th>الوصف</th>
                                        <th>اجراءات</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$sql="SELECT id,name,description FROM categories";
$result=mysqli_query($conn,$sql);
 if((mysqli_num_rows($result) )> 0){
while($category=mysqli_fetch_assoc($result)){
    $id= $category['id'];
   
    
?>
                                    <tr>
                                        <td><?php echo $category['id']?></td>
                                        <td><?php echo $category['name']?></td>
                                        <td><?php echo $category['description']?></td>

                                        <td>
                                            <a  name="mod" href="editCategory.php?mode=<?php echo $id?>
                                               " class="btn btn-primary">تعديل</a>
                                            <a type="submit" name="del" href="showCategory.php?del=<?php echo $id?>
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
