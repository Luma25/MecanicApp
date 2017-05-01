<?php
class Mecanicapp extends CI_Controller {
            public function __construct()
        {
                parent::__construct();
                $this->load->model('clientebdd');
                $this->load->helper('url_helper');
        }
  	public function index()
	{
		    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Bienvenido a MecanicApp';

    $data['subtitle1'] = 'Registre su auto';
    $this->form_validation->set_rules('rut', 'rut', 'required');
    $this->form_validation->set_rules('nombre', 'nombre', 'required');
$this->form_validation->set_rules('apellido', 'apellido', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
$this->form_validation->set_rules('pass', 'pass', 'required');


    if ($this->form_validation->run() === FALSE)
    {

 		$this->load->view('templates/header');
        $this->load->view('inicio/index',$data);
        $this->load->view('templates/footer');
	}
	
    else
    {
        $this->clientebdd->ingresar_usuario();
        $this->load->view('avisos/usuario_agregado');
    }
    }

}