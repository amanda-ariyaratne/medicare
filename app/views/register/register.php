<?php
use Core\FH;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>images/favicon.ico">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/dreamguys.style.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="" class="form-signin" method="POST">
                      <?= FH::csrfInput() ?>
                        <div class="account-logo">
                            <a href="#"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="fname" value="Sudaraka">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" value="Ariyaratne">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" value="sudaraka@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirm" value="password">
                        </div>
                        <div class="form-group">
                            <label>Register As</label>
                            <select class="form-control" name="acl">
                              <option selected="selected">Patient</option>
                              <option>Doctor</option>
                              <option>Medical Laboratory</option>
                            </select>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="<?=PROOT?>register/login">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
