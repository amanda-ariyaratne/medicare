<?= $this->setSiteTitle('MediCare -  Appointment Failed') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>




    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <h3>No available slots</h3>
                <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?=PROOT?>patient/requestAppointment" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Request Appointment</a>
                </div>
            </div>
        </div>
    </div>



<?= $this->end(); ?>