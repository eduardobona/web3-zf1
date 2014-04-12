<?php
class Application_Form_ComentarioForm extends Twitter_Bootstrap_Form_Horizontal {
	public function init() {
		
		$this->setElementDecorators(array(
				array('FieldSize'),
				array('ViewHelper'),
				array('Addon'),
				array('ElementErrors'),
				array('Description', array('tag' => 'p', 'class' => 'help-block')),
				array('HtmlTag', array('tag' => 'div', 'class' => 'controls')),
				array('Label', array('class' => 'control-label')),
				array('Wrapper')
		));
		
		// 1. Configuração
		$this->setAction ( "/index/mostrar/id/91" );
		$this->setMethod ( "post" );
		
		// 2. Criação dos Elementos
		$nome = new Zend_Form_Element_Text ( "nome" );
		$nome->setLabel ( "Nome" );
		$nome->setRequired ();
		
		$email = new Zend_Form_Element_Text ( "email" );
		$email->setLabel ( "Email" );
		
		$mensagem = new Zend_Form_Element_Textarea ( "mensagem" );
		$mensagem->setLabel ( "Mensagem" );
		$mensagem->setRequired ();
		
		$teste = new Twitter_Bootstrap_Form_Element_Submit("submit");
		
		$submit = new Zend_Form_Element_Submit ( "Enviar" );
		$submit->setLabel ( "Enviar" );
		
		// 3, Adicionar os elementos no formulário
		$elementos = array (
				$nome,
				$email,
				$mensagem,
				$teste,
				$submit 
		);
		$this->addElements ( $elementos );
	}
}

?>
