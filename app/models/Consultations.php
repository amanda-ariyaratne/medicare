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
		$this->date = substr($this->date, 6, 4) . '-' . substr($this->date, 3, 2) . '-' . substr($this->date, 0, 2);
	}

	public function formatTime(){
		$this->date = $this->date . ':00';
	}

}