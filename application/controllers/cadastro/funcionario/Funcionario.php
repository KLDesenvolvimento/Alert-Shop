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

			// getFuncao($retorno);

			$retorno['funcao'] = $this->funcionarioDao->getFuncao();

			$retorno['setor'] = $this->funcionarioDao->getSetor();

			if($retorno)
			{

				$include = '<script type="text/javascript" src="'.base_url("assets/js/cadastro/funcionario/funcionario.js").'"></script>';
				$data['includeJs'] = $include;

				$this->load->view('cabecalho', $data);
				$this->load->view('cadastro/funcionario/inserir.php', $retorno);

			}
			else
			{

				return false;

			}

		}

		public function excluirFuncionario()
		{

			$data['funcionario'] = $this->input->post();

			// echo "<pre>";
			// var_dump($data);
			// die();

			$retorno['idFuncionario'] = $this->funcionarioDao->getIdFuncionario($data['funcionario']);

			$retorno['funcionario'] = $this->funcionarioDao->removerFuncionario($retorno['idFuncionario']);

			if($retorno)
			{

				$msg['resposta'] = "Funcionário excluído com sucesso.";

				$this->load->view('cabecalho');
				$this->load->view('cadastro/funcionario/mensagem', $msg);

			}
			else
			{

				return false;

			}

		}

		public function editarFuncionario()
		{

			$data['funcionario'] = $this->input->post();

			// echo "<pre>";
			// var_dump($data);
			// die();

			$retorno['funcao'] = $this->funcionarioDao->getFuncao();
			$retorno['setor'] = $this->funcionarioDao->getSetor();
			$retorno['funcionario'] = $this->funcionarioDao->alterarFuncionario($data['funcionario']);

			// var_dump($retorno['funcionario']);
			// die();

			if($retorno)
			{

				$include = '<script type="text/javascript" src="'.base_url("assets/js/cadastro/funcionario/funcionario.js").'"></script>';
				$data['includeJs'] = $include;

				$this->load->view('cabecalho', $data);
				$this->load->view('cadastro/funcionario/editar', $retorno);

			}

		}

		public function inserirFuncionario()
		{

			$dados['funcionario'] = $this->input->post();

			$retorno = $this->funcionarioDao->inserirFUncionario($dados['funcionario']);

			if($retorno)
			{

				// $include = '<script type="text/javascript" src="'.base_url("assets/js/cadastro/funcionario/funcionario.js").'"></script>';
				// $data['includeJs'] = $include;

				$msg['resposta'] = "Funcionário cadastrado com sucesso.";

				$this->load->view('cabecalho');
				$this->load->view('cadastro/funcionario/mensagem', $msg);

			}
			else
			{

				$msg['resposta'] = "Falha ao cadastrar funcionário.";
				$this->load->view('cabecalho');
				$this->load->view('cadastro/funcionario/mensagem', $msg);

			}

		}

		public function updateFuncionario()
		{

			$data['funcionario'] = $this->input->post();

			$retorno = $this->funcionarioDao->updateFuncionario($data['funcionario']);

			if($retorno)
			{

				$msg['resposta'] = "Funcionário alterado com sucesso.";

				$this->load->view('cabecalho');
				$this->load->view('cadastro/funcionario/mensagem', $msg);

			}
			else
			{

				return false;

			}

		}

		// public function getFuncao()
		// {

		// 	$retorno['funcao'] = $this->funcionarioDao->getFuncao();

		// 	if($retorno)
		// 	{

		// 		return $retorno;

		// 	}
		// 	else
		// 	{

		// 		return false;

		// 	}

		// }

		// public function getSetor()
		// {



		// }

	}

?>