<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_solicitudes extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}

	/*Read the data from DB */
	Public function getEvents()
	{
		
	$sql = "SELECT * FROM solicitudes WHERE solicitudes.date BETWEEN ? AND ? ORDER BY solicitudes.date ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

	}
	public function verificar()
	{
		$query = $this->db->where('events.date',$_POST['date']);
		$query = $this->db->get('events');
		if($query->num_rows() == 0) return $query;
		else return false;
	}
/*Create new events */

	Public function addEvent()
	{

	$sql = "INSERT INTO solicitudes (idEquipo, equiDes,codUser,horaInicial,horaFinal,solicitudes.date) VALUES (?,?,?,?,?,?)";
	$this->db->query($sql, array($_POST['id'], $_POST['equiDes'], $_POST['codUser'], $_POST['horaInicial'], $_POST['horaFinal'], $_POST['date']));
	$sql = "UPDATE equipo SET estado= ? WHERE id = ?";
	$this->db->query($sql, array($_POST['estado'], $_POST['id']));
	
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function updateEvent()
	{

	$sql = "UPDATE solicitudes SET equiDes= ?, codUser= ?, horaInicial= ?, horaFinal= ?, solicitudes.date= ? WHERE id = ?";
	$this->db->query($sql, array($_POST['equiDes'], $_POST['codUser'], $_POST['horaInicial'], $_POST['horaFinal'], $_POST['date'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}


	/*Delete event */

	Public function deleteEvent()
	{

	$sql = "DELETE FROM solicitudes WHERE id = ?";
	$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function dragUpdateEvent()
	{
			$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

			$sql = "UPDATE solicitudes SET  solicitudes.date = ? WHERE id = ?";
			$this->db->query($sql, array($date, $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;


	}

}

/* End of file Model_solicitudes.php */
/* Location: ./application/models/Model_solicitudes.php */
