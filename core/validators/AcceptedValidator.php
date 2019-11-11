<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;

class AcceptedValidator extends CustomValidator {

  public function runValidation(){
    $conditions = $this->_model->{$this->field};
    $pass = true;
    if(!empty($conditions)){
    	foreach ($conditions as $value) {
            if (!$value) {
                $pass = false;
                break;
            }
        }
    }
    return $pass;
  }
}
