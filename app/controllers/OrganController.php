<?php
  namespace App\Controllers;
  use Core\Controller; 
  use Core\Router;
  use App\Models\Donors;
  use App\Models\DonorOrgans;
  use App\Models\Users;

  class OrganController extends Controller {

    public function registerAction() {
      $donor = new Donors();
      if ($this->request->isPost()) {
        // $this->request->csrfCheck();

        $donor->assign($this->request->get(), Donors::blackListedFormKeys);
        $donor->formatDate();
        $donor->user_id = Users::currentUser()->id;
        
        $organs_array = array();
        if ($this->request->get('blood') !== "") {
          array_push($organs_array, $this->request->get('blood'));
        }
        if ($this->request->get('liver') !== "") {
          array_push($organs_array, $this->request->get('liver'));
        }
        if ($this->request->get('kidney') !== "") {
          array_push($organs_array, $this->request->get('kidney'));
        }
        $donor->setOrgans($organs_array);

        $donor->setConditions($this->request->get('condition1') !== "" ? $this->request->get('condition1') : false);
        
        if ($donor->save()) {
          foreach ($donor->organs as $organ) {
            $newOrgan = new DonorOrgans();
            $newOrgan->donor_id = $donor->id;
            $newOrgan->organ = $organ;
            $newOrgan->save();
          }
          Router::redirect('');
        }
        
      }
      $this->view->displayErrors = $donor->getErrorMessages();
      $this->view->render('organ/register');
    }

  }