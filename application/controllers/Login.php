<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();

		}

		public function login()
		{

			$this->load->view('login');

		}

		public function logar()
		{

			$dados['funcionario'] = $this->input->post();

			// var_dump($dados['funcionario']);
			// die();

			if(!empty($dados['funcionario']))
			{

				$retorno = $this->loginDao->getLogin($dados['funcionario']);

				// var_dump($retorno);
				// die();

				if($retorno)
				{

					$include = '<script type="text/javascript" src="'.base_url().'assets/js/home.js"></script>';
					$data['includeJs'] = $include;

					$this->load->view('cabecalho');
					$this->load->view('home', $data);

				}
				else
				{

					$this->load->view('mensagem');

				}

			}//fim if login

		}//fim da função logar

		public function home()
		{

			$this->load->view('cabecalho');
			$this->load->view('home');

		}

	}

?>