<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author Nando
 */
class empresa extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('empresa_model');
        $roles = $this->session->userdata('roles');
        $i = 0;
        if ($roles) {
            foreach ($roles as $role => $row) {
                $GLOBALS['roles'][$i] = $row['class'] . '/' . $row['function'];
                $i++;
            }
        }
    }

    public function index() {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data['class'] = $this->get_class_name();
        $data['user'] = $this->session->userdata('name');
        $data['roles'] = $GLOBALS['roles'];
        $data['empresas'] = $this->empresa_model->get();


        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/empresa_view');
        $this->load->view('global/footer_view');
    }

    public function pass_encoder($pass) {
        echo hash('sha256', $pass . SALT);
    }

    public function editar($id) {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data = $this->get_session_user_data();
        $data['roles'] = $GLOBALS['roles'];

        $empresas = $this->empresa_model->get($id);
        $data['empresa'] = $empresas[0];

        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/update_view');
        $this->load->view('global/footer_view');
    }

}
