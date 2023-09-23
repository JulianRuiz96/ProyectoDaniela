<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_carreras extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	// List all your items
	public function index()
	{

	}

	/**
	 * [add description]: Funcion para agregar una carrera a la database.
	 * @param [type] $equiDes [description]
	 * @param [type] $estado  [description]
	 */
	public function add($data)
	{
		$this->db->set($data);
		$this->db->insert('carreras');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * [update description]: Funcion para actualizar una carrera.
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function update($id, $data)
	{
        $this->db->where('id', $id);
		$this->db->update('carreras', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [delete description]: Función para eliminar una carrera de la database.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id)
	{
        $this->db->where('id', $id);
		$this->db->delete('carreras');
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	 * [getCaso description] : Obtiene una carrera en particular.
	 * @return [type] [description]
	 */
	public function getCarrera($id){
		$this->db->where('id', $id);
		$query = $this->db->get('carreras');
		return $query->row();
	}

	/**
	 * [getCaso description] : Obtiene todas las equipos creadas
	 * @return [type] [description]
	 */
	public function getCarreras(){
		$query = $this->db->get('carreras');
		return $query->result();
	}

}

/* End of file Model_carreras.php */
/* Location: ./application/models/Model_carreras.php */
