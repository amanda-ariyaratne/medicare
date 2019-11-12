<?= $this->setSiteTitle('MediCare -  Request Appointment') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>
    <?php use Core\FH; ?>

    <?php 
        $hospitals = $params["hospitals"];
        $spec = $params["spec"];
        $doctors = $params['doctors'];
     ?>

    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Request An Appointment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="card-title">Add</h4>
                            <form action="<?=PROOT?>Patient/addAppointment" class="" method="POST">
                                <?= FH::csrfInput() ?>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Hospital</label>
                                    <div class="col-md-10">
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
                                    <label class="col-form-label col-md-2">Doctor</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="d_id">
                                            <option value="" disabled selected>-- Select --</option>
                                            <?php
                                                foreach ($doctors as $d) {
                                                    echo '<option value="' . $d->id . '" >' . $d->fname . ' '.$d->lname.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date</label>
                                    <div class="input-group date col-md-3" id="" data-target-input="">
                                        <input type="text" class="form-control" name="date" placeholder="DD/MM/YYYY"> 
                                    </div>
                                </div>
                                

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>



<?php 
    $this->displayErrors = array_reverse($this->displayErrors, true);
    foreach ($this->displayErrors as $key => $value){
        echo '<script> toastr.error("' . $value . '")</script>';
    }
?>



<?= $this->end(); ?>