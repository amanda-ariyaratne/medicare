<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\DateOfBirthValidator;
use Core\Validators\EmailValidator;
use Core\Validators\MobileValidator;
use Core\Validators\AcceptedValidator;
use Core\Validators\CheckboxGroupRequiredValidator;

class Donors extends Model {
	protected static $_table='donors', $_softDelete = true;
	public $id,$first_name,$last_name,$date_of_birth,$gender,$blood_group,$street_address,$city,$postal_code,$email,$mobile_number,$ep_name,$relationship,$ep_street_address,$ep_city,$ep_postal_code,$ep_email,$ep_mobile_number,$blood, $kidney, $liver = 0;
	public $deleted = 0;
	public $conditions = array();
	public $organs = array();
	const blackListedFormKeys = ['id','deleted'];

	public function beforeSave(){
	    $this->timeStamps();
	}

	public function hasAcceptedConditions($condition1, $condition2, $condition3){
		return $condition1 and $condition2 and $condition3;
	}

	public function validator(){
		$this->runValidation(new RequiredValidator($this,['field'=>'first_name','msg'=>'First Name is required.']));
		$this->runValidation(new RequiredValidator($this,['field'=>'last_name','msg'=>'Last Name is required.']));
		$this->runValidation(new RequiredValidator($this,['field'=>'date_of_birth','msg'=>'Date of Birth is required.']));
		$this->runValidation(new RequiredValidator($this,['field'=>'date_of_birth','msg'=>'Date of Birth is required.']));
		$this->runValidation(new RequiredValidator($this,['field'=>'gender','msg'=>'Gender is required.']));
		$this->runValidation(new RequiredValidator($this,['field'=>'blood_group','msg'=>'Blood Group is required.']));
		$this->runValidation(new CheckboxGroupRequiredValidator($this,['field'=>'organs','msg'=>'Donation preferences are required.']));
		$this->runValidation(new RequiredValidator($this,['field'=>'email','msg'=>'Email is required.']));
		$this->runValidation(new RequiredValidator($this,['field'=>'mobile_number','msg'=>'Mobile Number is required.']));
		$this->runValidation(new DateOfBirthValidator($this,['field'=>'date_of_birth','msg'=>'Date of Birth is not valid']));
		$this->runValidation(new EmailValidator($this,['field'=>'email','msg'=>'Email Address is not valid']));
		$this->runValidation(new EmailValidator($this,['field'=>'ep_email','msg'=>'Contact person Email Address is not valid']));
		$this->runValidation(new MobileValidator($this,['field'=>'mobile_number','msg'=>'Mobile Number is not valid']));
		$this->runValidation(new MobileValidator($this,['field'=>'ep_mobile_number','msg'=>'Contact Person Mobile Number is not valid']));
		$this->runValidation(new AcceptedValidator($this,['field'=>'conditions','msg'=>'All conditions need to be accepted']));
	}

	public function formatDate(){
		$this->date = substr($this->date_of_birth, 6, 4) . '-' . substr($this->date_of_birth, 3, 2) . '-' . substr($this->date_of_birth, 0, 2);
	}

	public function setConditions($c1){
		array_push($this->conditions, $c1);
	}

	public function setOrgans($organs = []){
		foreach ($organs as $value) {
			array_push($this->organs, $value);
		}
	}
}