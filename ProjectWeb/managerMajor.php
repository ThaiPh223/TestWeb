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
    <?php include("headerAdmin.php");?>
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
    <div class="text-center main-content">
        <h2 style="margin-bottom:30px;">List Major</h2>
        <?php
            require('connectdb.php');
            //B2:
            $sql = 'SELECT * FROM major';
            mysqli_set_charset($dbcon, 'utf8');
            $result = mysqli_query($dbcon,$sql);
            //B3:
            echo '<font size="5">';
            echo '<table style="border: 2px solid"; align="center";>';
            echo '<tr style="border: 2px solid;"><th style="border: 2px solid">ID</th><th style="border: 2px solid">Name</th><th style="border: 2px solid">Description</th><th style="border: 2px solid">Edit</th><th style="border: 2px solid">Delete</th></tr>';
            if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr style="border: 2px solid">';
                echo '<td style="border: 2px solid">'.$row['majorid'].'</td>';
                echo '<td style="border: 2px solid">'.$row['majorName'].'</td>';
                echo '<td style="border: 2px solid">'.$row['majorDes'].'</td>';
                echo '<td style="border: 2px solid">'.'<a href="editMajor.php?id='.$row['majorid'].'">Edit</a>'.'</td>';
                echo '<td style="border: 2px solid">'.'<a href="deleteMajor.php?id='.$row['majorid'].'">Delete</a>'.'</td>';
                }
            }
            echo '</table>';
            echo '</font>';
            //B4:
            mysqli_close($dbcon);                
        ?>
        <button style="margin: 30px;" type="submit" name="submit" class="btn btn-secondary" onclick="location.href = 'addMajor.php'" >Add</button>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>  