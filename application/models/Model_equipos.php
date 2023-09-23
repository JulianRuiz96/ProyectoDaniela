<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_equipos extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [add description]: Funcion para agregar un Equipo a a database
	 * @param [type] $equiDes [description]
	 * @param [type] $estado  [description]
	 */
	public function add($data)
	{
		$this->db->set($data);
		$this->db->insert('equipo');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * [update description]: Funcion para actualizar un equipo
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function update($id, $data)
	{
        $this->db->where('id', $id);
		$this->db->update('equipo', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar un registro de la tabla Equipos
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        $this->db->where('id', $id);
		$this->db->delete('equipo'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [getCaso description] : Obtiene una equipo en particular
	 * @return [type] [description]
	 */
	public function getEquipo($id){
		$this->db->where('id', $id);
		$query = $this->db->get('equipo');
		return $query->row();
	}

	/**
	 * [getCaso description] : Obtiene todas las equipos creadas
	 * @return [type] [description]
	 */
	public function getEquipos(){
		$query = $this->db->get('equipo');
		return $query->result();
	}
	public function getEquiposEstado()
	{
		$this->db->where('estado', 'Habilitado');
		$query = $this->db->get('equipo');
		return $query->result();
	}
}

/* End of file Model_equipos.php */
/* Location: ./application/models/Model_equipos.php */