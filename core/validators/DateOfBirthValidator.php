<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;

class DateOfBirthValidator extends CustomValidator {

  public function runValidation(){
    $date_of_birth = $this->_model->{$this->field};
    $pass = true;
    if(!empty($date_of_birth)){
    	$today = date("Y-m-d");
    	$diff = date_diff(date_create($date_of_birth), date_create($today));
    	if ($diff->format('%y%') <= 0) {
    		$pass = false;
    	}
    }
    return $pass;
  }
}
