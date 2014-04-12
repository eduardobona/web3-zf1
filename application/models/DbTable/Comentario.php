<?php

class Application_Model_DbTable_Comentario extends Zend_Db_Table_Abstract
{
    // nome da tabela
    protected $_name = 'comentario';
    
    // chave primária
    protected $_primary = 'idComentario';
    
    protected $_rowClass = 'Application_Model_Comentario';
}
