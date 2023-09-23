<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tipos extends CI_Model {
    
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
	 * [add description]: Funcion para agregar un tipo de usuario a la database
	 * @param [type] $tuserDes  [description]
	 * @param [type] $estado    [description]
	 */
	public function add($data)
	{
		$this->db->set($data);
		$this->db->insert('tipousuario');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * [update description]: Funcion para actualizar un tipo de usuario
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function update($id, $data)
	{
        $this->db->where('id', $id);
		$this->db->update('tipousuario', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar un tipo de usuario de la tabla Rol
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        $this->db->where('id', $id);
		$this->db->delete('tipousuario'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [getCaso description] : Obtiene un tipo de usuario en particular
	 * @return [type] [description]
	 */
	public function getTipo($id){
		$this->db->where('id', $id);
		$query = $this->db->get('tipousuario');
		return $query->row();
	}

	/**
	 * [getCaso description] : Obtiene todos los roles creados
	 * @return [type] [description]
	 */
	public function getTipos(){
		$query = $this->db->get('tipousuario');
		return $query->result();
	}
}

/* End of file Model_tipos.php */
/* Location: ./application/models/Model_tipos.php */