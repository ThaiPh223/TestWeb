<?php
    require('connectdb.php');
    $id = $_GET['id'];
    //B2:
    $sql = "DELETE FROM major WHERE majorid = '$id'";
    mysqli_set_charset($dbcon, 'utf8');
    $result = mysqli_query($dbcon,$sql);
    if($result){
        header('Location:managerMajor.php');
    }
    //B4:
    mysqli_close($dbcon);                
?>