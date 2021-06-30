<?php
ob_start();
include 'header.php';  
include 'main.php';
include 'database.php';

$name="";
$email="";
$password="";
$phone="";
$bio="";
$role="";
  
if(isset($_POST['mod'])){
$id=$_POST['id'];
$name= $_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$bio=$_POST['bio'];
$role=$_POST['role'];
$sql="UPDATE user
SET name= '$name',email='$email',password='$password',bio='$bio',role='$role' 
WHERE id='$id'";

header("Location: email.php");
}


?>


<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
     

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Profile</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="user.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div></div></div></div></div></div>
                         <div class="page-wrapper">
           
    
                

            <div class="container-fluid">
              
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <?php
$sql="SELECT * FROM user ";
$result=mysqli_query($conn,$sql);
if((mysqli_num_rows($result) )> 0){
while($user=mysqli_fetch_assoc($result)){
    $name= $user['name'];
    


   
?>
                      
                        <div class="card">
                            <div class="card-body">
        
                                <center class="m-t-30"> <img src="assets/images/profile.png" class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $user['name']?></h4>
                                    <h6 class="card-subtitle"><?php echo $user['bio']?></h6>

                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">البريد الالكتروني </small>
                                <h6><?php echo $user['email']?></h6> <small class="text-muted p-t-30 db">الهاتف</small>
                                <h6>0597781911</h6> <small class="text-muted p-t-30 db">العنوان</small>
                                <h6>غزة/الرمال/مفترق العباس /عمارة الناصرة</h6>

                            </div>
                        </div>
                        <?php }}?>
                    </div>

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">


                                <li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">الاعدادات</a>
                                </li>
                            </ul>
                            <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                <?php
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
if((mysqli_num_rows($result) )> 0){
while($user=mysqli_fetch_assoc($result)){
    $name= $user['name'];
    ?>
                                <div class="card-body">
                                   
                                    <form  method="post" action="" class="form-horizontal form-material">
                                       <input type="hidden" name="id" value="<?php echo $user['id']?>">
                                        <div class="form-group">
                                            <label class="col-md-12">الاسم</label>
                                            <div class="col-md-12">
                                                <input type="text"  name="name"placeholder='<?php echo $user['name']?>' class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">الايميل</label>
                                            <div class="col-md-12">
                                                <input type="email" placeholder='<?php echo $user['email']?>' class="form-control form-control-line" name="email" id="example-email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">كلمة المرور</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password" value="<?php echo $user['password']?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="col-md-12">نبذة</label>
                                            <div class="col-md-12">
                                                <textarea rows="5" name="bio" class="form-control form-control-line"><?php echo $user['bio']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">الصلاحيات</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-line" name="role">
                                                    <option>مستخدم</option>
                                                    <option>ادمن</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button name="mod" class="btn btn-success" type="submit">تحديث الصفحة</button>
                                            </div>
                                        </div>
                                    </form>
                                </div></div></div>
                            </div>
                            <?php }}?>

                        </div>
                        </div>
                

                    <aside class="customizer">
                        
                        <div class="customizer-body">
                            <ul class="nav customizer-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <!-- Tab 1 -->
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="p-15 border-bottom">
                                        <!-- Sidebar -->
                                        <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                                        <div class="custom-control custom-checkbox m-t-10">
                                            <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                                            <label class="custom-control-label" for="theme-view">Dark Theme</label>
                                        </div>
                                        <div class="custom-control custom-checkbox m-t-10">
                                            <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                                            <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                                        </div>
                                        <div class="custom-control custom-checkbox m-t-10">
                                            <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                                            <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                                        </div>
                                        <div class="custom-control custom-checkbox m-t-10">
                                            <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                                            <label class="custom-control-label" for="header-position">Fixed Header</label>
                                        </div>
                                        <div class="custom-control custom-checkbox m-t-10">
                                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                                        </div>
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <!-- Logo BG -->
                                        <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                                        <ul class="theme-color">
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                                        </ul>
                                        <!-- Logo BG -->
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <!-- Navbar BG -->
                                        <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                                        <ul class="theme-color">
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                                        </ul>
                                        <!-- Navbar BG -->
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <!-- Logo BG -->
                                        <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                                        <ul class="theme-color">
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                                        </ul>
                                        <!-- Logo BG -->
                                    </div>
                                </div>
                                <!-- End Tab 1 -->
                                <!-- Tab 2 -->
                                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <ul class="mailbox list-style-none m-t-20">
                                        <li>
                                            <div class="message-center chat-scroll">
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                                    <span class="user-img"> <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                                    <span class="user-img"> <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                                    <span class="user-img"> <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                                    <span class="user-img"> <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                                    <span class="user-img"> <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                                    <span class="user-img"> <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                                    <span class="user-img"> <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                                    <span class="user-img"> <img src="assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                    <span class="mail-contnet">
                                                        <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                    </span>
                                                </a>
                                                <!-- Message -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Tab 2 -->
                                <!-- Tab 3 -->
                                <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                                    <div class="steamline">
                                        <div class="sl-item">
                                            <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                            <div class="sl-right">
                                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                <div class="desc">you can write anything </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                            <div class="sl-right">
                                                <div class="font-medium">Send documents to Clark</div>
                                                <div class="desc">Lorem Ipsum is simply </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg"> </div>
                                            <div class="sl-right">
                                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                <div class="desc">Contrary to popular belief</div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg"> </div>
                                            <div class="sl-right">
                                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                <div class="desc">Approve meeting with tiger</div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                                            <div class="sl-right">
                                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                <div class="desc">you can write anything </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                            <div class="sl-right">
                                                <div class="font-medium">Send documents to Clark</div>
                                                <div class="desc">Lorem Ipsum is simply </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg"> </div>
                                            <div class="sl-right">
                                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                <div class="desc">Contrary to popular belief</div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg"> </div>
                                            <div class="sl-right">
                                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                <div class="desc">Approve meeting with tiger</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab 3 -->
                            </div>
                        </div>
                    </aside>
                    <div class="chat-windows"></div>
                    <!-- ============================================================== -->
                    <!-- All Jquery -->
                 
</body>

<?php
include 'footer.php';?>
