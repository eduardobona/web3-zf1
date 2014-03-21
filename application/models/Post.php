<?php

class Application_Model_Post extends Zend_Db_Table_Row_Abstract{

    //protected $idPost, $titulo, $resumo, $descricao, $data;
    
    public function getIdPost() {
	return $this->idPost;
    }

    public function setIdPost($idPost) {
	$this->idPost = $idPost;
    }

    public function getTitulo() {
	return $this->titulo;
    }

    public function setTitulo($titulo) {
	$this->titulo = $titulo;
    }

    public function getResumo() {
	return $this->resumo;
    }

    public function setResumo($resumo) {
	$this->resumo = $resumo;
    }

    public function getDescricao() {
	return $this->descricao;
    }

    public function setDescricao($descricao) {
	$this->descricao = $descricao;
    }

    public function getData() {
	return $this->data;
    }

    public function setData($data) {
	$this->data = $data;
    }
    
    public function getDataDescritiva(){
	$data = new Zend_Date($this->getData(), Zend_Date::ISO_8601);
	$descritiva = $data->get(Zend_Date::DAY) ." de ".$data->get(Zend_Date::MONTH_NAME) ." de ".$data->get(Zend_Date::YEAR);
	return $descritiva;
    }
}
