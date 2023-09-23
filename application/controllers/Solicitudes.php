<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitudes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_equipos');
		$this->load->model('Model_solicitudes');

		if (!isset($this->session->userdata['logged_in'])) {
		    redirect(base_url());
		}
	}

	// List all your items
	public function index()
	{
		$contenido['equipos'] = $this->Model_equipos->getEquipos();
        $contenido['contenido'] ='solicitudes';
		$this->load->view('template/template_base',$contenido);
	}

	public function returnCodUser()
	{
		echo json_encode($this->session->userdata('codUser'));
	}

	/*Get all Events */

	Public function getEvents()
	{
		$result=$this->Model_solicitudes->getEvents();
		echo json_encode($result);
	}
	/*Add new event */
	Public function addEvent()
	{
		$result=$this->Model_solicitudes->addEvent();
		echo $result;
		
	}
	/*Update Event */
	Public function updateEvent()
	{
		$result=$this->Model_solicitudes->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	Public function deleteEvent()
	{
		$result=$this->Model_solicitudes->deleteEvent();
		echo $result;
	}
	Public function dragUpdateEvent()
	{	

		$result=$this->Model_solicitudes->dragUpdateEvent();
		echo $result;
	}

	public function getEquipos()
	{
		$resp = $this->Model_equipos->getEquiposEstado();
		echo json_encode($resp);
	}

}

/* End of file Solicitudes.php */
/* Location: ./application/controllers/Solicitudes.php */
