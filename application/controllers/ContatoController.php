<?php

class ContatoController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $form = new Application_Form_ContatoForm();
        
        if($this->getRequest()->isPost() and $form->isValid($this->getRequest()->getPost())){
            $values = $form->getValues();
            
            $model = new Application_Model_DbTable_Contato();
            
            $model->createRow($values)->save();
            
        }
        
        $this->view->form = $form;
    }
    
}