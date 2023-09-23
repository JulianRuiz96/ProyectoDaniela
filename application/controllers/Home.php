<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
    	parent::__construct();
    	if (!isset($this->session->userdata['logged_in'])) {
            redirect(base_url());
        }
    }

	public function index()
	{
		$data['contenido'] ='home';
        $this->load->view('template/template_base',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */