<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('connectdb.php');
        $majorName = $_POST['majorName'];
        $majorDes = $_POST['majorDes'];
        $sql = "INSERT INTO major (majorid, majorName, majorDes) ";
        $sql .="VALUES(NULL, ?, ?)";
        mysqli_set_charset($dbcon, 'utf8');
        $q = mysqli_stmt_init($dbcon);                                  
        mysqli_stmt_prepare($q, $sql);
        mysqli_stmt_bind_param($q, 'ss', $majorName, $majorDes);
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