<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;

class appointmentDateValidator extends CustomValidator {

  public function runValidation(){
    $date = $this->_model->{$this->field};
    $pass = true;
    if(!empty($date)){
    	$arr = explode("/",$date);
		
		foreach ($arr as $a) {
			if(!is_numeric($a)){
				return false;
			}
			if (!(0<$a)) {
				return false;
			}

		}
		if (strlen($arr[0]) != 2 and  strlen($arr[0]) != 2 and strlen($arr[2]) != 4) {
			return false;
		}
		if(count($arr) != 3){
			return false;
		}
    }
    return $pass;
  }
}
