<?php
  	namespace App\Controllers;
  	use Core\Controller;
  	use Core\Router;
	use App\Models\Appointments;
	use App\Models\Users;

  	class PatientController extends Controller {

    	public function requestAppointmentAction() {
      		$this->view->render('PatientView/requestAppointment');
    	}


		public function appointmentListAction() {
			$user = Users::currentUser();

			$params = array();

			$appointment_obj = Appointments::find(["p_id" => $user->id]);

			$params['appointments'] = $appointment_obj;
			var_dump($params);
			

  	
      		$this->view->render('PatientView/appointmentList' , $params);
    	}


  	}