<?php
use Core\FH;
?>

<?= $this->setSiteTitle('MediCare - Donation Registration') ?>

<?= $this->start('head'); ?>
    <style type="text/css">
        .form-control {
            border-color: #ccc;
        }
    </style>
<?= $this->end(); ?>



<?= $this->start('body'); ?>

<?php
    $d = $params["donor"];
    $donated_organs = $params["organs"];
?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">You are registered</h4>
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
                                <input type="text" class="form-control" name="first_name" value="<?php echo isset($d->first_name) ? $d->first_name : null ; ?>" disabled="disabled">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="<?php echo isset($d->last_name) ? $d->last_name : null; ?>" disabled="disabled">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Date of Birth</label>
                            <div class="input-group date col-md-3" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input " data-target="#datetimepicker1" name="date_of_birth" id="date_of_birth" data-postvalue="<?php echo isset($d->date_of_birth) ? $d->date_of_birth : null; ?>" disabled="disabled"/>
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
                                            if (isset($d->gender) and $d->gender == 'M') {
                                                echo '<input type="radio" name="gender" value="M" checked="checked" disabled> Male';
                                            } else {
                                                echo '<input type="radio" name="gender" value="M" disabled> Male';
                                            }
                                        ?>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <?php 
                                            if (isset($d->gender) and $d->gender == 'F') {
                                                echo '<input type="radio" name="gender" value="F" checked="checked" disabled> Female';
                                            } else {
                                                echo '<input type="radio" name="gender" value="F" disabled> Female';
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
                                            if (isset($d->blood_group) and $d->blood_group == $val) {
                                                echo '<option value="' . $val . '" selected disabled>' . $val . '</option>';
                                            } else {
                                                echo '<option value="' . $val . '" disabled>' . $val . '</option>';
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
                                        if (in_array($val, $donated_organs)) {
                                            echo '<div class="checkbox"><label><input type="checkbox" name="' . $val .'" value="' . $val . '" checked="checked" disabled> ' . $val . '</label></div>';
                                        } else {
                                            echo '<div class="checkbox"><label><input type="checkbox" name="' . $val . '" value="' . $val . '" disabled> ' . $val . '</label></div>';
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
                                <input type="text" class="form-control" name="street_address" value="<?php echo isset($d->street_address) ? $d->street_address : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="<?php echo isset($d->city) ? $d->city : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Postal Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code" value="<?php echo isset($d->postal_code) ? $d->postal_code : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="<?php echo isset($d->email) ? $d->email : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Mobile Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile_number" value="<?php echo isset($d->mobile_number) ? $d->mobile_number : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>

                    <h5 style="padding-top: 10px;">Emergency contact person details</h5>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_name" value="<?php echo isset($d->ep_name) ? $d->ep_name : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Relationship</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="relationship" value="<?php echo isset($d->relationship) ? $d->relationship : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Street Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_street_address" value="<?php echo isset($d->ep_street_address) ? $d->ep_street_address : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_city" value="<?php echo isset($d->ep_city) ? $d->ep_city : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Postal Code</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_postal_code" value="<?php echo isset($d->ep_postal_code) ? $d->ep_postal_code : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_email" value="<?php echo isset($d->ep_email) ? $d->ep_email : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Mobile Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ep_mobile_number" value="<?php echo isset($d->ep_mobile_number) ? $d->ep_mobile_number : null ; ?>" disabled>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2"></label>
                            <div class="col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="condition1" value="true" checked="checked" disabled> I understand and accept the MediCare Terms and Conditions.
                                    </label>
                                </div>
                            </div>
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
<?= $this->end(); ?>