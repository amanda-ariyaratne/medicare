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
    <link rel="stylesheet" href="<?=PROOT?>css/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/dreamguys.style.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
      <div class="account-center">
        <div class="account-box">
                    <form action="" class="form-signin" method="POST">
                        <?= FH::csrfInput() ?>
                        <div class="account-logo">
                        <a href="index.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autofocus="" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group text-right">
                            New User?
                            <a href="<?=PROOT?>register/register"> &nbsp; Create an Account</a>
                        </div>
                        <input type="hidden" name="remember_me" value="false">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="<?=PROOT?>register/register">Register Now</a>
                        </div>
                    </form>
                </div>
      </div>
        </div>
    </div>
</body>

</html>