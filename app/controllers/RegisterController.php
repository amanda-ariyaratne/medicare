<?php
namespace App\Controllers;
use Core\Controller;
use Core\Router;
use App\Models\Users;
use App\Models\Login;
use App\Models\Specializations;
use Core\H;
use Core\Session;

class RegisterController extends Controller {

  public function onConstruct(){
    $this->view->setLayout('default');
  }

  public function loginAction() {

    $loginModel = new Login();
    if($this->request->isPost()) {

      // form validation
      // $this->request->csrfCheck();

      $loginModel->assign($this->request->get());
      $loginModel->validator();
      if($loginModel->validationPassed()){

        $user = Users::findByUsername($_POST['username']);

        if($user && password_verify($this->request->get('password'), $user->password)) {
          $remember = $loginModel->getRememberMeChecked();
          $user->login($remember);
          Router::redirect('');
        }  else {
          $loginModel->addErrorMessage('username','There is an error with your username or password');
        }
      }
    }
    $this->view->login = $loginModel;
    $this->view->displayErrors = $loginModel->getErrorMessages();
    $this->view->renderHome('register/login');
  }

  public function logoutAction() {
    if(Users::currentUser()) {
      Users::currentUser()->logout();
    }
    Router::redirect('home');
  }

  public function registerAction() {
    $newUser = new Users();
    if($this->request->isPost()) {

      $this->request->csrfCheck();
      $newUser->assign($this->request->get(),Users::blackListedFormKeys);
      $newUser->confirm =$this->request->get('confirm');
      $newUser->username = $newUser->email;

      if($newUser->save()){
        $newUser->login();
        Router::redirect('');
      }
    }
    $this->view->newUser = $newUser;
    $this->view->displayErrors = $newUser->getErrorMessages();
    $specializations = Specializations::find();
    $this->view->renderHome('register/register', ["specializations" => $specializations]);
  }
}
