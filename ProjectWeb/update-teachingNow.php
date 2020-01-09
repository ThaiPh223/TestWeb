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
    <title>Index</title>
</head>
<body>
    <?php include("headerTeacher.php"); ?>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

        <ul style="width: 100%; text-align:center; background-color: #3366FF;  ">
            <div class="dropdown">
                <div class="dropbtn">TRANG CHỦ</div>
                <div class="dropdown-content">
                    <a href="teacher.php">Trang chủ</a>
                </div>
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
                <div class="dropbtn" href="#" >XEM THÔNG TIN</div>
                <div class="dropdown-content">
                    <a href="update-teachingPlan.php">Cập nhật kế hoạch giảng dạy dự kiến</a>
                    <a href="update-teachingNow.php">Cập nhật lịch trình giảng dạy thực tế</a>
                </div>
            </div>
        </ul>
    </nav>
    <div style="margin-bottom: 40px;" class="text-center main-content">
        <h2 style="margin-bottom:30px;">Teaching Now</h2>
        <?php
            require('connectdb.php');
            //B2:
            $sql = 'SELECT teachingNowId, teacherLastName, teacherFirstName, subjectName, className, Lesson, Place, Date FROM teachingnow, teacher, subject, teachassigned, class WHERE (teacher.teacherid = teachassigned.teacherid) AND (subject.subjectid = teachassigned.subjectid) AND (class.classid = teachassigned.classid) AND (teachingnow.teachAssignedId = teachassigned.teachAssignedId)';
            mysqli_set_charset($dbcon, 'utf8');
            $result = mysqli_query($dbcon,$sql);
            //B3:
            echo '<font size="5">';
            echo '<table style="border: 2px solid"; align="center";>';
            echo '<tr style="border: 2px solid;"><th style="border: 2px solid">ID</th><th style="border: 2px solid">Teacher Name</th><th style="border: 2px solid">Class Name</th><th style="border: 2px solid">Subject Name</th><th style="border: 2px solid">Lesson</th><th style="border: 2px solid">Place</th><th style="border: 2px solid">Date</th><th style="border: 2px solid">Edit</th><th style="border: 2px solid">Delete</th>';
            if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr style="border: 2px solid">';
                echo '<td style="border: 2px solid">'.$row['teachingNowId'].'</td>';
                echo '<td style="border: 2px solid">'.$row['teacherFirstName'].' '.$row['teacherLastName'].'</td>';
                echo '<td style="border: 2px solid">'.$row['className'].'</td>';
                echo '<td style="border: 2px solid">'.$row['subjectName'].'</td>'; 
                echo '<td style="border: 2px solid">'.$row['Lesson'].'</td>';
                echo '<td style="border: 2px solid">'.$row['Place'].'</td>';
                echo '<td style="border: 2px solid">'.$row['Date'].'</td>';
                echo '<td style="border: 2px solid">'.'<a href="edit-teachingNow.php?id='.$row['teachingNowId'].'">Edit</a>'.'</td>';
                echo '<td style="border: 2px solid">'.'<a href="delete-teachingNow.php?id='.$row['teachingNowId'].'">Delete</a>'.'</td>';
                }
            }
            echo '</table>';
            echo '</font>';
            //B4:
            mysqli_close($dbcon);                
        ?>
    </div>
    
    <?php include("footer.php"); ?>
</body>
</html>