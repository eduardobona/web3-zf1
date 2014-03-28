<?php

class Application_Form_ContatoForm extends Zend_Form{
    
    public function init(){
        // 1. Configuração
        $this->setAction("/contato");
        $this->setMethod("post");
        

        // 2. Criação dos Elementos
        $nome = new Zend_Form_Element_Text("nome");
        $nome->setLabel("Nome");
        $nome->setRequired();

        $email = new Zend_Form_Element_Text("email");
        $email->setLabel("Email");

        $codigo_promocao = new Zend_Form_Element_Text("codigo_promocao");
        $codigo_promocao->setLabel("Promoção");
        $codigo_promocao->addValidator(new Zend_Validate_Alnum());
        $codigo_promocao->addFilter('StringToLower');
        
        $mensagem = new Zend_Form_Element_Textarea("mensagem");
        $mensagem->setLabel("Mensagem");
        $mensagem->setRequired();
        
        $submit = new Zend_Form_Element_Submit("Enviar");
        $submit->setLabel("Enviar");

        // 3, Adicionar os elementos no formulário
        $elementos = array($nome, $email, $codigo_promocao, $submit);        
        $this->addElements($elementos);
    }
}

?>
