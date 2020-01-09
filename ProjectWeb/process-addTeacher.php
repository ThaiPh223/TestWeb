<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('connectdb.php');
        $teacherLastName = $_POST['teacherLastName'];
        $teacherFirstName = $_POST['teacherFirstName'];
        $teacherBirth = $_POST['teacherBirth'];
        $teacherPhone = $_POST['teacherPhone'];
        $teacherMail = $_POST['teacherMail'];
        $teacherAddress = $_POST['teacherAddress'];
        $sql = "INSERT INTO teacher (teacherid, teacherLastName, teacherFirstName, teacherBirth, teacherPhone, teacherMail, teacherAddress) ";
        $sql .="VALUES(NULL, ?, ?, ?, ?, ?, ?)";
        mysqli_set_charset($dbcon, 'utf8');
        $q = mysqli_stmt_init($dbcon);                                  
        mysqli_stmt_prepare($q, $sql);
        mysqli_stmt_bind_param($q, 'ssssss', $teacherLastName, $teacherFirstName, $teacherBirth, $teacherPhone, $teacherMail, $teacherAddress);
        mysqli_stmt_execute($q);
        if(mysqli_stmt_affected_rows($q) == 1){
            echo 'Thanh cong';
        }
        else{
            echo 'That bai';
        }
        mysqli_close($dbcon);
        
    }
?>