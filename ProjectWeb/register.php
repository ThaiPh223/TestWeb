<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/checkPassword.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Register</title>
</head>
<body>
    <?php include("headerRegister.php"); ?>
    <div style='margin-top: 30px;' class="d-flex justify-content-center col-sm-12">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                
        require('process-register.php');
        } 
        ?>
        <div class="col-sm-8">
        <h2 class="h2 text-center">Register</h2>
        <form action="register.php" method="post" onsubmit="return checked();"
        name="regform" id="regform">
        <div class="form-group row">
            <label for="first_name" class="col-sm-4 col-form-label">First Name:</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="first_name" name="first_name" 
            placeholder="First Name" maxlength="30" required
            value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-sm-4 col-form-label">Last Name:</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="last_name" name="last_name" 
            placeholder="Last Name" maxlength="40" required
            value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
            <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email" 
            placeholder="E-mail" maxlength="60" required
            value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="password1" class="col-sm-4 col-form-label">Password:</label>
            <div class="col-sm-8">
            <input type="password" class="form-control" id="password1" name="password1" 
            placeholder="Password" minlength="8" maxlength="12" required
            value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
            <span id='message'>Between 8 and 12 characters.</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="password2" class="col-sm-4 col-form-label">Confirm Password:</label>
            <div class="col-sm-8">
            <input type="password" class="form-control" id="password2" name="password2" 
            placeholder="Confirm Password" minlength="8" maxlength="12" required
            value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
            </div>
        </div>
          
        <div class="form-group row">
            <div class="col-sm-12">
            <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Register">
            </div>
            </div>
            </form>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>