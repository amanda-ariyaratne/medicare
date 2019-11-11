<?= $this->setSiteTitle('MediCare -  Appointment') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>
    <?php use Core\FH; ?>



    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Do you want to save the appointment?</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="card-title">Add</h4>
                            <form action="<?=PROOT?>Patient/submitAppointment" class="" method="POST">
                                <?= FH::csrfInput() ?>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Hospital</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" readonly="readonly" value=<?=$params['hospital']?> >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Specilization Feild</label>
                                    <div class="col-md-10" >
                                        <input type="text" class="form-control" readonly="readonly" value=<?=$params['specialization']?>  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Doctor</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control"  readonly="readonly" value=<?=$params['doctor_fname'] , $params['doctor_lname']?>>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="date" readonly="readonly" value=<?=$params['date']?> >
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Time</label>
                                    <div class="input-group date col-md-3" id="datetimepicker2" data-target-input="nearest">
                                        <input type="text" class="form-control" name="start_time" readonly="readonly" value=<?=$params['start_time']?> > 
                                    </div>
                                    <label class="col-form-label col-md-1"><center>to</center></label>
                                    <div class="input-group date col-md-3" id="datetimepicker3" data-target-input="nearest">
                                        <input type="text" class="form-control" name="end_time" readonly="readonly" value=<?=$params['end_time']?> > 
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="d_id" readonly="readonly" value=<?=$params['doctor_id']?> > 
                                <input type="hidden" class="form-control" name="hospital_id" readonly="readonly" value=<?=$params['hospital_id']?> > 
                                <input type="hidden" class="form-control" name="c_id" readonly="readonly" value=<?=$params['c_id']?> > 

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    
                                </div>
                            </form>
                            <div class="col-sm-8 col-9 text-right m-b-20">
                                <a href="<?=PROOT?>patient/requestAppointment" class="btn btn btn-primary">Discard</a>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>



<?= $this->end(); ?>