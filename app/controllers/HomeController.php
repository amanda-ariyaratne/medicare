<?php
  namespace App\Controllers;
  use Core\Controller;

  class HomeController extends Controller {

    public function indexAction() {
      $this->view->renderHome('home/index');
    }
    public function newHAction() {
      $this->view->render('home/newH');
    }
  }
