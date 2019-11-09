<?php
namespace App\Models;
use Core\Model;

class Appointments extends Model {
  	protected static $_table = 'appointments', $_softDelete = true;
  	public $p_id,$d_id,$appointment_date,$hospital,$specialization_field,$payment,$created_at,$deleted = 0;


  	public function getAppointmentList($p_id){
  	}
}