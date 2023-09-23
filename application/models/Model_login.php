<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	/**
	 * [login description] : Función que permite consultar $user y $pass de la tabla 'usuarios'
	 * @param  [type] $user  [description] : Código del estudiante o docente de la universidad.
	 * @param  [type] $pass  [description] : Clave del estudiante o docente de la universidad.
	 * @return [type]        [description]
	 */
	public function login($codUser, $contrasena)
 	{
        $this->db->where("codUser", $codUser);
        $this->db->where("contrasena", $contrasena);
        $query = $this->db->get("usuarios");
        if ($query->num_rows()>0) {
            return $query->row();
        } else {
            return false;
        }
    }
}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */