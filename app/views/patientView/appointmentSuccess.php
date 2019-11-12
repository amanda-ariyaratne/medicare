<?= $this->setSiteTitle('MediCare -  Appointment Success') ?>

<?= $this->start('head'); ?>

<?= $this->end(); ?>



<?= $this->start('body'); ?>


    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <h1>Successfully saved the appointment</h1>
                <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="<?=PROOT?>patient/appointmentList" class="btn btn btn-primary btn-rounded float-right"> Continue</a>
                </div>
            </div>
        </div>
    </div>



<?= $this->end(); ?>