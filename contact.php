<?php
include "header1.php";
include 'dashboard/database.php';

$pageName='اتصل بنا ';

if(isset($_POST['result'])){
    $name=$_POST['name'];
    $To="dalou.huda@gmail.com";
    $From=$_POST['email'];
    $subject=$_POST['title'];
    $message=$_POST['contain'];
    $header="From:".$From;
    mail($To,$subject,$message,$header);
$sql = "INSERT INTO contact (name,email,title,contain) VALUES ('$name', '$From','$subject','$message')";
      $result=mysqli_query($conn,$sql);
 if($result){
          $suc="تم الارسال";
      }else{
          $err= "عذرا لم يتم الارسال";
      }}
?>

<br><br>
<main>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  mt-2"><a href="body.php">الرئيسية </a></li>
                <li class="breadcrumb-item active" aria-current="page">اتصل بنا </li>
            </ol>
        </nav>
        <div class="content-page p-4">
            <p class="">اتصل بنا </p>
            <p class=""> التفاصيل </p>
            <form action="" method="post">
                <?php if(isset($suc)){?>
                <div class="alert alert-success" role="alert"><?php echo $suc?></div>

                <?php } ?>
                <?php if(isset($err)){?>
                <div class="alert alert-danger" role="alert"><?php echo $err?></div>

                <?php } ?>
                <input class="form-control mb-3" name="name" type="text" placeholder="الاسم">
                <input class="form-control mb-3" name="email" type="email" placeholder="البريد الالكتروني">
                <input class="form-control mb-3" name="title" type="text" placeholder="العنوان">
                <textarea class="form-control detail" name="contain" placeholder="التفاصيل" rows="5"></textarea>
                <div class="d-flex justify-contnet-center mt-5">
                    <button type="submit" name="result" class="p-3 px-5" style="background: #114379;border-radius:0px;margin-right:45%;">أرسل</button>

                </div>
            </form>
        </div>
    </div>
</main>







<?php
include "footer1.php";
?>
