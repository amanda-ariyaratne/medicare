<?php
namespace App\Models;
use Core\Model;

class Consultations extends Model {
	protected static $_table='consultations', $_softDelete = true;
	public $id,$doctor_id,$hospital_id,$date,$start_time,$end_time,$no_of_slots,$slots_filled,$fee,$deleted = 0;
	const blackListedFormKeys = ['id','deleted'];

	public function beforeSave(){
	    $this->timeStamps();
	}

	public function formatDate(){
		$this->date = date('Y-m-d', strtotime(str_replace('-', '/', $this->date)));
	}

	public function formatTime(){
		$this->date = $this->date . ':00';
	}

}