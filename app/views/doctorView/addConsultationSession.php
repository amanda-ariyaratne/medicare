<?= $this->setSiteTitle('MediCare - Add Consultation Session') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>


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
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Hospital</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option value="" disabled selected>-- Select --</option>
                                            <?php include 'HospitalList.php' ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Time</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="text" placeholder="from" class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" placeholder="to" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">No of slots</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Consultation fee</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>


<?= $this->end(); ?>