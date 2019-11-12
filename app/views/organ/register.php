<?php
use Core\FH;
?>

<?= $this->setSiteTitle('MediCare - Organ Donation') ?>

<?= $this->start('head'); ?>
    <style type="text/css">
        .form-control {
            border-color: #ccc;
        }
    </style>
<?= $this->end(); ?>



<?= $this->start('body'); ?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Register as a Donor</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="card-title">Donor Card</h4>
                    <form action="" method="POST">
                        <?= FH::csrfInput() ?>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="<?php echo isset($_POST["first_name"]) ? $_POST["first_name"] : null ; ?>" >
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="<?php echo isset($_POST["last_name"]) ? $_POST["last_name"] : null; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Date of Birth</label>
                            <div class="input-group date col-md-3" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input " data-target="#datetimepicker1" name="date_of_birth" id="date_of_birth" data-postvalue="<?php echo isset($_POST["date_of_birth"]) ? $_POST["date_of_birth"] : null; ?>" />
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            <div class="col-md-7"></div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Gender</label>
                            <div class="col-md-10">
                                <div class="radio">
                                    <label>
                                        <?php 
                                            if (isset($_POST['gender']) and $_POST['gender'] == 'M') {
                                                echo '<input type="radio" name="gender" value="M" checked="checked"> Male';
                                            } else {
                                                echo '<input type="radio" name="gender" value="M"> Male';
                                            }
                                        ?>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <?php 
                                            if (isset($_POST['gender']) and $_POST['gender'] == 'F') {
                                                echo '<input type="radio" name="gender" value="F" checked="checked"> Female';
                                            } else {
                                                echo '<input type="radio" name="gender" value="F"> Female';
                                            }
                                        ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Blood Group</label>
                            <div class="col-md-3">
                                <select class="form-control" name="blood_group">
                                    <?php
                                        if (!isset($_POST['blood_group'])) {
                                            echo '<option value="" disabled selected>-- Select --</option>';
                                        }
                                        $groups = ["A+","A-","B+","B-","O+","O-","AB+","AB-"];
                                        foreach ($groups as $val) {
                                            if (isset($_POST['blood_group']) and $_POST['blood_group'] == $val) {
                                                echo '<option value="' . $val . '" selected >' . $val . '</option>';
                                            } else {
                                                echo '<option value="' . $val . '" >' . $val . '</option>';
                                            }
                                        }
                                            
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-7"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">I wish to donate</label>
                            <div class="col-md-2">
                                <?php
                                    $organs = ["blood","kidney","liver"];
                                    foreach ($organs as $val) {
                                        if (isset($_POST[$val]) and !strpos($_POST[$val], $val)) {
                                            echo '<div class="checkbox"><label><input type="checkbox" name="' . $val .'" value="' . $val . '" checked="checked"> ' . $val . '</label></div>';
                                        } else {
                                            echo '<div class="checkbox"><label><input type="checkbox" name="' . $val . '" value="' . $val . '"> ' . $val . '</label></div>';
                                        }
                                    }
                                        
                                ?>
                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Street Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="street_address" value="<?php echo isset($_POST["street_address"]) ? $_POST["first_name"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="<?php echo isset($_POST["city"]) ? $_POST["city"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Postal Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code" value="<?php echo isset($_POST["postal_code"]) ? $_POST["postal_code"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Mobile Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile_number" value="<?php echo isset($_POST["mobile_number"]) ? $_POST["mobile_number"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>

                    <h5 style="padding-top: 10px;">Emergency contact person details</h5>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_name" value="<?php echo isset($_POST["ep_name"]) ? $_POST["ep_name"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Relationship</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="relationship" value="<?php echo isset($_POST["relationship"]) ? $_POST["relationship"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Street Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_street_address" value="<?php echo isset($_POST["ep_street_address"]) ? $_POST["ep_street_address"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_city" value="<?php echo isset($_POST["ep_city"]) ? $_POST["ep_city"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Postal Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_postal_code" value="<?php echo isset($_POST["ep_postal_code"]) ? $_POST["ep_postal_code"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_email" value="<?php echo isset($_POST["ep_email"]) ? $_POST["ep_email"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Mobile Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_mobile_number" value="<?php echo isset($_POST["ep_mobile_number"]) ? $_POST["ep_mobile_number"] : null ; ?>">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2"></label>
                            <div class="col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="condition1" value="true"> I understand and accept the MediCare Terms and Conditions.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(function () {
            date = '';
            if ($("#date_of_birth").data('postvalue')) {
                cd = $("#date_of_birth").data('postvalue');
                date = cd.substring(0, 4) + '-' + cd.substring(5, 7) + '-' + cd.substring(8, 10);
            } else {
                date = false;
            }
            $('#datetimepicker1').datetimepicker({
                format: 'YYYY-MM-DD',
                maxDate: new Date(),
                useCurrent: false,
                date:  $("#date_of_birth").data('postvalue') !== "" ? $("#date_of_birth").data('postvalue') : null
            });
        });

        $('#form_add').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });
    });
</script>
<?php 
    $this->displayErrors = array_reverse($this->displayErrors, true);
    foreach ($this->displayErrors as $key => $value){
        echo '<script> toastr.error("' . $value . '")</script>';
    }
?>
<?= $this->end(); ?>