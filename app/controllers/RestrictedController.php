<?php
namespace App\Controllers;
use Core\Controller;

class RestrictedController extends Controller {

  public function indexAction() {
    $this->view->renderHome('restricted/index');
  }

  public function badTokenAction(){
    $this->view->renderHome('restricted/badToken');
  }
}
