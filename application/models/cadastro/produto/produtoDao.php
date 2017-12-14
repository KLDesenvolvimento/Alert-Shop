<?php

	defined('BASEPATH') OR exit('No direct script access allowed.');

	class produtoDao extends CI_Model
	{

		function __construct()
		{

			parent::__construct();

		}

		public function getMarca()
		{

			$sql = "SELECT 
					idMarca, 
					nomeMarca 
					FROM 
					marca 
					ORDER BY 
					nomeMarca 
					ASC";

			$query = $this->db->query($sql);

			if($query)
			{

				return $query->result();

			}
			else
			{

				return false;

			}

		}//fim getMarca

		public function getGrupo()
		{

			$sql = "SELECT 
					idGrupo, 
					nomeGrupo 
					FROM 
					grupoProduto 
					ORDER BY 
					nomeGrupo 
					ASC";

			$query = $this->db->query($sql);

			if($query)
			{

				return $query->result();

			}
			else
			{

				return false;

			}

		}//fim getGrupo

		public function getMaterial()
		{

			$sql = "SELECT 
					idMaterial, 
					nomeMaterial 
					FROM 
					material 
					ORDER BY 
					nomeMaterial 
					ASC";

			$query = $this->db->query($sql);

			if($query)
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