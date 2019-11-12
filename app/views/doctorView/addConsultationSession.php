<?php
use Core\FH;
?>

<?= $this->setSiteTitle('MediCare - Add Consultation Session') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>

<?php $hospitals = $params["hospitals"]; ?>

    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Add Consultation Session</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="card-title">Add</h4>
                            <form action="" method="POST" id="form_add">
                                <?= FH::csrfInput() ?>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Hospital</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="hospital_id">
                                            <option value="" disabled selected>-- Select --</option>
                                            <?php
                                                foreach ($hospitals as $h) {
                                                    echo '<option value="' . $h->id . '" >' . $h->name . '</option>';
                                                } 
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date</label>
                                    <div class="input-group date col-md-3" id="datetimepicker1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input " data-target="#datetimepicker1" name="date" />
                                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Time</label>
                                    <div class="input-group date col-md-3" id="datetimepicker2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input " data-target="#datetimepicker2" name="start_time" />
                                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <label class="col-form-label col-md-1"><center>to</center></label>
                                    <div class="input-group date col-md-3" id="datetimepicker3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input " data-target="#datetimepicker3" name="end_time" />
                                        <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">No of slots</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="no_of_slots">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Consultation fee</label>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input class="form-control" type="text" name="fee">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="input-group-append col-md-3 "></div>
                                    <div class="input-group-append col-md-3 "></div>
                                    <div class="input-group-append col-md-3 "></div>
                                    <div class="input-group-append col-md-3 ">
                                        <button class="btn btn-primary btn-lg" type="submit" style="padding: .5rem 2rem; font-size: 1.2rem">Submit</button>
                                    </div>
                                </div>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
        <script type="text/javascript">
            $(document).ready(function(){
                $(function () {
                    minimum_date = new Date();
                    minimum_date.setDate(minimum_date.getDate() + 7);
                    year = minimum_date.getUTCFullYear();
                    month = minimum_date.getUTCMonth() + 1;
                    day = minimum_date.getUTCDate();
                    minimum_date = year + '-' + month + '-' + day;
                    console.log(minimum_date);
                    $('#datetimepicker1').datetimepicker({
                        format: 'YYYY-MM-DD',
                        minDate: minimum_date,
                        date: null
                    });
                    $('#datetimepicker2').datetimepicker({
                        format: 'HH:mm'
                    });
                    $('#datetimepicker3').datetimepicker({
                        format: 'HH:mm'
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