<?php
defined('BASEPATH')OR exit('No direct script access allowed');
class Model_reportes extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getSolicitudes()
	{
		$query = $this->db
			->select('S.equiDes, S.horaInicial, S.horaFinal, S.date, U.nombres, U.apellidos, U.email, U.rolDes, U.tuserDes, U.sede, U.carrera, E.equiDes')
			->from('solicitudes as S')
			->JOIN('usuarios as U', 'S.codUser=U.codUser')
			->JOIN('equipo as E', 'S.idEquipo=E.id')
			->get();

		return $query->result();
	}
}	
?>