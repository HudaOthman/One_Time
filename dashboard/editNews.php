<?php 
ob_start();
include 'header.php'; 
include 'main.php';


$title="";
$contain="";
$img="";
$category="";
$date="";
if(isset ($_GET['mod'])){
$id=intval($_GET['mod']);
    $se="SELECT * FROM news WHERE id='$id'"; 
     $res = mysqli_query($conn,$se); 
     $poe=mysqli_fetch_assoc($res);
if($id > 0 &&($poe!=null)){
$sql="SELECT id,category_id,title,contain,img FROM news WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$new=mysqli_fetch_assoc($result);

$id= $new['id'];
$title=$new['title'];
$contain=$new['contain'];
$img=$new['img'];
$category=$new['category_id'];
$date=$new['date'];
    }else{
    header('Location:showNews.php');
}
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $newtitle=htmlspecialchars($_POST['title']);
    $newcontain=htmlspecialchars($_POST['contain']);
    $newimg=$_POST['img'];
    $newcategory=htmlspecialchars($_POST['category']);
    $newdate=date('Y/m/d');
    $sql="UPDATE news
SET  title= '$newtitle' , contain= '$newcontain' , img='$newimg' , category_id='$newcategory' , date='$newdate'
WHERE id = '$id'";
    if( mysqli_query($conn,$sql)){
    $title="";
$contain="";
$img="";
$category="";
$date="";
          $suc="تم التعديل";
      }else{
          $err= "عذرا لم يتم التعديل";
      }  
    

header("location:showNews.php"); 
}
    

?>
<div class="page-wrapper" style="display:block">
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">تعديل خبر </h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">تعديل خبر </li>
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
                    <h4 class="card-title"> تعديل خبر</h4>
                    <form method="post" class="m-t-30" action="">
                        <?php if(isset($suc)){?>
                        <div class="alert alert-success" role="alert"><?php echo $suc?></div>

                        <?php } ?>
                        <?php if(isset($err)){?>
                        <div class="alert alert-danger" role="alert"><?php echo $err?></div>

                        <?php } ?>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="control-label">القسم</label>
                                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="category">
                                    <?php $sql="SELECT * FROM categories";
$result=mysqli_query($conn,$sql);
 if((mysqli_num_rows($result) )> 0){
while($category=mysqli_fetch_assoc($result)){
    ?>
                                    <option value="<?php echo $category['id']?>" <?php echo ($category==$category['id'] )?'selected':'' ?>> <?php echo $category['name']?></option>

                                    <?php }}?>

                                </select>
                            </div>
                            <input type="hidden" value="<?php echo $id ?>" name="id">
                            <label for="exampleInputEmail1">اسم الخبر </label>
                            <input type="text" name="title" value='<?=$title?>' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div class="form-group">
                                <label for="exampleInputPassword1">الوصف</label>
                                <textarea type="text" name="contain" class="form-control" rows="8" id="exampleInputPassword1"><?php echo $contain ?> </textarea>
                            </div>
                            <label for="exampleInputEmail1">الصورة </label>
                            <input type="file" name="img" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
