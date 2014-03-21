<?php

class Application_Model_DbTable_Post extends Zend_Db_Table_Abstract
{
    // nome da tabela
    protected $_name = 'post';
    
    // chave primária
    protected $_primary = 'idPost';
    
    protected $_rowClass = 'Application_Model_Post';
}
