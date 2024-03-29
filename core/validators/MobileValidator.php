<?php
namespace Core\Validators;
use Core\Validators\CustomValidator;

class MobileValidator extends CustomValidator {

  public function runValidation(){
    $mobile = $this->_model->{$this->field};
    $pass = true;
    if(!empty($mobile)){
    	$regex = '/^(?:0|94|\+94|0094)?(?:(11|21|23|24|25|26|27|31|32|33|34|35|36|37|38|41|45|47|51|52|54|55|57|63|65|66|67|81|91)(0|2|3|4|5|7|9)|7(0|1|2|5|6|7|8)\d)\d{6}$/';
        $pass = preg_match_all($regex, $mobile);
    }
    return $pass;
  }
}
