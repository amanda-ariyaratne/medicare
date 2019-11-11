<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;

class CheckboxGroupRequiredValidator extends CustomValidator {

  public function runValidation(){
    $organs = $this->_model->{$this->field};
    $pass = true;
    if(empty($organs)){
    	$pass = false;
    }
    return $pass;
  }
}
