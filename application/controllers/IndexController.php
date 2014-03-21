<?php

class IndexController extends Zend_Controller_Action
{

    // model a ser utilizado por todos os actions
    protected $model;
    
    // é executada em todos os actions
    public function init()
    {
        // model recebendo objeto Posts
        $this->model = new Application_Model_Posts;
    }

    // criando index action http://localhost ou http://localhost/index ou http://localhost/index/index
    public function indexAction()
    {
        // recebendo posts do método get posts
        $posts = $this->model->getPosts();
        
        // criando variável de view (posts) os posts recebidos
        $this->view->posts = $posts;
    }
    
    // criando mostrar action http://localhost/index/mostrar
    public function mostrarAction(){
        // verificando se
        // - foi pasasdo parâmetro id
        // - e se o parâmetro é um numérico
        if($this->hasParam("id") and is_numeric($this->getParam("id"))){
            // recebendo parâmetro
            $idPost = $this->getParam("id");
        }else{
            // redireciopnando para página inicial
            $this->_helper->redirector("index");
        }
        
        // rebendo post específico passando por parâmetro o id recebido
        $post = $this->model->getPost($idPost);
        
        // verificando se post foi encontrado
        if(! $post){
            // se post não foi encontrado, redirecionar para página inicial
           $this->_helper->redirector("index");
        }
        
         // criando variável de view (post)o post recebido
        $this->view->post = $post;        
    }
}