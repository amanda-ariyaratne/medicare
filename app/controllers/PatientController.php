<?php
  namespace App\Controllers;
  use Core\Controller;

  class PatientController extends Controller {

    public function requestAppointmentAction() {
      $this->view->render('PatientView/requestAppointment');
    }
  }