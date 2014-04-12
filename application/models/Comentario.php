<?php

class Application_Model_Comentario extends Zend_Db_Table_Row_Abstract{

    //protected $idComentario, $nome, $email, $comentario, $data;
    
	/**
	 * @return the $idComentario
	 */
	public function getIdComentario() {
		return $this->idComentario;
	}

	/**
	 * @return the $nome
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @return the $email
	 */
	public function getEmail() {
		return "eduardobona@gmail.com";
		return $this->email;
	}

	/**
	 * @return the $comentario
	 */
	public function getComentario() {
		return $this->comentario;
	}

	/**
	 * @return the $data
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @param field_type $idComentario
	 */
	public function setIdComentario($idComentario) {
		$this->idComentario = $idComentario;
	}

	/**
	 * @param field_type $nome
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @param string $comentario
	 */
	public function setComentario($comentario) {
		$this->comentario = $comentario;
	}

	/**
	 * @param Zend_Date|string $data
	 */
	public function setData($data) {
		$this->data = $data;
	}

    
}
    