<?php
    $first_name = filter_var( $_POST['first_name'], FILTER_SANITIZE_STRING);
    $last_name = filter_var( $_POST['last_name'], FILTER_SANITIZE_STRING);
    $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
    $password1 = filter_var( $_POST['password1'], FILTER_SANITIZE_STRING);
    $password2 = filter_var( $_POST['password2'], FILTER_SANITIZE_STRING);
    if ($password1 !== $password2) { 
        echo 'Không khớp mật khẩu';
    } 
    $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
    require('connectdb.php');
    $sql = "INSERT INTO users (userid, first_name, last_name, email, password, registration_date) ";
    $sql .="VALUES(' ', ?, ?, ?, ?, NOW() )";
    $q = mysqli_stmt_init($dbcon);                                  
    mysqli_stmt_prepare($q, $sql);
    mysqli_stmt_bind_param($q, 'ssss', $first_name, $last_name, $email, $hashed_passcode);
    mysqli_stmt_execute($q);
    if(mysqli_stmt_affected_rows($q) == 1){
        header ("location: index.php");
    }
    mysqli_close($dbcon);
?>