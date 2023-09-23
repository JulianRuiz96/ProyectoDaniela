<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['logged_in'])) {
		    redirect(base_url());
		}
	}

	public function index()
	{
        $contenido['contenido'] ='configuracion';
		$this->load->view('template/template_base',$contenido);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file configuracion.php */
/* Location: ./application/controllers/configuracion.php */
