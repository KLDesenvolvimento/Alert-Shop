<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class funcionarioDao extends CI_Model
	{

		function __construct()
		{

			parent::__construct();

		}

		public function inserirFuncionario()
		{



		}

		public function getFuncao()
		{

			$sql = "SELECT 
					idFuncao, 
					nomeFuncao, 
					descricaoFuncao 
					FROM funcao 
					ORDER BY nomeFuncao ASC";

			$query = $this->db->query($sql);

			if($query->num_rows() > 0)
			{

				return $query->result();

			}
			else
			{

				return false;

			}

		}

		public function getSetor()
		{

			$sql = "SELECT 
					idSetor, 
					nomeSetor, 
					descricaoSetor 
					FROM setor 
					ORDER BY nomeSetor ASC";

			$query = $this->db->query($sql);

			if($query->num_rows() > 0)
			{

				return $query->result();

			}
			else
			{

				return false;

			}

		}

	}

?>