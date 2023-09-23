<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_rol');
		if (!isset($this->session->userdata['logged_in'])) {
      		redirect(base_url());
  		}
	}

	public function index()
	{
        $contenido['roles']     = $this->Model_rol->getRoles();
		$contenido['contenido'] = 'roles';
		$this->load->view('template/template_base',$contenido);
	}

	/**
	 * [add description]: Función para agregar un rol la database
	 * @param [type] $rolDes  [description]: Descripción del rol
	 * @param [type] $estado  [description]: Estado del rol
	 */
	public function add()
	{
		$data = [
            'rolDes'  => $this->input->post('rolDes'),
            'estado'  	=> $this->input->post('estado')
        ];
		if ($this->Model_rol->add($data) == true) {
			echo '1';
		}else{
			echo '-1';
		}
	}

	/**
	 * /Update one item: Función para actualizar un rol en la database
	 * @return [type] [description]
	 */
	public function update()
	{
		$data = [
            'id'      => $id      = $this->input->post('id'),
            'rolDes'  => $rolDes  = $this->input->post('rolDes'),
            'estado'  => $estado  = $this->input->post('estado')
        ];
        if ($this->Model_rol->update($id, $data)==true) {
			redirect('rol');
		} else {
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar el rol seleccionado
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        if ($this->Model_rol->delete($id)==true) {
			redirect('rol');
		} else {
			return false;
		}
	}
}

/* End of file rol.php */
/* Location: ./application/controllers/rol.php */
