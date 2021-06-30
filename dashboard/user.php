<?php 
include 'header.php'; 
include 'main.php';
include 'database.php';

if(isset($_GET['del'])){
    $name=$_GET['del'];
    $sql="DELETE FROM user WHERE name='$name'";
   $result= mysqli_query($conn,$sql);
    if($result){
          $suc="تم الحذف";
      }else{
          $err= "عذرا لم يتم الحذف";
      }
}

?>
<div class="page-wrapper" style="display:block">
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-body">
                    <h4 class="card-title">عرض المستخدمين </h4>
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
                                        <th>الاسم</th>
                                        <th>الايميل</th>
                                        <th>نبذة</th>
                                        <th>كلمة السر</th>
                                        <th>مستخدم/ادمن</th>
                                        <th>اجراءات</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
if((mysqli_num_rows($result) )> 0){
while($user=mysqli_fetch_assoc($result)){
    $name= $user['name'];
   
    
?>
                                <tr>
                                        <td><?php echo $user['name']?></td>
                                       <td><?php echo $user['email']?></td>
                                        <td><?php echo $user['bio']?></td>
                                        <td><?php echo $user['password']?></td>
                                        <td><?php echo $user['role']?></td>

                                        <td>
                                            <a  name="show" href="email.php" class="btn btn-primary">عرض</a>
                                            <a type="submit" name="del"  href="user.php?del=<?php echo $name?>
                                               "  class="btn btn-danger">حذف</a>
                                        </td>

                                    </tr>
                                    <?php }}?>
                                </tbody></table></div></div></div></div></div></div>
                     


<?php
include 'footer.php';?>
