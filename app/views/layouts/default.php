<?php
use Core\Session;
use Core\FH;
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
    <!-- <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/bootstrap-datetimepicker.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/dreamguys.style.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?=PROOT?>plugins/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.css"> -->
    <script src="<?= PROOT?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= PROOT?>js/moment.min.js"></script>
    <script src="<?= PROOT?>js/bootstrap4/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />


    <!-- Not imported -->
    <!--
    -->
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
              <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                  <span class="status online"></span>
                </span>
                <span>Admin</span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
              </div>
            </li>
          </ul>
          <div class="dropdown mobile-user-menu float-right">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
              <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="profile.html">My Profile</a>
                  <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                  <a class="dropdown-item" href="settings.html">Settings</a>
                  <a class="dropdown-item" href="login.html">Logout</a>
              </div>
          </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                        </li>
            <li class="active">
                            <a href="doctors.html"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
                            <a href="patients.html"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="appointments.html"><i class="fa fa-calendar-alt"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="schedule.html"><i class="fa fa-calendar-check"></i> <span>Doctor Schedule</span></a>
                        </li>
                        <li>
                            <a href="departments.html"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                        </li>
            <li class="submenu">
              <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="employees.html">Employees List</a></li>
                <li><a href="leaves.html">Leaves</a></li>
                <li><a href="holidays.html">Holidays</a></li>
                <li><a href="attendance.html">Attendance</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="invoices.html">Invoices</a></li>
                <li><a href="payments.html">Payments</a></li>
                <li><a href="expenses.html">Expenses</a></li>
                <li><a href="taxes.html">Taxes</a></li>
                <li><a href="provident-fund.html">Provident Fund</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="salary.html"> Employee Salary </a></li>
                <li><a href="salary-view.html"> Payslip </a></li>
              </ul>
            </li>
                        <li>
                            <a href="chat.html"><i class="fa fa-comments"></i> <span>Chat</span> <span class="badge badge-pill bg-primary float-right">5</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-video-camera camera"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="voice-call.html">Voice Call</a></li>
                                <li><a href="video-call.html">Video Call</a></li>
                                <li><a href="incoming-call.html">Incoming Call</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="compose.html">Compose Mail</a></li>
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="mail-view.html">Mail View</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog View</a></li>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="edit-blog.html">Edit Blog</a></li>
                            </ul>
                        </li>
            <li>
              <a href="assets.html"><i class="fa fa-cube"></i> <span>Assets</span></a>
            </li>
            <li>
              <a href="activities.html"><i class="fa fa-bell-o"></i> <span>Activities</span></a>
            </li>
            <li class="submenu">
              <a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="expense-reports.html"> Expense Report </a></li>
                <li><a href="invoice-reports.html"> Invoice Report </a></li>
              </ul>
            </li>
                        <li>
                            <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-laptop"></i> <span> Components</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="uikit.html">UI Kit</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-edit"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                <li><a href="form-input-groups.html">Input Groups</a></li>
                                <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                <li><a href="form-vertical.html">Vertical Form</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-table"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"> Login </a></li>
                                <li><a href="register.html"> Register </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="change-password2.html"> Change Password </a></li>
                                <li><a href="lock-screen.html"> Lock Screen </a></li>
                                <li><a href="profile.html"> Profile </a></li>
                                <li><a href="gallery.html"> Gallery </a></li>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                                <li><a href="blank-page.html"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
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
