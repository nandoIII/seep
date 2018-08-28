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
        $this->load->model('empresa_test_model');
        $this->load->model('actividad_model');
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
        $this->load->view('empresa/edit_view');
        $this->load->view('global/footer_view');
    }

    public function registrar_test() {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data = $this->get_session_user_data();
        $data['roles'] = $GLOBALS['roles'];

        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/register_test_view');
        $this->load->view('global/footer_view');
    }

    public function insertar_test($id) {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data = $this->get_session_user_data();
        $data['roles'] = $GLOBALS['roles'];

        $valores = $this->validar_ingresos_test($_POST);
        $valores['empresa_idempresa'] = $id;
        $test_id = $this->empresa_test_model->insert($valores);

        if ($test_id) {
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
        }
    }

    public function editar_test($id) {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data = $this->get_session_user_data();
        $data['roles'] = $GLOBALS['roles'];

        $data['empresa'] = $this->empresa_model->get($id)[0];
        $data['empresa_test'] = $this->empresa_test_model->get(['empresa_idempresa' => $id])[0];
        //print_r($data['empresa_test']);
        //return false;
        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/update_test_view');
        $this->load->view('global/footer_view');
    }

    public function actualizar_test($id) {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data = $this->get_session_user_data();
        $data['roles'] = $GLOBALS['roles'];

        $valores = $this->validar_ingresos_test($_POST);
        $updated = $this->empresa_test_model->update($valores, $id);

        if ($updated) {
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
        }
    }

    public function get_test($id) {
//        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
//        $data = $this->get_session_user_data();
//        $data['roles'] = $GLOBALS['roles'];

        $test = $this->empresa_test_model->get(['empresa_idempresa' => $id]);
        $valores = $this->get_promedio_areas($test[0]);
        $this->output->set_output(json_encode($valores));
    }

    public function get_actividades_test($id) {
//        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
//        $data = $this->get_session_user_data();
//        $data['roles'] = $GLOBALS['roles'];

        $tests = $this->empresa_test_model->get(['empresa_idempresa' => $id]);
        $valores = [];
        foreach ($tests as $test) {
            array_push($valores, $this->get_promedio_areas($test));
        }
        $this->output->set_output(json_encode($valores));
    }

    function get_promedio_areas($test) {
        $sufijos = ['estrat_', 'proceso_', 'organi_', 'articu_', 'aprend_'];
        //$sufijos = ['estrat_'];
        $valores = [];
        foreach ($sufijos as $item) {
            $con = 0;
            $sum = 0;
            $prom = 0;
            for ($i = 1; $i <= 10; $i++) {
                foreach ($test as $index => $value) {
                    if ($item . $i == $index) {
                        $con++;
                        $sum+= $value;
                    }
                }
            }
            $prom = $sum / $con;
            array_push($valores, number_format($prom, 1));
        }
        return $valores;
    }

    public function getRadarDiagnostico($id) {
        $data['idempresa'] = $id;
        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/graphics');
        $this->load->view('global/footer_view');
    }
    
    public function get_radar_actividades($id) {
        $data['idempresa'] = $id;
        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/actividad_graphics_view');
        $this->load->view('global/footer_view');
    }    

    public function get_actividades($id) {
        $data['idempresa'] = $id;

        $data['actividades'] = $this->actividad_model->get(['empresa_idempresa' => $id]);
        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/actividad_view');
        $this->load->view('global/footer_view');
    }

    public function add_actividad($id) {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data = $this->get_session_user_data();
        $data['roles'] = $GLOBALS['roles'];

        $data['idempresa'] = $id;
        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/register_actividad_view');
        $this->load->view('global/footer_view');
    }

    public function insert_actividad($id) {

        $ultimo_test = $this->empresa_test_model->get(['empresa_idempresa' => $id], 'idempresa_test', 'DESC')[0];
        $ultimo_test['idempresa_test'] = '';
        $test_actividad_id = $this->empresa_test_model->insert($ultimo_test);

        $empresa_idempresa = $id;
        $caracterizacion = $this->input->post('caracterizacion');
        $estrategia = $this->input->post('estrategia');
        $proceso = $this->input->post('proceso');
        $organizacion = $this->input->post('organizacion');
        $articulacion = $this->input->post('articulacion');
        $aprendizaje = $this->input->post('aprendizaje');
        $conocimiento = $this->input->post('conocimiento');
        $final = $this->input->post('final');
        $fecha = $this->input->post('fecha');

        $actividad_id = $this->actividad_model->insert([
            'empresa_idempresa' => $empresa_idempresa,
            'empresa_test_idempresa_test' => $test_actividad_id,
            'caracterizacion' => $caracterizacion,
            'estrategia' => $estrategia,
            'proceso' => $proceso,
            'organizacion' => $organizacion,
            'articulacion' => $articulacion,
            'aprendizaje' => $aprendizaje,
            'conocimiento' => $conocimiento,
            'final' => $final,
            'fecha' => $fecha
        ]);

        if ($actividad_id) {
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
        }
    }

    public function editar_test_actividad($id, $idtest) {
        $this->_required_login($this->router->fetch_class(), $this->router->fetch_method());
        $data = $this->get_session_user_data();
        $data['roles'] = $GLOBALS['roles'];

        $data['empresa'] = $this->empresa_model->get($id)[0];
        $data['empresa_test'] = $this->empresa_test_model->get(['empresa_idempresa' => $id], 'idempresa_test', 'DESC')[0];
        $data['idtest'] = $idtest;
        //print_r($data['empresa_test']);
        //return false;
        $this->load->view('global/header_view', $data);
        $this->load->view('empresa/update_test_actividad_view');
        $this->load->view('global/footer_view');
    }

    public function validar_ingresos_test($datos) {
        $valores = [];

        //Caracterizacion

        if (isset($datos['caract_1'])) {
            $valores['caract_1'] = $datos['caract_1'];
        }

        if (isset($datos['caract_2'])) {
            $valores['caract_2'] = $datos['caract_2'];
        }

        if (isset($datos['caract_3'])) {
            $valores['caract_3'] = $datos['caract_3'];
        }

        if (isset($datos['caract_4'])) {
            $valores['caract_4'] = $datos['caract_4'];
        }

        if (isset($datos['caract_5'])) {
            $valores['caract_5'] = $datos['caract_5'];
        }

        // Estrategia

        if (isset($datos['estrat_1'])) {
            $valores['estrat_1'] = $datos['estrat_1'];
        }

        if (isset($datos['estrat_2'])) {
            $valores['estrat_2'] = $datos['estrat_2'];
        }

        if (isset($datos['estrat_3'])) {
            $valores['estrat_3'] = $datos['estrat_3'];
        }

        if (isset($datos['estrat_4'])) {
            $valores['estrat_4'] = $datos['estrat_4'];
        }

        if (isset($datos['estrat_5'])) {
            $valores['estrat_5'] = $datos['estrat_5'];
        }

        if (isset($datos['estrat_6'])) {
            $valores['estrat_6'] = $datos['estrat_6'];
        }

        if (isset($datos['estrat_7'])) {
            $valores['estrat_7'] = $datos['estrat_7'];
        }

        if (isset($datos['estrat_8'])) {
            $valores['estrat_8'] = $datos['estrat_8'];
        }

        //Proceso

        if (isset($datos['proceso_1'])) {
            $valores['proceso_1'] = $datos['proceso_1'];
        }

        if (isset($datos['proceso_2'])) {
            $valores['proceso_2'] = $datos['proceso_2'];
        }

        if (isset($datos['proceso_3'])) {
            $valores['proceso_3'] = $datos['proceso_3'];
        }

        if (isset($datos['proceso_4'])) {
            $valores['proceso_4'] = $datos['proceso_4'];
        }

        if (isset($datos['proceso_5'])) {
            $valores['proceso_5'] = $datos['proceso_5'];
        }

        if (isset($datos['proceso_6'])) {
            $valores['proceso_6'] = $datos['proceso_6'];
        }

        if (isset($datos['proceso_7'])) {
            $valores['proceso_7'] = $datos['proceso_7'];
        }

        if (isset($datos['proceso_8'])) {
            $valores['proceso_8'] = $datos['proceso_8'];
        }

        if (isset($datos['proceso_9'])) {
            $valores['proceso_9'] = $datos['proceso_9'];
        }

        // Organizacion

        if (isset($datos['organi_1'])) {
            $valores['organi_1'] = $datos['organi_1'];
        }

        if (isset($datos['organi_2'])) {
            $valores['organi_2'] = $datos['organi_2'];
        }

        if (isset($datos['organi_3'])) {
            $valores['organi_3'] = $datos['organi_3'];
        }

        if (isset($datos['organi_4'])) {
            $valores['organi_4'] = $datos['organi_4'];
        }

        if (isset($datos['organi_5'])) {
            $valores['organi_5'] = $datos['organi_5'];
        }

        if (isset($datos['organi_6'])) {
            $valores['organi_6'] = $datos['organi_6'];
        }

        if (isset($datos['organi_7'])) {
            $valores['organi_7'] = $datos['organi_7'];
        }

        if (isset($datos['organi_8'])) {
            $valores['organi_8'] = $datos['organi_8'];
        }

        // Articulacion

        if (isset($datos['articu_1'])) {
            $valores['articu_1'] = $datos['articu_1'];
        }

        if (isset($datos['articu_2'])) {
            $valores['articu_2'] = $datos['articu_2'];
        }

        if (isset($datos['articu_3'])) {
            $valores['articu_3'] = $datos['articu_3'];
        }

        if (isset($datos['articu_4'])) {
            $valores['articu_4'] = $datos['articu_4'];
        }

        if (isset($datos['articu_5'])) {
            $valores['articu_5'] = $datos['articu_5'];
        }

        if (isset($datos['articu_6'])) {
            $valores['articu_6'] = $datos['articu_6'];
        }

        if (isset($datos['articu_7'])) {
            $valores['articu_7'] = $datos['articu_7'];
        }

        // Aprendizaje


        if (isset($datos['aprend_1'])) {
            $valores['aprend_1'] = $datos['aprend_1'];
        }

        if (isset($datos['aprend_2'])) {
            $valores['aprend_2'] = $datos['aprend_2'];
        }

        if (isset($datos['aprend_3'])) {
            $valores['aprend_3'] = $datos['aprend_3'];
        }

        if (isset($datos['aprend_4'])) {
            $valores['aprend_4'] = $datos['aprend_4'];
        }

        if (isset($datos['aprend_5'])) {
            $valores['aprend_5'] = $datos['aprend_5'];
        }

        if (isset($datos['aprend_6'])) {
            $valores['aprend_6'] = $datos['aprend_6'];
        }

        if (isset($datos['aprend_7'])) {
            $valores['aprend_7'] = $datos['aprend_7'];
        }

        // Conocimiento

        if (isset($datos['conoci_1'])) {
            $valores['conoci_1'] = $datos['conoci_1'];
        }

        if (isset($datos['conoci_2'])) {
            $valores['conoci_2'] = $datos['conoci_2'];
        }

        if (isset($datos['conoci_3'])) {
            $valores['conoci_3'] = $datos['conoci_3'];
        }

        if (isset($datos['conoci_4'])) {
            $valores['conoci_4'] = $datos['conoci_4'];
        }

        if (isset($datos['conoci_5'])) {
            $valores['conoci_5'] = $datos['conoci_5'];
        }

        if (isset($datos['conoci_6'])) {
            $valores['conoci_6'] = $datos['conoci_6'];
        }

        if (isset($datos['conoci_7'])) {
            $valores['conoci_7'] = $datos['conoci_7'];
        }

        if (isset($datos['conoci_8'])) {
            $valores['conoci_8'] = $datos['conoci_8'];
        }

        if (isset($datos['conoci_9'])) {
            $valores['conoci_9'] = $datos['conoci_9'];
        }

        if (isset($datos['conoci_10'])) {
            $valores['conoci_10'] = $datos['conoci_10'];
        }

        if (isset($datos['conoci_11'])) {
            $valores['conoci_11'] = $datos['conoci_11'];
        }

        if (isset($datos['conoci_12'])) {
            $valores['conoci_12'] = $datos['conoci_12'];
        }

        // Datos finales

        if (isset($datos['codigo_ciiu'])) {
            $valores['codigo_ciiu'] = $datos['codigo_ciiu'];
        }

        if (isset($datos['sitio_web'])) {
            $valores['sitio_web'] = $datos['sitio_web'];
        }

        if (isset($datos['direccion'])) {
            $valores['direccion'] = $datos['direccion'];
        }

        if (isset($datos['sector'])) {
            $valores['sector'] = $datos['sector'];
        }

        if (isset($datos['programa'])) {
            $valores['programa'] = $datos['programa'];
        }

        //print_r($valores);

        return $valores;
    }

}
