<?php

/**
 * Description of user_model
 *
 * @author Hernando Peña <hpena@leanstaffing.com>
 */
class empresa_model extends CRUD_model {
    
    protected $_table = 'empresa';
    protected $_primary_key = 'idempresa';    

    public function __construct() {
        parent::__construct();
    }
    
    

}
