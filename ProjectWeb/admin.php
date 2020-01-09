<?php                                                                       
session_start();
if (!isset($_SESSION['user_level']) || ($_SESSION['user_level'] != 1))
{ header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <?php include("headerAdmin.php"); ?>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

        <ul style="width: 100%; text-align:center; background-color: #3366FF;  ">
            <div class="dropdown">
                <div class="dropbtn">TRANG CHỦ</div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">GIỚI THIỆU</div>
                <div class="dropdown-content">
                    <a href="#">Lời chào mừng</a>
                    <a href="#">Tổ chức</a>
                    <a href="#">Hợp tác liên kết</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">NGHIÊN CỨU KHOA HỌC</div>
                <div class="dropdown-content">
                    <a href="#">Các đề tài-dự án</a>
                    <a href="#">Hợp tác phát triển</a>

                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">ĐÀO TẠO</div>
                <div class="dropdown-content">
                    <a href="#">Đào tạo Đại học</a>
                    <a href="#">Đào tạo sau Đại học</a>
                    <a href="#">Chuẩn đầu ra</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">BỘ MÔN TRUNG TÂM</div>
                <div class="dropdown-content">
                    <a href="#">Công nghệ phần mềm</a>
                    <a href="#">Hệ thống thông tin</a>
                    <a href="#">Khoa học máy tính</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">TIN TỨC</div>
                <div class="dropdown-content">
                    <a href="#">Sự kiện</a>
                    <a href="#">CSE trên báo</a>

                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">THÔNG BÁO</div>
                <div class="dropdown-content">
                    <a href="#">Tuyển dụng</a>
                    <a href="#">TB đào tạo</a>
                    <a href="#">Học bổng</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn" href="#" >QUẢN LÝ</div>
                <div class="dropdown-content">
                    <a href="managerMajor.php">Quản lý Ngành học</a>
                    <a href="managerSubject.php">Quản lý Môn học</a>
                    <a href="managerClass.php">Quản lý Lớp học</a>
                    <a href="managerTeacher.php">Quản lý Giáo viên</a>
                    <a href="#">Quản lý Bài viết</a>
                    <a href="managerTeachAssigned.php">Phân công Giáo viên</a>
                </div>
            </div>
        </ul>

    </nav>
    <div class="slidess">
        <div id="slides" class="carousel slides" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class=" slideBanner carousel-inner">
                <div class="carousel-item active">
                    <img src="img/tsv.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/itt.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>Công Nghê Thông Tin</h3>
                        <p>Xu hướng phát triển toàn cầu</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bd.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>Giải Bóng Đá Khoa</h3>
                        <p>Giải bóng đã đi đến những vòng đấu cuối cùng</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slides" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <hr>
    <div class="main-1">
        <h2 style="  text-align: left; font-weight: inherit; color: #3333ff;" class="display">TIN TỨC</h2>
        <div class="jumbotron jumbotron-fluid">
            <div id="news" class="carousel slides" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#news" class="active"></li>
                    <li data-target="#news" data-slide-to="1"></li>
                    <li data-target="#news" data-slide-to="2"></li>
                </ul>
                <div class="lastNew carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-12">
                            <div class="row text-center padding">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic4.jpg" />
                                    <h5>Hội thảo "Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng
                                        facebook"
                                    </h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic5.jpg" />
                                    <h5>Kết quả nghiên cứu khoa học sinh viên lần thứ 32</h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic4.jpg" />
                                    <h5>Hội thảo "Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng
                                        facebook"
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-12">
                            <div class="row text-center padding">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic4.jpg" />
                                    <h5>Hội thảo "Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng
                                        facebook"
                                    </h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic5.jpg" />
                                    <h5>Kết quả nghiên cứu khoa học sinh viên lần thứ 32</h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic5.jpg" />
                                    <h5>Kết quả nghiên cứu khoa học sinh viên lần thứ 32</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-12">
                            <div class="row text-center padding">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic4.jpg" />
                                    <h5>Hội thảo "Sử dụng mạng xã hội an toàn - góc nhìn từ tiêu chuẩn cộng đồng
                                        facebook"
                                    </h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic5.jpg" />
                                    <h5>Kết quả nghiên cứu khoa học sinh viên lần thứ 32</h5>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <img style="width:100%;" src="img/pic6.jpg" />
                                    <h5>Công bố quyết định của Hiệu trưởng Bổ nhiệm viên chức quản lý cấp bộ môn khoa
                                        CNTT
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#news" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#news" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
    </div>
    </div>

    <div class="main-2">
        <h2 style="text-align: left; font-weight: inherit; color: #3333FF" class="display">SỰ KIỆN</h2>
        <div class="jumbotron jumbotron-fluid">
            <div class="row text-center padding ">
                <div style="text-align: left; padding-left: 40px;" class="timeEvents col-xs-12 col-sm-3 col-md-3">
                    <div style="font-size: 100px; " class="date">22</div>
                    <div style="font-size: 25px;" class="month">December</div>
                </div>
                <div class="event-wrapper col-xs-12 col-sm-6 col-md-6">
                    <h3 style="text-align: left; padding-top: 30px;" class="title">
                        <a href="https://educationwp.thimpress.com/events/summer-school-2019/">Olympic Toán cấp
                            trường</a>
                    </h3>
                    <div style="text-align: left;" class="meta">
                        <div class="time">
                            <i class="fa fa-clock-o"> 8:00 AM - 17:00 AM</i>
                        </div>
                        <div class="location">
                            <i class="fa fa-map-marker"> T45 - Đại học Thủy Lợi</i>
                        </div>
                        <div class="description">
                            <p>Cuộc thi Olympic thưởng niên sẽ được diễn ra và ngày 20-9-2019. Mong rằng cuộc thi năm
                                nay chúng ta sẽ tìm ra được những nhân
                                tài toán học để tiếp đó tham dự cuộc thi Olympic Toán cả Nước....
                            </p>
                        </div>
                    </div>
                </div>
                <div class="img col-xs-12 col-sm-3 col-md-3">
                    <img style="height: 200px; width:230px; padding-top: 30px; padding-right: 30px;" src="img/pic8.jpg"
                        alt="">
                </div>
            </div>
            <hr />
            <div class="row text-center padding ">
                <div style="text-align: left; padding-left: 40px;" class="timeEvents col-xs-12 col-sm-3 col-md-3">
                    <div style="font-size: 100px; " class="date">25</div>
                    <div style="font-size: 25px;" class="month">December</div>
                </div>
                <div class="event-wrapper col-xs-12 col-sm-6 col-md-6">
                    <h3 style="text-align: left; padding-top: 30px;" class="title">
                        <a href="https://educationwp.thimpress.com/events/summer-school-2019/">Đêm ca nhạc chào tân sinh
                            viến</a>
                    </h3>
                    <div style="text-align: left;" class="meta">
                        <div class="time">
                            <i class="fa fa-clock-o"> 19:00 PM - 22:00 PM</i>
                        </div>
                        <div class="location">
                            <i class="fa fa-map-marker"> T45 - Đại học Thủy Lợi</i>
                        </div>
                        <div class="description">
                            <p>Tại hội trường T45 thân yêu cuối tuần này sẽ diễn ra đêm ca nhạc hoành tráng để chào mừng
                                các tân sinh viên K61 đại học Thủy Lợi....</p>
                        </div>
                    </div>
                </div>
                <div class="img col-xs-12 col-sm-3 col-md-3">
                    <img style="height: 200px; width:230px; padding-top: 30px; padding-right: 30px;" src="img/nhac.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="main-3">
        <h2 style="text-align: left; font-weight: inherit; color: #3333FF" class="display">THÔNG TIN CÔNG NGHỆ</h2>
        <div class="jumbotron jumbotron-fluid">
             <?php
                require('connectdb.php');
                //B2:
                $sql = 'SELECT postTitle, postDes, postContent, postCreated, last_name, first_name FROM posts, users WHERE (users.userid = posts.postBy)';
                mysqli_set_charset($dbcon, 'utf8');
                $result = mysqli_query($dbcon,$sql);
                //B3:
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<h1 style="padding-left: 30px;">'.$row['postTitle'].'</h1>';
                        echo '<h3 style="padding-left: 30px;">'.$row['postDes'].'</h3>';
                        echo '<h6 style="padding-left: 30px;">'.$row['last_name'].' '.$row['first_name'].' - '.$row['postCreated'].'</h6>';
                        echo '<br>';
                        echo '<p style="padding-left: 30px;">'.$row['postContent'].'</p>';
                        echo '<hr>';
                    }
                }
                //B4:
                mysqli_close($dbcon);                
            ?>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>