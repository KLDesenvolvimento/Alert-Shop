<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Funcionario extends CI_Controller
	{

		function __construct()
		{

			parent::__construct();

		}

		public function funcionario()
		{

			$include = '<script type="text/javascript" src="'.base_url("assets/js/cadastro/funcionario/funcionario.js").'"></script>';
			$data['includeJs'] = $include;

			$this->load->view('cabecalho', $data);
			$this->load->view('cadastro/funcionario/inserir');

		}

	}

?>