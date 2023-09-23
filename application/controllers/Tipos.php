<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_tipos');
		if (!isset($this->session->userdata['logged_in'])) {
      		redirect(base_url());
  		}
	}

	public function index()
	{
        $contenido['tipos']     = $this->Model_tipos->getTipos();
		$contenido['contenido'] = 'tipos';
		$this->load->view('template/template_base',$contenido);
	}

	/**
	 * [add description]: Función para agregar un tipo de usuario la database
	 * @param [type] $tuserDes  [description]: Descripción del tipo de usuario
	 * @param [type] $estado  	[description]: Estado del tipo de usuario
	 */
	public function add()
	{
		$data = [
            'tuserDes'  => $this->input->post('tuserDes'),
            'estado'  	=> $this->input->post('estado')
        ];
		if ($this->Model_tipos->add($data) == true) {
			echo '1';
		}else{
			echo '-1';
		}
	}

	/**
	 * /Update one item: Función para actualizar un tipo de usuario en la database
	 * @return [type] [description]
	 */
	public function update()
	{
		$data = [
            'id'      	=> $id      = $this->input->post('id'),
            'tuserDes'  => $tuserDes= $this->input->post('tuserDes'),
            'estado'  	=> $estado  = $this->input->post('estado')
        ];
        if ($this->Model_tipos->update($id, $data)==true) {
			redirect('tipos');
		} else {
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar el tipo de usuario seleccionado
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        if ($this->Model_tipos->delete($id)==true) {
			redirect('tipos');
		} else {
			return false;
		}
	}
}

/* End of file Tipos.php */
/* Location: ./application/controllers/Tipos.php */