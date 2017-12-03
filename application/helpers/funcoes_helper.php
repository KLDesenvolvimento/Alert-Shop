<?php

	defined('BASEPATH') OR exit('No script direct access allowed');

	function pegaIdFuncionario($cpf)
	{

		$retorno = $this->funcoesDao->getIdFuncionario($cpf);

		if($retorno)
		{

			return $retorno;

		}
		else
		{

			return false;

		}

	}

?>