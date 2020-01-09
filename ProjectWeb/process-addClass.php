<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('connectdb.php');
        $className = $_POST['className'];
        $classYear = $_POST['classYear'];
        $classSemester = $_POST['classSemester'];
        $classStage = $_POST['classStage'];
        $classDateStart = $_POST['classDateStart'];
        $classDateEnd = $_POST['classDateEnd'];
        $sql = "INSERT INTO class (classid, className, classYear, classSemester, classStage, classDateStart, classDateEnd) ";
        $sql .="VALUES(NULL, ?, ?, ?, ?, ?, ?)";
        mysqli_set_charset($dbcon, 'utf8');
        $q = mysqli_stmt_init($dbcon);                                  
        mysqli_stmt_prepare($q, $sql);
        mysqli_stmt_bind_param($q, 'ssssss', $className, $classYear, $classSemester, $classStage, $classDateStart, $classDateEnd);
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