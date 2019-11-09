<?php
namespace App\Models;
use Core\Model;

class Specializations extends Model {
	protected static $_table='specializations', $_softDelete = true;
	public $id,$name,$deleted = 0;
	const blackListedFormKeys = ['id','deleted'];

	public function beforeSave(){
	    $this->timeStamps();
	}
}