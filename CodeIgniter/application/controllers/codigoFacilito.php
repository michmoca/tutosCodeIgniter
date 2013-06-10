<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');

	}

	public function index()
	{
		$this->load->library('menu',array('Inicio','Contacto','Cursos','por fin lo logre jeje'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido',$data);
	}

	public function holaMundo(){
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido');
	}

	public function nuevo(){
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/formulario');
	}


}
/*el mae del tutorial cerro  php pero en welcome no se cierra */
?>