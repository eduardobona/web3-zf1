<?php

class Application_Model_Posts extends Application_Model_DbTable_Post{
    
    // criando método getPosts que rotorna
    // - 10 posts que tenham status = 1
    // se informado valor false, não será paginado
    public function getPosts($usar_paginacao = true){        
        // criação de objeto SQL
        $sql = $this->select();
        
        // limitando em 10 resultados
	// passa a não exisitar mais depois do paginator
        // $sql->limit(10);
	
	// ordenando resultado
	$sql->order("data DESC");
        
        // adicionando cláusula de status = 1
        $sql->where("status = 1");
        
        // recebendo posts através do objeto SQL
	// passa a não exisitar mais depois do paginator
        // $posts = $this->fetchAll($sql);
        
        if($usar_paginacao){
            $request = Zend_Controller_Front::getInstance()->getRequest();
            $pagina = $request->getParam("page", 1);

            $paginator = Zend_Paginator::factory($sql);
            $paginator->setItemCountPerPage(3);
            $paginator->setCurrentPageNumber($pagina);
            
            $resultados = $paginator;
        }else{
            $resultados = $this->fetchAll($sql);
        }
	
        // retornando posts
        // return $posts;
	return $resultados;
    }
    
    // criando método getPost que
    // -recebe por parâmetro um id e retorna o post respectivo
    public function getPost($idPost){
        // realiza a busca através da chave primária
        $post = $this->find($idPost);
        
        // retorna objeto
        return $post->current();
    }
    
}

?>
