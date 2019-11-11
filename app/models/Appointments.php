<?php
namespace App\Models;
use Core\Model;

class Appointments extends Model {
  	protected static $_table = 'appointments', $_softDelete = true;
  	public $id, $p_id, $d_id, $date, $start_time, $end_time , $hospital_id, $payment, $created_at, $c_id,  $deleted = 0;
  	const blackListedFormKeys = ['id','deleted'];
 

  	public function getAppointmentList($p_id){
  	}


  	public function formatDate(){
		$this->date = substr($this->date, 6, 4) . '-' . substr($this->date, 3, 2) . '-' . substr($this->date, 0, 2);
	}

	public function formatTime(){
		$this->date = $this->date . ':00';
	}

  public function beforeSave(){
      $this->timeStamps();
  }

}