<?php 
ob_start();
include 'header.php'; 
include 'database.php';
include 'main.php';

$name="";
$description="";

if(isset ($_GET['mode'])){
$id=intval($_GET['mode']);
$s="SELECT * FROM categories WHERE id='$id'"; 
$re = mysqli_query($conn,$s); 
$po=mysqli_fetch_assoc($re);
if($id > 0 &&($po!=null)){
$sql="SELECT id,name,description FROM categories WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$category=mysqli_fetch_assoc($result);
$newid= $category['id'];
$name=$category['name'];
$description=$category['description'];
}else{
    header('Location:showcategory.php');
}
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $newname=htmlspecialchars($_POST['name']);
    $newdescription=htmlspecialchars($_POST['description']);
 $sql="UPDATE categories
SET  name= '$newname' , description= '$newdescription'
WHERE id = '$id'";
if( mysqli_query($conn,$sql)){
 $name="";
$description="";

          $suc="تم التعديل";
      }else{
          $err= "عذرا لم يتم التعديل";
      }  
    
    

header("Location: showCategory.php");
  
}
?>
<div class="page-wrapper" style="display:block">
<!-- ============================================================== -->
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">اضافة قسم </h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">الرئيسية</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">اضافة قسم </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> اضافة قسم</h4>
                                <form method="post" class="m-t-30" action="">
                                    <?php if(isset($suc)){?>
                            <div class="alert alert-success" role="alert"><?php echo $suc?></div> 

    <?php } ?>
                                     <?php if(isset($err)){?>
                            <div class="alert alert-danger" role="alert"><?php echo $err?></div> 

    <?php } ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">اسم القسم </label>
                                        <input type="text" name="name" value="<?php echo $name?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id?>">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">الوصف</label>
                                        <textarea type="text" name="description" class="form-control" rows="8" id="exampleInputPassword1" ><?php echo $description?> </textarea>
                                    </div>
                                   
                                   <button name="update" class="btn btn-primary">تعديل</button>
                        
                                    <button type="reset" class="btn btn-danger">تراجع</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

</div>

<?php 
include 'footer.php';
?>


