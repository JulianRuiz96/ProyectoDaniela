<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carreras extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_carreras');
		if (!isset($this->session->userdata['logged_in'])) {
		    redirect(base_url());
		}
	}

	public function index()
	{
        $contenido['carreras']   = $this->Model_carreras->getCarreras();
		$contenido['contenido'] ='carreras';
		$this->load->view('template/template_base',$contenido);
	}

	/**
	 * [add description]: Función para agregar una carrera la database
	 * @param [type] $equiDes [description]: Descripción de la carrera.
	 * @param [type] $estado  [description]: Estado del equip
	 */
	public function add()
	{
		$data = [
            'carDes'  => $this->input->post('carDes'),
            'estado'  => $this->input->post('estado')
        ];
		if ($this->Model_carreras->add($data) == true) {
			echo '1';
		}else{
			echo '-1';
		}
	}

	/**
	 * /Update one item: Función para actualizar una carrera en la database.
	 * @return [type] [description]
	 */
	public function update()
	{
		$data = [
            'id'      => $id     = $this->input->post('id'),
            'carDes'  => $carDes = $this->input->post('carDes'),
            'estado'  => $estado = $this->input->post('estado')
        ];
        if ($this->Model_carreras->update($id, $data)==true) {
			redirect('carreras');
		} else {
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar la carrera seleccionada.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        if ($this->Model_carreras->delete($id)==true) {
			redirect('carreras');
		} else {
			return false;
		}
	}

}

/* End of file Carreras.php */
/* Location: ./application/controllers/Carreras.php */