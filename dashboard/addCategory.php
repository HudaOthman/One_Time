<head>
    <style>
        .error {
            color: #FF0000;
        }

    </style>
</head>
<?php 
include 'header.php'; 
include 'database.php';
include 'main.php';
$nameErr =" ";
if (isset($_GET['save'])) {
  if (empty($_GET["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_GET["name"]);
    
    $description=$_GET['description'];
    $sql="INSERT INTO categories (name,description) VALUES ('$name','$description')";
   $result= mysqli_query($conn,$sql);
     if($result){
          $suc="تم الحفظ";
      }else{
          $err= "عذرا لم يتم الحفظ";
      }

  }}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


<div class="page-wrapper" style="display:block">
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">اضافة قسم </h4>
                 <?php if(isset($suc)){?>
                            <div class="alert alert-success" role="alert"><?php echo $suc?></div> 

    <?php } ?>
                                     <?php if(isset($err)){?>
                            <div class="alert alert-danger" role="alert"><?php echo $err?></div> 

    <?php } ?>
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
                    <form method="get" class="m-t-30" action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">اسم القسم </label>
                            <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                            <span class="error">* <?php echo $nameErr;?></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">الوصف</label>
                            <textarea type="text" name="description" class="form-control" rows="8" id="exampleInputPassword1"> </textarea>
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
