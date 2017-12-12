<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class loginDao extends CI_Model
	{

		public function __construct()
		{

			parent::__construct();

		}

		public function getLogin($dados)
		{

			if(!empty($dados))
			{

				$sql = " SELECT usuario, senha 
				FROM funcionario 
				WHERE usuario = ? 
				AND senha = ? ";

				$query = $this->db->query($sql, array(
					$dados['usuario'], 
					MD5($dados['senha'])));

				// echo "<pre>";
				// var_dump($this->db);
				// die();

				if($query->num_rows() > 0)
				{

					return $query->row();
					// return true;

				}
				else
				{

					return false;

				}

				return false;

			}

		}

	}

?>