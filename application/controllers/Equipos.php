<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_equipos');
    	if (!isset($this->session->userdata['logged_in'])) {
		    redirect(base_url());
		}
	}

	public function index()
	{
		$contenido['equipos']   = $this->Model_equipos->getEquipos();
		$contenido['contenido'] ='equipos';
		$this->load->view('template/template_base',$contenido);
	}

	/**
	 * [add description]: Función para agregar un equipo la database
	 * @param [type] $equiDes [description]: Descripción del equipo
	 * @param [type] $estado  [description]: Estado del equip
	 */
	public function add()
	{
		$data = [
            'equiDes'  => $this->input->post('equiDes'),
            'estado'  	=> $this->input->post('estado')
        ];
		if ($this->Model_equipos->add($data) == true) {
			echo '1';
		}else{
			echo '-1';
		}
	}

	/**
	 * /Update one item: Función para actualizar un equipo en la database
	 * @return [type] [description]
	 */
	public function update()
	{
		$data = [
            'id'      => $id      = $this->input->post('id'),
            'equiDes' => $equiDes = $this->input->post('equiDes'),
            'estado'  => $estado  = $this->input->post('estado')
        ];
        if ($this->Model_equipos->update($id, $data)==true) {
			redirect('equipos');
		} else {
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar el equipo seleccionado
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        if ($this->Model_equipos->delete($id)==true) {
			redirect('equipos');
		} else {
			return false;
		}
	}
}

/* End of file equipos.php */
/* Location: ./application/controllers/equipos.php */