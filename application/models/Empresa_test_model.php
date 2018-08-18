<?php

/**
 * Description of user_model
 *
 * @author Hernando Peña <hpena@leanstaffing.com>
 */
class Empresa_test_model extends CRUD_model {

    protected $_table = 'empresa_test';
    protected $_primary_key = 'idempresa_test';

    public function __construct() {
        parent::__construct();
    }

    public function get_roles($id) {
        $this->db->select('user_role.iduser_role AS id ,'
                . ' role.idrole AS id_role,'
                . ' role.class AS class,'
                . ' role.function AS function,');
        $this->db->from($this->_table);
        $this->db->join('role', 'role.idrole = user_role.role_idrole');
        $this->db->join('user', 'user.iduser = user_role.user_iduser');

        $this->db->where('user.iduser', $id);
        $q = $this->db->get();
        return $q->result_array();
    }

}
