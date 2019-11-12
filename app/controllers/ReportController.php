<?php
  namespace App\Controllers;
  use Core\Controller;

  class ReportController extends Controller {

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