<?php

class Application_Form_ContatoForm extends Zend_Form{
    
    public function init(){
        $this->setAction("/contato");
        $this->setMethod("post");
        
        $nome = new Zend_Form_Element_Text("nome");
        $nome->setLabel("Nome");
        $nome->setRequired();

        $telefone = new Zend_Form_Element_Text("telefone");
        $telefone->setLabel("Telefone");
        $telefone->setRequired();
        
        $mensagem = new Zend_Form_Element_Textarea("mensagem");
        $mensagem->setLabel("Mensagem");
        $mensagem->setRequired();
        
        $submit = new Zend_Form_Element_Submit("Enviar");
        $submit->setLabel("Enviar");
        
        $elementos = array($nome, $telefone, $mensagem, $submit);
        
        $this->addElements($elementos);
    }
}

?>
