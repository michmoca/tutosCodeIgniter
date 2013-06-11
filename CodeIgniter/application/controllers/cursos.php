<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('codigoFacilito_model');

	}

	public function index(){
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('codigofacilito/headers');
		if(!$data['segmento']){
			$data['cursos'] = $this->codigoFacilito_model->obtenerCursos();
		}
		else{
			$data['cursos'] = $this->codigoFacilito_model->obtenerCursos($data['segmento']);
		}
		
		$this->load->view('cursos/cursos',$data);
	}

	public function nuevo(){
		$this->load->view('codigofacilito/headers');
		$this->load->view('cursos/formulario');
	}

	public function recibirDatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'videos' => $this->input->post('videos')
			);
		$this->codigoFacilito_model->crearCurso($data);
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido');

	}

}

?>