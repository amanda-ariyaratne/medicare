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
    		
    		Router::redirect('');
    	}

    	$hospitals = hospitals::find();
    	$this->view->render('DoctorView/addConsultationSession',["hospitals" => $hospitals]);
    }

    public function viewAllAction(){
    	$all_consultations = Consultations::find(["conditions" => ["doctor_id = ?"], "bind" => [Users::currentUser()->id]]);
    	$this->view->render('DoctorView/consultationsList',["consultations" => $all_consultations]);
    }

  }