<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_usuarios');
		$this->load->model('Model_tipos');
		$this->load->model('Model_rol');
		$this->load->model('Model_carreras');
		if (!$this->session->userdata("logged_in")) {
	  		redirect(base_url());
	  	}
	}

	// List all your items
	public function index()
	{
		$contenido['carreras']  = $this->Model_carreras->getCarreras();
		$contenido['roles']  	= $this->Model_rol->getRoles();
		$contenido['tipos']  	= $this->Model_tipos->getTipos();
		$contenido['usuarios']  = $this->Model_usuarios->getUsuarios();
        $contenido['contenido'] ='usuarios';
		$this->load->view('template/template_base',$contenido);
	}

	/**
	 * [add description]: Función para agregar un usuario al sistema
	 */
	public function add()
	{
        if($this->input->post())
        {
        	$Mensaje = $this->Model_usuarios->add();

        	if($Mensaje)
        	{
        		echo "1";
        	}
        	else
        	{
        		echo "-1";
        	}
        }
	}

	/**
	 * /Update one item: Función para actualizar un Usuario en la database
	 * @return [type] [description]
	 */
	public function update()
	{
		$data = [
            'id'        => $id         = $this->input->post('id'),
            'nombres'   => $nombres    = $this->input->post('nombres'),
            'apellidos' => $apellidos  = $this->input->post('apellidos'),
            'codUser'   => $codUser    = $this->input->post('codUser'),
            'contrasena'=> $contrasena = sha1($this->input->post('contrasena')),
            'email'  	=> $email      = $this->input->post('email'),
            'rolDes'  	=> $rolDes     = $this->input->post('rolDes'),
            'tuserDes'  => $tuserDes   = $this->input->post('tuserDes'),
            'sede'		=> $sede       = $this->input->post('sede'),
            'carrera'	=> $carrera    = $this->input->post('carrera')
        ];
        if ($this->Model_usuarios->update($id, $data)==true) {
			redirect('usuarios');
		} else {
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar el Usuario seleccionado
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        if ($this->Model_usuarios->delete($id)==true) {
			redirect('usuarios');
		} else {
			return false;
		}
	}

}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */
