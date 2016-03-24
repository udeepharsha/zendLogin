<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SuccessController extends AbstractActionController
{
    public function indexAction()
    {
        if (! $this->serviceLocator
                 ->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('login');
        }

        return new ViewModel();
    }
}