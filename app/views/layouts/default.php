<?php
use Core\Session;
use Core\FH;
use App\Models\Users;

$user = Users::currentUser()
?>

<!DOCTYPE html>

<html lang="en" class="js"> 

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>images/favicon.ico">
    <title><?=$this->siteTitle(); ?></title>

    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap4/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=PROOT?>css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=PROOT?>css/alertMsg.min.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/dreamguys.style.css">

    <!-- Scripts -->
    <script src="<?= PROOT?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= PROOT?>js/moment.min.js"></script>
    <script src="<?= PROOT?>js/bootstrap4/bootstrap.min.js"></script>

    <!-- Tempus Dominus -->
    <script src="<?= PROOT?>plugins/tempus-dominus/tempus-dominus.js"></script>
    <link rel="stylesheet" href="<?= PROOT?>plugins/tempus-dominus/tempus-dominus.min.css" />

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>plugins/toastr/toastr.min.css">
    <script type="text/javascript" src="<?=PROOT?>plugins/toastr/toastr.min.js"></script>


    <?= $this->content('head'); ?>
  </head>

  <body>
    <div class="main-wrapper">

        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="<?=PROOT?>images/logo.png" width="35" height="35" alt=""> <span>MediCare</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                      
                <li class="nav-item dropdown has-arrow">
                  

                  
                    <a class="nav-link user-link" href="<?php if (isset($user)) {echo PROOT . 'register/logout';} else {echo PROOT . 'register/login';} ?>" title="Register">
                              
                      <i class="demo-icon icon-pencil-2"></i>

                      <?php if (isset($user)) {
                        echo 'Logout';
                      } else {
                        echo 'Login';
                      } ?>
                    </a>
                  
                </li>
            </ul>
          
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <?php
                            if(!empty($user)){


                                if ($user->acl=="Patient"){
                                echo '
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                                    </li>

                                    <li>
                                        <a href="'.PROOT.'Patient/appointmentList"><i class="fa fa-calendar-alt"></i> <span>Appointments</span></a>
                                    </li>

                                    <li>
                                        <a href="'.PROOT.'Patient/requestAppointment"><i class="fa fa fa-plus"></i> <span>Add Appointment</span></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-book"></i> <span>Payments</span></a>
                                    </li>

                              ';
                                }
                                elseif ($user->acl=="Doctor") {
                                echo '
                                    <li>
                                        <a href=""><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                                    </li>
                                    <li>
                                        <a href="'.PROOT.'consultation/viewAll"><i class="fa fa-calendar-check"></i> <span>Consultation Sessions</span></a>
                                    </li>

                                    <li>
                                        <a href="'.PROOT.'Consultation/add"><i class="fa fa fa-plus"></i> <span>Add Session</span></a>
                                    </li>

                                    <li>
                                        <a href=""><i class="fa fa fa-plus"></i> <span>Add Medical Report</span></a>
                                    </li>

                                    <li>
                                        <a href="#l"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                                    </li>

                                ';
                                }
                            }
                        ?>
                        
                        <li>
                            <a href="<?= PROOT?>register/logout"><i class="fas fa-tachometer-alt"></i> <span>Logout</span></a>
                        </li>

                        <li>
                            <a href="#t"><i class="fa fa-user"></i> <span>Account</span></a>
                        </li>

                        <li>
                            <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>



                    </ul>
                </div>
            </div>
        </div>


    <script src="<?= PROOT?>js/popper.min.js"></script>
    <script src="<?= PROOT?>js/jquery.slimscroll.js"></script>
    <script src="<?= PROOT?>js/select2.min.js"></script>
    <script src="<?= PROOT?>js/app.js"></script>
        <?= $this->content('body'); ?>
    </div>
    
    <!-- <script src="<?=PROOT?>js/alertMsg.min.js?v=<?=VERSION?>"></script>
    <script src="<?=PROOT?>js/jquery.slimscroll.js"></script>
    <script src="<?=PROOT?>js/app.js"></script>
    <script src="<?=PROOT?>js/select2.min.js"></script>
    <script src="<?=PROOT?>js/jquery.dataTables.min.js"></script>
    <script src="<?=PROOT?>js/dataTables.bootstrap4.min.js"></script> -->

  </body>
</html>
