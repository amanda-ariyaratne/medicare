<?php
  namespace App\Controllers;
  use Core\Controller;

  class DoctorController extends Controller {

    public function addConsultationSessionAction() {
      $this->view->render('DoctorView/addConsultationSession');
    }
  }