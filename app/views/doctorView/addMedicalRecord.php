<?= $this->setSiteTitle('MediCare - Add Medical Record') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Add Medical Record</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="card-title">add</h4>
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Hospital</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>-- Select --</option>
                                            <option>Asiri, Colombo</option>
                                            <option>Navaloka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Symptoms</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Diagnosis</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Comments</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Medications</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Add reports</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary" type="button">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>



<?= $this->end(); ?>