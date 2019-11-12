<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\appointmentDateValidator;

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


  public function validator(){
    $this->runValidation(new RequiredValidator($this,['field'=>'hospital_id','msg'=>'hospital is required.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'d_id','msg'=>' Doctor name is required.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'date','msg'=>' Date required']));
    $this->runValidation(new appointmentDateValidator($this,['field'=>'date','msg'=>' Input date error']));
  
  }
}