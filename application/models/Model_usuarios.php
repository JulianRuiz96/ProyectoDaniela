<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuarios extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [add description]: Funcion para agregar un Usuario a la database
	 * @param [type] $equiDes [description]
	 * @param [type] $estado  [description]
	 */
	public function add()
	{
		$this->nombres 		= $_POST['nombres'];
	    $this->apellidos 	= $_POST['apellidos'];
	    $this->codUser 		= $_POST['codUser']; 
	    $this->contrasena	= sha1($_POST['contrasena']); 
	    $this->email 		= $_POST['email']; 
	    $this->rolDes 		= $_POST['rolDes'];
	    $this->tuserDes 	= $_POST['tuserDes'];
	    $this->sede 		= $_POST['sede'];
		$this->carrera 		= $_POST['carDes'];

        $query = $this->db->insert('usuarios', $this);
        return $query;    
	}

	/**
	 * [update description]: Funcion para actualizar un Usuario
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function update($id, $data)
	{
        $this->db->where('id', $id);
		$this->db->update('usuarios', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar un registro de la tabla Usuario
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        $this->db->where('id', $id);
		$this->db->delete('usuarios'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [getCaso description] : Obtiene un Usuario en particular
	 * @return [type] [description]
	 */
	public function getUsuario($id){
		$this->db->where('id', $id);
		$query = $this->db->get('usuarios');
		return $query->row();
	}

	/**
	 * [getCaso description] : Obtiene todas los usuarios creados
	 * @return [type] [description]
	 */
	public function getUsuarios(){
		$query = $this->db->get('usuarios');
		return $query->result();
	}

}
/* End of file Model_usuarios.php */
/* Location: ./application/models/Model_usuarios.php */