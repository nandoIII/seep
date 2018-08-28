<?php

/**
 * Description of user_model
 *
 * @author Hernando Peña <hpena@leanstaffing.com>
 */
class actividad_model extends CRUD_model {
    
    protected $_table = 'actividad';
    protected $_primary_key = 'idactividad';    

    public function __construct() {
        parent::__construct();
    }
    
    

}
