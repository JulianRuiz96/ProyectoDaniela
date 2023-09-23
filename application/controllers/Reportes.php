<?php
defined('BASEPATH')OR exit('No direct script access allowed');
class Reportes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_reportes');
		if (!isset($this->session->userdata['logged_in'])) {
		    redirect(base_url());
		}
	}
	public function index()
	{
        $contenido['contenido'] ='reportes';
		$this->load->view('template/template_base',$contenido);
	}
	public function getSolicitudes()
	{
		$rep = $this->Model_reportes->getSolicitudes();
		echo json_encode($rep);
	}
}	
?>