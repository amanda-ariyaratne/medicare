<?php
  	namespace App\Controllers;
  	use Core\Controller;
  	use Core\Router;
  	use App\Models\Appointments;
  	use App\Models\Users;
  	use App\Models\Hospitals;
  	use App\Models\Specializations;
    use App\Models\Consultations;
    use Core\H;

  	class PatientController extends Controller {

    	public function requestAppointmentAction() {
        $newAppointment = new Appointments();
    		$hospitals = hospitals::find();
    		$spec = Specializations::find();
    		$doctors = Users::find(['conditions'=>'acl = ?' , 'bind' => ["Doctor"]]);
    		$params = [
    			"hospitals" => $hospitals , 
    			"spec" => $spec,
    			"doctors" => $doctors
    		];
        $this->view->displayErrors = $newAppointment->getErrorMessages();

      	$this->view->render('PatientView/requestAppointment',$params);
    	}


		public function appointmentListAction() {
			$user = Users::currentUser();
			$params = array();
			$appointment_obj = Appointments::find(['conditions'=>'p_id = ?' , 'bind' => [$user->id]]);
			$params['appointments'] = $appointment_obj;
			$params2 = array();
			if(!empty($params['appointments'])){
				foreach ($params['appointments'] as $app) {
					$appointment = array();
					$appointment['obj'] = $app;
					$doctor = Users::findFirst(['conditions'=>'id = ?' , 'bind' => [$app->d_id]]);
					$appointment['doctor_fname'] = $doctor->fname;
					$appointment['doctor_lname'] = $doctor->lname;
					$hospital = Hospitals::findFirst(['conditions'=>'id = ?' , 'bind' => [$app->hospital_id]]);
					$appointment['hospital'] = $hospital->name;
					$spec = Specializations::findFirst(['conditions'=>'id = ?' , 'bind' => [$doctor->specialization]]);
					$appointment['specialization_field'] = $spec->name;
					array_push($params2, $appointment);
				}
			}
      		$this->view->render('PatientView/appointmentList' , $params2);
    	}














    	public function addAppointmentAction(){

    		$newAppointment = new Appointments();

    		if ($this->request->isPost()) {
    			$this->request->csrfCheck();
    			$newAppointment->assign($this->request->get(), Appointments::blackListedFormKeys);

          $newAppointment->validator();
          if($newAppointment->validationPassed()){

      			$newAppointment->p_id = Users::currentUser()->id;
            $newAppointment->formatDate();
            $consultations = Consultations::find(['conditions'=>['doctor_id = ?' , 'hospital_id = ?' , 'date = ?'] , 'bind' => [$newAppointment->d_id ,  $newAppointment->hospital_id , $newAppointment->date]]);
            if (!empty($consultations)){
              foreach ($consultations as $c) {
                if ($c->no_of_slots > $c->slots_filled) {
                  $con = $c;
                  $hospital = Hospitals::findFirst(['conditions'=>'id = ?' , 'bind' => [$newAppointment->hospital_id]]);
                  $doc = Users::findFirst(['conditions'=>'id = ?' , 'bind' => [$newAppointment->d_id]]);
                  $spec = Specializations::findFirst(['conditions'=>'id = ?' , 'bind' => [$doc->specialization]]);
                  $params = [
                    'hospital' => $hospital->name,
                    'hospital_id' => $hospital->id,
                    'specialization' => $spec->name,
                    'doctor_fname' => $doc->fname,
                    'doctor_lname' => $doc->lname,
                    'doctor_id' => $doc->id,
                    'date' => $newAppointment->date,
                    'start_time' => $con->start_time,
                    'end_time' => $con->end_time,
                    'c_id' => $con->id
                  ];
                  $this->view->render('PatientView/viewRequestedAppointment',$params);
                  break;
                }
              }
            }
            else{$this->view->render('PatientView/appointmentFailed');}
          }


          $this->view->displayErrors = $newAppointment->getErrorMessages();
          $hospitals = hospitals::find();
          $spec = Specializations::find();
          $doctors = Users::find(['conditions'=>'acl = ?' , 'bind' => ["Doctor"]]);
          $params = [
            "hospitals" => $hospitals , 
            "spec" => $spec,
            "doctors" => $doctors
          ];

            $this->view->render('PatientView/requestAppointment',$params);

    		}
        else{
          $hospitals = hospitals::find();
          $this->view->render('PatientView/requestAppointment',["hospitals" => $hospitals]);
        }
    		

      }




        public function submitAppointmentAction(){
          $newAppointment = new Appointments();

          if ($this->request->isPost()) {
            #$this->request->csrfCheck();
            
            $newAppointment->assign($this->request->get(), Appointments::blackListedFormKeys);
            $newAppointment->p_id = Users::currentUser()->id;


            $newAppointment->beforeSave();
            var_dump('came 0');

            $newAppointment->save();
            var_dump('came 1');
            $consultation_obj = new Consultations();
            $slots_filled_pre = (   $consultation_obj->findFirst(['conditions'=>'id = ?' , 'bind' => [$newAppointment->c_id]])   )->slots_filled;
            var_dump("came 2");

            $fields=['slots_filled'=> $slots_filled_pre+1];
            $consultation_obj->id = $newAppointment->c_id;
            $a = $consultation_obj->update($fields);

            $this->view->render('PatientView/appointmentSuccess');
          }
        }

    	
  	}