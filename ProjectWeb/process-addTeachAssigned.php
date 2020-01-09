<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('connectdb.php');
        $subjectid = $_POST['subjectid'];
        $classid = $_POST['classid'];
        $teacherid = $_POST['teacherid'];
        $sql = "INSERT INTO teachassigned (teachAssignedId,teacherid,classid,subjectid) ";
        $sql .="VALUES(NULL, ?, ?, ?)";
        mysqli_set_charset($dbcon, 'utf8');
        $q = mysqli_stmt_init($dbcon);                                  
        mysqli_stmt_prepare($q, $sql);
        mysqli_stmt_bind_param($q, 'sss', $teacherid, $classid, $subjectid);
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