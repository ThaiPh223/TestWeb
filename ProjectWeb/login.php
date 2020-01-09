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
    <title>Login</title>
</head>
<body>
    <?php include("headerLogin.php"); ?>
    <div style='margin-top: 30px;' class="d-flex justify-content-center col-sm-12">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
                require('process-login.php');
                } // End of the main Submit conditional.
                ?>
                <div class="justify-content-center col-sm-6">
                    <h2 class="h2 text-center">Login</h2>
                    <form action="login.php" method="post" name="loginform" id="loginform">
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 ">Email Address:</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email" 
                            placeholder="Email" maxlength="30" required
                            value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 ">Password:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password" 
                                placeholder="Password" maxlength="40" required
                                value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                                <span>&nbsp;Between 8 and 12 characters.</span></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


    <?php include("footer.php"); ?>
</html>