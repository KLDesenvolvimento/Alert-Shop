<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class funcoesDao extends CI_Model
	{

		function __construct()
		{

			parent::__construct();

		}

		public function getIdFuncionario($cpf)
		{

			var_dump($cpf);
			die();

			$sql = "SELECT 
			idFuncionario 
			FROM 
			funcionario 
			WHERE 
			cpfFuncionario = '$cpf'";

			$query = $this->db->query($sql);

			if($sql)
			{

				return $query->row();

			}
			else
			{

				return false;

			}

		}

	}

?>