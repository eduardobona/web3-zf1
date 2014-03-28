<?php

class ContatoController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $form = new Application_Form_ContatoForm();
        
        if($this->getRequest()->isPost()){
            if($form->isValid($this->getRequest()->getPost())){
                $valores = $form->getValues();

                echo "<pre>";
                var_dump($valores);
                echo "</pre>";

                exit;
            }
        }


        $this->view->form = $form;
    }
    
}