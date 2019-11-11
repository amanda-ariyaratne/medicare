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
    
    <!-- Scripts -->
    <script src="<?= PROOT?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= PROOT?>js/bootstrap4/bootstrap.min.js"></script>

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>plugins/toastr/toastr.min.css">
    <script type="text/javascript" src="<?=PROOT?>plugins/toastr/toastr.min.js"></script>

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
                            <input type="text" autofocus="" class="form-control" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : null ; ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group text-right">
                            New User?
                            <a href="<?=PROOT?>register/register"> &nbsp; Create an Account</a>
                        </div>
                        <input type="hidden" name="remember_me" value="true">
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
<?php 
    $this->displayErrors = array_reverse($this->displayErrors, true);
    foreach ($this->displayErrors as $key => $value){
        echo '<script> toastr.error("' . $value . '")</script>';
    }
?>
</body>

</html>