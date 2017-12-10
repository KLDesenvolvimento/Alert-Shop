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
				$dados['nome'] != "" ? trim($dados['nome']) : "Sem Nome", 
				$dados['cpf'] != "" ? $dados['cpf'] : "000.000.000-00", 
				$dados['usuario'] != "" ? trim($dados['usuario']) : "", 
				$dados['senha'] != "" ? trim(MD5($dados['senha'])) : "", 
				$dados['dataNascimento'] != "" ? $dados['dataNascimento'] : date('d/m/Y'), 
				$dados['setor'] != "" ? $dados['setor'] : 0, 
				$dados['funcao'] != "" ? $dados['funcao'] : 0, 
				$dados['sexo'] != "" ? trim($dados['sexo']) : "",
				$dados['email'] != "" ? trim($dados['email']) : ""
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
				$dados['cep'] != "" ? trim($dados['cep']) : "00.000-000", 
				$dados['rua'] != "" ? trim($dados['rua']) : "", 
				$dados['numCasa'] != "" ? trim($dados['numCasa']) : "", 
				$dados['bairro'] != "" ? trim($dados['bairro']) : "", 
				$dados['cidade'] != "" ? trim($dados['cidade']) : "", 
				$dados['complemento'] != "" ? trim($dados['complemento']) : "", 
				$dados['uf'] != "" ? trim($dados['uf']) : "PE", 
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

		public function getFuncionario()
		{

			$sql = "SELECT 
					f.nomeFuncionario, 
					f.cpfFuncionario, 
					f.usuario, 
					f.dataNascimento, 
					funcao.nomeFuncao, 
					setor.nomeSetor 
					FROM 
					funcionario AS f 
					INNER JOIN 
					funcao 
					ON 
					f.fkFuncao = funcao.idFuncao 
					INNER JOIN 
					setor 
					ON f.fkSetor = setor.idSetor";

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

		public function alterarFuncionario($dados)
		{

			// var_dump($dados);
			// die();

			if($dados != "")
			{

				$sql = "SELECT 
					f.nomeFuncionario, 
					f.cpfFuncionario, 
					f.usuario, 
					f.senha,
					f.emailFuncionario, 
					f.dataNascimento, 
					f.sexoFuncionario, 
					f.dataNascimento, 
					funcao.nomeFuncao, 
					setor.nomeSetor, 
					ef.cep, 
					ef.rua, 
					ef.bairro, 
					ef.cidade, 
					ef.complemento, 
					ef.uf, 
					ef.numeroCasa, 
					tf.tipoTelefone, 
					tf.numeroTelefone  
					FROM 
					funcionario AS f 
					INNER JOIN 
					funcao 
					ON 
					f.fkFuncao = funcao.idFuncao 
					AND f.cpfFuncionario = ?
					INNER JOIN 
					setor 
					ON f.fkSetor = setor.idSetor 
					INNER JOIN enderecoFuncionario AS ef
					ON ef.fkFuncionario = f.idFuncionario 
					INNER JOIN telefoneFuncionario AS tf 
					ON tf.fkFuncionario = f.idFuncionario";

				$query = $this->db->query($sql, array($dados['btnEditar']));

				// echo "<pre>";
				// var_dump($this->db);
				// die();

				if($query->num_rows() > 0)
				{

					return $query->result();

				}
				else
				{

					return false;

				}

			}

			return false;

		}

		public function updateFuncionario($dados)
		{

			// echo "<pre>";
			// var_dump($dados);
			// die();

			if($dados != '')
			{

				$sqlFunc = " UPDATE 
							funcionario 
							SET 
							nomeFuncionario = ?, 
							cpfFuncionario = ?, 
							usuario = ?, 
							senha = ?, 
							dataNascimento = ?, 
							fkSetor = ?, 
							fkFuncao = ?, 
							sexoFuncionario = ?, 
							emailFuncionario = ? 
							WHERE 
							cpfFuncionario = ?";

				$queryFunc = $this->db->query($sqlFunc, array(
					$dados['nome'], 
					$dados['cpf'], 
					$dados['usuario'], 
					$dados['senha'], 
					$dados['dataNascimento'], 
					$dados['setor'], 
					$dados['funcao'], 
					$dados['sexo'], 
					$dados['email'], 
					$dados['cpfAntigo']));

				$sqlTel = " UPDATE 
							telefoneFuncionario 
							SET 
							tipoTelefone =?, 
							numeroTelefone = ? 
							WHERE 
							numeroTelefone = ?";

				$queryTel = $this->db->query($sqlTel, array(
					$dados['tipoTelefone'], 
					$dados['telefone'], 
					$dados['telefoneAntigo']));

				$sqlEnd = " UPDATE 
							enderecoFuncionario 
							SET 
							cep = ?, 
							rua = ?, 
							bairro = ?, 
							cidade = ?, 
							uf = ?, 
							numeroCasa = ?, 
							complemento = ? 
							WHERE 
							cep = ?";

				$queryEnd = $this->db->query($sqlEnd, array(
					$dados['cep'], 
					$dados['rua'], 
					$dados['bairro'], 
					$dados['cidade'], 
					$dados['uf'], 
					$dados['numCasa'], 
					$dados['complemento'], 
					$dados['cepAntigo']));

				// echo "<pre>";
				// var_dump($query);
				// die();

				if($queryFunc && $queryTel && $queryEnd)
				{

					return true;

				}
				else
				{

					return false;

				}

			}
			else
			{

				return false;

			}

		}

	}//fim da class

?>