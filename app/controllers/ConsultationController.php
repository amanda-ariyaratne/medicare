<?php
  namespace App\Controllers;
  use Core\Controller;
  use Core\Router;
  use App\Models\Hospitals;
  use App\Models\Consultations;
  use App\Models\Users;


  class ConsultationController extends Controller {

    public function addAction() {

    	$newConsultation = new Consultations();
    	if ($this->request->isPost()) {
    		$this->request->csrfCheck();
    		$newConsultation->assign($this->request->get(), Consultations::blackListedFormKeys);
    		$newConsultation->doctor_id = Users::currentUser()->id;
    		$newConsultation->formatDate();
    		$newConsultation->save();
    		
    		Router::redirect('consultation/viewAll');
    	}

    	$hospitals = hospitals::find();
    	$this->view->render('DoctorView/addConsultationSession',["hospitals" => $hospitals]);
    }



    public function viewAllAction(){
      $sql = "SELECT * FROM consultations JOIN hospitals ON consultations.hospital_id = hospitals.id WHERE consultations.deleted != 1 AND doctor_id = ?";
      $query = Consultations::getDB()->query($sql, [Users::currentUser()->id]);
      $all_consultations = Consultations::getDB()->results();
      
    	$this->view->render('DoctorView/consultationsList',["consultations" => $all_consultations]);
    }

  }