<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('Model_login');
    }

	public function index()
	{
	    $this->load->view('login');
	}
    
    /**
     * [login description]: Funcion para logearse en el sistema.
     * @return [type] [description]: El array con toda la información del usuario.
     */
	public function log_in() {
		$codUser 	= $this->input->post("codUser");
		$contrasena = sha1($this->input->post("contrasena"));
		$resp 		= $this->Model_login->login($codUser, $contrasena);
		if($resp){
			$data = [
				"id" 	 	=> $resp->id,
				"nombres" 	=> $resp->nombres,
				"apellidos"	=> $resp->apellidos,
				"codUser"	=> $resp->codUser,
				"email"		=> $resp->email,
				"rolDes"	=> $resp->rolDes,
				"tuserDes"	=> $resp->tuserDes,
				"sede"		=> $resp->sede,
				"carrera"	=> $resp->carrera,
				"logged_in" => TRUE
			];
            $this->session->set_userdata($data);
		} else {
			echo "error";
		}
	}

	/**
     * [logout description]: Función para destruir la sesión del usuario.
     * @return [type] [description]: Retorna al usuario al login.
     */
	public function log_out()
    {
    	$this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */