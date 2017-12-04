<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class funcionarioDao extends CI_Model
	{

		function __construct()
		{

			parent::__construct();

		}

		public function inserirFuncionario($dados)
		{

			$sqlFunc = "INSERT INTO 
					funcionario 
					(nomeFuncionario, 
					cpfFuncionario, 
					usuario, 
					senha, 
					dataNascimento, 
					fkSetor, 
					fkFuncao, 
					sexoFuncionario, 
					emailFuncionario) 
					VALUES 
					(?,?,?,?,?,?,?,?,?)";

			$queryFunc = $this->db->query($sqlFunc, array(
				$dados['nome'] != "" ? trim($dados['nome']) : NULL, 
				$dados['cpf'] != "" ? $dados['cpf'] : NULL, 
				trim($dados['usuario']), 
				trim(MD5($dados['senha'])), 
				$dados['dataNascimento'], 
				$dados['setor'], 
				$dados['funcao'], 
				trim($dados['sexo']),
				trim($dados['email'])
			));

			// $id = pegaIdFuncionario($dados['cpf']);

			$sqlIdFunc = "SELECT 
			idFuncionario 
			FROM 
			funcionario 
			WHERE 
			cpfFuncionario = ?";

			$queryIdFunc = $this->db->query($sqlIdFunc, array($dados['cpf']));

			if($queryIdFunc)
			{

				$id = $queryIdFunc->row();

			}
			else
			{

				return false;

			}

			// echo "<pre>";
			// var_dump($id->idFuncionario);
			// die();


			$sqlTel = "INSERT INTO 
					telefoneFuncionario 
					(TipoTelefone, 
				    numeroTelefone, 
				    fkFuncionario) 
					VALUES 
					(?,?,?)";

			$queryTel = $this->db->query($sqlTel, array(
				trim($dados['tipoTelefone']), 
				trim($dados['telefone']), 
				$id->idFuncionario
			));

			$sqlEnd = "INSERT INTO 
					enderecoFuncionario 
					(cep, 
				    rua, 
				    numeroCasa, 
				    bairro, 
				    cidade, 
				    complemento, 
				    uf, 
				    fkFuncionario)
					VALUES 
					(?,?,?,?,?,?,?,?)";

			$queryEnd = $this->db->query($sqlEnd, array(
				trim($dados['cep']), 
				trim($dados['rua']), 
				trim($dados['numCasa']), 
				trim($dados['bairro']), 
				trim($dados['cidade']), 
				$dados['complemento'] != "" ? trim($dados['complemento']) : NULL, 
				trim($dados['uf']), 
				$id->idFuncionario));

			if(($queryFunc) && ($queryEnd) && ($queryTel))
			{

				return true;

			}
			else
			{

				return false;

			}

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