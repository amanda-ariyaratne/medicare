<?php
namespace App\Models;
use Core\Model;

class Hospitals extends Model {
	protected static $_table='hospitals', $_softDelete = true;
	public $id,$name,$deleted = 0;
	const blackListedFormKeys = ['id','deleted'];

	public function beforeSave(){
	    $this->timeStamps();
	}
}