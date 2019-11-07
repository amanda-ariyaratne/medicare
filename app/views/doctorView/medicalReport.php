<?= $this->setSiteTitle('MediCare - Medical Record') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Medical Record</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="card-title">report</h4>
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="25-09-2019" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Doctor</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="Dr.Fernando" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Hospital</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="Asiri Hospital" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Symptoms</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="headache" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Diagnosis</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="Maleria" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Comments</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="very very bad" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Medications</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="asprin 50 mg" readonly="readonly">
                                    </div>
                                </div>
                                
                                
                                <button class="btn btn-primary" type="button">View Lab Reports</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

<?= $this->end(); ?>