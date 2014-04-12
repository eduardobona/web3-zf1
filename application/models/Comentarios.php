<?php
class Application_Model_Comentarios extends Application_Model_DbTable_Comentario {
	
	/**
	 * Retorna todos os comentários ordenados pela data
	 *
	 * @param bool $habilitar_paginator
	 *        	para habilitar a paginação
	 * @return Zend_Db_Table_Rowset_Abstract Zend_Paginator
	 */
	public function getComentarios($habilitar_paginator = true) {
		$sql = $this->select ();
		$sql->order ( "data DESC" );
		
		if ($habilitar_paginator) {
			$request = Zend_Controller_Front::getInstance ()->getRequest ();
			$pagina = $request->getParam ( "page", 1 );
			
			$paginator = Zend_Paginator::factory ( $sql );
			$paginator->setItemCountPerPage ( 3 );
			$paginator->setCurrentPageNumber ( $pagina );
			
			$resultados = $paginator;
		} else {
			$resultados = $this->fetchAll ( $sql );
		}
		
		return $resultados;
	}
	
	/**
	 * Retorna todos os comentários relacionados ao post
	 *
	 * @param integer $idPost        	
	 * @return Zend_Db_Table_Rowset_Abstract
	 */
	public function getComentariosPorPost($idPost) {
		$sql = $this->select ();
		$sql->where ( "idPost = ? ", $idPost );
		$sql->order ( "data DESC" );
		
		$resultados = $this->fetchAll ( $sql );
		
		return $resultados;
	}
	
	/**
	 * retornar comentário especificado por id
	 *
	 * @param int $idComentario        	
	 * @return Application_Model_Comentario
	 */
	public function getComentario($idComentario) {
		$post = $this->find ( $idComentario );
		return $post->current ();
	}
	
	/**
	 * Realizar Cadastro
	 *
	 * @param array $dados        	
	 * @return boolean retorna true se o cadastro for efetivado
	 */
	public function cadastrar($dados) {
		$comentario = $this->createRow (); /* @var $comentario Application_Model_Comentario */
		
		$comentario->setNome ( $dados ["nome"] );
		$comentario->setEmail ( $dados ["email"] );
		$comentario->setComentario ( $dados ["comentario"] );
		
		$data_agora = new Zend_Date ();
		$comentario->setData ( $data_agora->get ( Zend_Date::ISO_8601 ) );
		
		if ($comentario->save ()) {
			return true;
		} else {
			return false;
		}
	}
}

?>