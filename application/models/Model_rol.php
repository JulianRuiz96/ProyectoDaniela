<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rol extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	// List all your items
	public function index( $offset = 0 )
	{

	}

	/**
	 * [add description]: Funcion para agregar un Rol a la database
	 * @param [type] $rolDes  [description]
	 * @param [type] $estado  [description]
	 */
	public function add($data)
	{
		$this->db->set($data);
		$this->db->insert('rol');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * [update description]: Funcion para actualizar un rol
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function update($id, $data)
	{
        $this->db->where('id', $id);
		$this->db->update('rol', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar un rol de la tabla Rol
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        $this->db->where('id', $id);
		$this->db->delete('rol'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [getCaso description] : Obtiene un rol en particular
	 * @return [type] [description]
	 */
	public function getRol($id){
		$this->db->where('id', $id);
		$query = $this->db->get('rol');
		return $query->row();
	}

	/**
	 * [getCaso description] : Obtiene todos los roles creados
	 * @return [type] [description]
	 */
	public function getRoles(){
		$query = $this->db->get('rol');
		return $query->result();
	}
}

/* End of file Model_rol.php */
/* Location: ./application/models/Model_rol.php */