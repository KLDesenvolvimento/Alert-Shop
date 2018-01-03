<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Produto extends CI_Controller
	{

		function __construct()
		{

			parent::__construct();

		}

		public function produto()
		{

			$dados['material'] = $this->produtoDao->getMaterial();
			$dados['grupo'] = $this->produtoDao->getGrupo();
			$dados['marca'] =$this->produtoDao->getMarca();


			if($dados)
			{

				$include = '<script type="text/javascript" src="'.base_url("assets/js/cadastro/produto/produto.js").'"></script>';
				$data['includeJs'] = $include;

				$this->load->view('cabecalho', $data);
				$this->load->view('cadastro/produto/inserir');

				return json_encode($dados);

			}
			else
			{

				return false;

			}

		}

		public function getFornecedor()
		{

			$fornecedor = $this->input->post();

			$retorno = $this->produtoDao->getFornecedor($fornecedor);

			echo json_encode($retorno);

		}

	}

?>