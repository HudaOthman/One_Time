<?php 
include 'header.php'; 
include 'database.php';
include 'main.php';

$nameErr =" ";
if (isset($_POST['save'])) {
  if (empty($_POST["title"])) {
    $nameErr = "Title is required";
  } else {
    $category_id=htmlspecialchars($_POST['category']);
    $tile=htmlspecialchars($_POST['title']);
      $date=date('Y/m/d');
    $description=htmlspecialchars($_POST['description']);
    move_uploaded_file($_FILES['img']['tmp_name'], __DIR__.'/images/'. $_FILES['img']['name']);
    $img=$_FILES['img']['name'];
    $sql="INSERT INTO news (category_id,title,contain,img,date) VALUES ('$category_id','$tile','$description','$img','$date')";
   $result= mysqli_query($conn,$sql);
      if($result){
          $suc="تم الحفظ";
      }else{
          $err= "عذرا لم يتم الحفظ";
      }
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}}

?>

<div class="page-wrapper" style="display:block">
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">اضافة خبر </h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">اضافة خبر </li>
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
                    <h4 class="card-title"> اضافة خبر</h4>
                    <form method="post" class="m-t-30" action="" enctype="multipart/form-data">
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
                                    <option value="<?php echo $category['id']?>"> <?php echo $category['name']?></option>

                                    <?php }}?>
                                    
                                </select>
                            </div>
                            <label for="exampleInputEmail1">اسم الخبر </label>
                            <input type="text" name="title" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <span class="error">* <?php echo $nameErr;?></span>
                            <div class="form-group">
                            <label for="exampleInputPassword1">الوصف</label>
                            <textarea type="text" name="description" class="form-control" rows="8" id="exampleInputPassword1"> </textarea>
                        </div>
                            <label for="exampleInputEmail1">الصورة </label>
                            <input type="file" name="img" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" name="save" class="btn btn-primary">حفظ</button>
                        <button type="submit" class="btn btn-danger">تراجع</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>




<?php
include 'footer.php';
?>
