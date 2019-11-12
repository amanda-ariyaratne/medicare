<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\DateOfBirthValidator;
use Core\Validators\EmailValidator;
use Core\Validators\MobileValidator;

class DonorOrgans extends Model {
	protected static $_table='donor_organs', $_softDelete = true;
	public $id,$donor_id,$organ,$created_at,$updated_at,$deleted = 0;
	const blackListedFormKeys = ['id','deleted'];

	public function beforeSave(){
	    $this->timeStamps();
	}

	public function validator(){
		
	}

	public static function getDonorOrgans($d_id){
		$sql = "SELECT * FROM donor_organs WHERE donor_id = " . $d_id . ";";
		return Donors::getDB()->query($sql)->results();
	}
}