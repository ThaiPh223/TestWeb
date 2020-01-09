<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require ('connectdb.php');
        $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var( $_POST['password'], FILTER_SANITIZE_STRING);
        $sql = "SELECT userid, password, first_name, user_level FROM users WHERE email=?";
        $q = mysqli_stmt_init($dbcon);
        mysqli_stmt_prepare($q, $sql);
        mysqli_stmt_bind_param($q, "s", $email); 
        mysqli_stmt_execute($q);
        $result = mysqli_stmt_get_result($q);

        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {
            
            if (password_verify($password, $row['password'])) {         
            session_start();								
            
            $_SESSION['user_level'] = (int) $row['user_level'];
                        
            $url = ($_SESSION['user_level'] === 1) ? 'admin.php' :
            'teacher.php'; 
            header('Location: ' . $url);
            }
        }
    }
?>