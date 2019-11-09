<?php
  namespace App\Controllers;
  use Core\Controller;

  class DoctorController extends Controller {

    public function addMedicalRecordAction() {
      $this->view->render('DoctorView/addMedicalRecord');
    }

    public function MedicalReportAction() {
      $this->view->render('DoctorView/medicalReport');
    }
    public function patientListAction() {
      $this->view->render('DoctorView/patientList');
    }
    public function medicalReportListAction() {
      $this->view->render('DoctorView/medicalReportList');
    }
  }