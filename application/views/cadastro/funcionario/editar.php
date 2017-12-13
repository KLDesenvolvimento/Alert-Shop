<?php

	$funcionario = $funcionario[0];

	$nome = isset($funcionario->nomeFuncionario) ? $funcionario->nomeFuncionario : '';
	$cpf = isset($funcionario->cpfFuncionario) ? $funcionario->cpfFuncionario : '';
	$cpfAntigo = isset($funcionario->cpfFuncionario) ? $funcionario->cpfFuncionario : '';
	$usuario = isset($funcionario->usuario) ? $funcionario->usuario : '';
	$email = isset($funcionario->emailFuncionario) ? $funcionario->emailFuncionario : '';
	$dataNascimento = isset($funcionario->dataNascimento) ? $funcionario->dataNascimento : '';
	$sexo = isset($funcionario->sexoFuncionario) ? $funcionario->sexoFuncionario : '';
	$funcaoFunc = isset($funcionario->nomeFuncao) ? $funcionario->nomeFuncao : '';
	$setorFunc = isset($funcionario->nomeSetor) ? $funcionario->nomeSetor : '';
	$cep = isset($funcionario->cep) ? $funcionario->cep : '';
	$rua = isset($funcionario->rua) ? $funcionario->rua : '';
	$bairro = isset($funcionario->bairro) ? $funcionario->bairro : '';
	$cidade = isset($funcionario->cidade) ? $funcionario->cidade : '';
	$uf = isset($funcionario->uf) ? $funcionario->uf : '';
	$complemento = isset($funcionario->complemento) ? $funcionario->complemento : '';
	$numeroCasa = isset($funcionario->numeroCasa) ? $funcionario->numeroCasa : '';
	$tipoTelefone = isset($funcionario->tipoTelefone) ? $funcionario->tipoTelefone : '';
	$telefone = isset($funcionario->numeroTelefone) ? $funcionario->numeroTelefone : '';

	// echo "<pre>";
	// var_dump($funcionario);
	// die();

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">

			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('home'); ?>">Início</a></li>
				<li class="active">Cadastro Funcionário</li>
			</ol>

			<div class="panel panel-default">

				<div class="panel-heading">
					<h5 style="font-size:20px">Cadastrar Funcionário</h5>
				</div><!--panel-heading-->

				<div class="panel-body">

					<form method="POST" name="alterarFuncionario" id="alterarFuncionario" action="<?php echo base_url('alterar-funcionario'); ?>">

					<input type="hidden" name="cpfAntigo" id="cpfAntigo" value="<?php echo isset($cpfAntigo) ? $cpfAntigo : '' ?>">
					<input type="hidden" name="telefoneAntigo" id="telefoneAntigo" value="<?php echo isset($telefone) ? $telefone : '' ?>">
					<input type="hidden" name="cepAntigo" id="cepAntigo" value="<?php echo isset($cep) ? $cep : '' ?>">

					<div class="row" style="border:1px solid #eee;padding:20px;margin:0px;border-left-width:5px;border-left-color:#1b809e;">

						<h4 style="color:#1e90ff;border-bottom:1px solid #CCCCCC;padding:5px 0px;"><span style="font-size:14px;margin-right:5px;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Dados</h4>

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="form-group">

								<label>Nome Completo</label>
								<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo" value="<?php echo isset($nome) ? $nome : '' ?>">

							</div><!--form-group-->
						</div><!--col-->

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">

								<label>CPF</label>
								<input type="tel" name="cpf" id="cpf" class="form-control" value="<?php echo isset($cpf) ? $cpf : '' ?>">

							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								
								<label>Data de Nascimento</label>
								<input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="<?php echo isset($dataNascimento) ? $dataNascimento : '' ?>">

							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<label>Sexo</label>
							<div class="form-group">
								<label class="radio-inline radio-block"><input type="radio" name="sexo" id="sexo" value="Masculino" <?php echo isset($sexo) && $sexo == 'Masculino' ? 'checked="checked"' : '' ?>>Masculino</label>
								<label class="radio-inline"><input type="radio" name="sexo" id="sexo" value="Feminino" <?php echo isset($sexo) && $sexo == 'Feminino' ? 'checked="checked"' : '' ?>>Feminino</label>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Tipo Telefone</label>
								<select name="tipoTelefone" id="tipoTelefone" class="form-control">
									<option value="">Selecione</option>
									<option value="Residencial" <?php echo isset($tipoTelefone) && $tipoTelefone == 'Residencial' ? 'selected="selected"' : '' ?>>Residencial</option>
									<option value="Comercial" <?php echo isset($tipoTelefone) && $tipoTelefone == 'Comercial' ? 'selected="selected"' : '' ?>>Comercial</option>
									<option value="Celular" <?php echo isset($tipoTelefone) && $tipoTelefone == 'Celular' ? 'selected="selected"' : '' ?>>Celular</option>
								</select>
							</div>
						</div>

					</div>
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Telefone</label>
								<input type="tel" name="telefone" id="telefone" class="form-control" value="<?php echo isset($telefone) ? $telefone : '' ?>">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="form-group">
								<label>E-mail</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="Ex.: kldesenvolvimento@gmail.com" value="<?php echo isset($email) ? $email : '' ?>">
							</div>
						</div>

					</div><!--row-->
				</div>
				<br>
				<div class="row" style="border:1px solid #eee;padding:20px;margin:0px;border-left-width:5px;border-left-color:#1b809e;">

					<h4 style="color:#1e90ff;border-bottom:1px solid #CCCCCC;padding:5px 0px;"><span style="font-size:14px;margin-right:5px;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Endereço</h4>

					<div class="row">

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>CEP</label>
								<input type="tel" name="cep" id="cep" class="form-control" value="<?php echo isset($cep) ? $cep : '' ?>">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-4">
							<div class="form-group">
								<label>Rua</label>
								<input type="text" name="rua" id="rua" class="form-control" placeholder="Rua, Logradouro" value="<?php echo isset($rua) ? $rua : '' ?>">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Número</label>
								<input type="tel" name="numCasa" id="numCasa" class="form-control" placeholder="Nº da Casa" value="<?php echo isset($numeroCasa) ? $numeroCasa : '' ?>">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Bairro</label>
								<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" value="<?php echo isset($bairro) ? $bairro : '' ?>">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Cidade</label>
								<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" value="<?php echo isset($cidade) ? $cidade : '' ?>">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>UF</label>
								<select name="uf" id="uf" class="form-control">
									<option value="">Selecione</option>
									<option value="AC" <?php echo isset($uf) && $uf == 'AC' ? 'selected="selected"' : '' ?>>Acre</option>
									<option value="AL" <?php echo isset($uf) && $uf == 'AL' ? 'selected="selected"' : '' ?>>Alagoas</option>
									<option value="AP" <?php echo isset($uf) && $uf == 'AP' ? 'selected="selected"' : '' ?>>Amapá</option>
									<option value="AM" <?php echo isset($uf) && $uf == 'AM' ? 'selected="selected"' : '' ?>>Amazonas</option>
									<option value="BA" <?php echo isset($uf) && $uf == 'BA' ? 'selected="selected"' : '' ?>>Bahia</option>
									<option value="CE" <?php echo isset($uf) && $uf == 'CE' ? 'selected="selected"' : '' ?>>Ceará</option>
									<option value="DF" <?php echo isset($uf) && $uf == 'DF' ? 'selected="selected"' : '' ?>>Distrito Federal</option>
									<option value="ES" <?php echo isset($uf) && $uf == 'ES' ? 'selected="selected"' : '' ?>>Espírito Santo</option>
									<option value="GO" <?php echo isset($uf) && $uf == 'GO' ? 'selected="selected"' : '' ?>>Goiás</option>
									<option value="MA" <?php echo isset($uf) && $uf == 'MA' ? 'selected="selected"' : '' ?>>Maranhão</option>
									<option value="MT" <?php echo isset($uf) && $uf == 'MT' ? 'selected="selected"' : '' ?>>Mato Grosso</option>
									<option value="MS" <?php echo isset($uf) && $uf == 'MS' ? 'selected="selected"' : '' ?>>Mato Grosso do Sul</option>
									<option value="MG" <?php echo isset($uf) && $uf == 'MG' ? 'selected="selected"' : '' ?>>Minas Gerais</option>
									<option value="PA" <?php echo isset($uf) && $uf == 'PA' ? 'selected="selected"' : '' ?>>Pará</option>
									<option value="PB" <?php echo isset($uf) && $uf == 'PB' ? 'selected="selected"' : '' ?>>Paraíba</option>
									<option value="PR" <?php echo isset($uf) && $uf == 'PR' ? 'selected="selected"' : '' ?>>Paraná</option>
									<option value="PE" <?php echo isset($uf) && $uf == 'PE' ? 'selected="selected"' : '' ?>>Pernambuco</option>
									<option value="PI" <?php echo isset($uf) && $uf == 'PI' ? 'selected="selected"' : '' ?>>Piauí</option>
									<option value="RJ" <?php echo isset($uf) && $uf == 'RJ' ? 'selected="selected"' : '' ?>>Rio de Janeiro</option>
									<option value="RN" <?php echo isset($uf) && $uf == 'RN' ? 'selected="selected"' : '' ?>>Rio Grande do Norte</option>
									<option value="RS" <?php echo isset($uf) && $uf == 'RS' ? 'selected="selected"' : '' ?>>Rio Grande do Sul</option>
									<option value="RO" <?php echo isset($uf) && $uf == 'RO' ? 'selected="selected"' : '' ?>>Rondônia</option>
									<option value="RR" <?php echo isset($uf) && $uf == 'RR' ? 'selected="selected"' : '' ?>>Roraima</option>
									<option value="SC" <?php echo isset($uf) && $uf == 'SC' ? 'selected="selected"' : '' ?>>Santa Catarina</option>
									<option value="SP" <?php echo isset($uf) && $uf == 'SP' ? 'selected="selected"' : '' ?>>São Paulo</option>
									<option value="SE" <?php echo isset($uf) && $uf == 'SE' ? 'selected="selected"' : '' ?>>Sergipe</option>
									<option value="TO" <?php echo isset($uf) && $uf == 'TO' ? 'selected="selected"' : '' ?>>Tocantins</option>
								</select>
							</div>
						</div>

					</div>		
					<div class="row">
						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-6">
							<div class="form-group">
								<label>Complemento</label>
								<textarea name="complemento" id="complemento" class="form-control" placeholder="Ex.: Pontos de referência, Cor da casa, Andar e número do Apto, Etc."><?php echo isset($complemento) ? $complemento : '' ?></textarea>
							</div>
						</div>
					</div>
				</div>

				<br>

				<div class="row" style="border:1px solid #eee;padding:20px;margin:0px;border-left-width:5px;border-left-color:#1b809e;">

					<h4 style="color:#1e90ff;border-bottom:1px solid #CCCCCC;padding:5px 0px;"><span style="font-size:14px;margin-right:5px;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Funções</h4>

					<div class="row">

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-3">
							<div class="form-group">
								<label>Usuario</label>
								<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de usuário" value="<?php echo isset($usuario) ? $usuario : '' ?>">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-3">
							<div class="form-group">
								<label>Senha</label>
								<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Setor</label>
								<select name="setor" id="setor" class="form-control">
									<option value="">Selecione</option>

									<?php foreach($setor as $row){ ?>

									<option value="<?php echo $row->idSetor; ?>" <?php echo isset($setorFunc) && $row->nomeSetor == $setorFunc ? 'selected="selected"' : '' ?>><?php echo $row->nomeSetor; ?></option>

									<?php } ?>

								</select>
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Função</label>
								<select name="funcao" id="funcao" class="form-control">
									<option value="">Selecione</option>

									<?php foreach($funcao as $row){ ?>

									<option value="<?php echo $row->idFuncao; ?>" <?php echo isset($funcaoFunc) && $row->nomeFuncao == $funcaoFunc ? 'selected="selected"' : '' ?>><?php echo $row->nomeFuncao; ?></option>

									<?php } ?>

								</select>
							</div>
						</div>

					</div><!--row-->

				</div><!--row-->

				<br>

				<div class="row">

					<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-3 col-lg-offset-5">
						<div class="btn-group btn-group-md btn-block">
							<button type="button" name="salvarAlteracao" id="salvarAlteracao" class="btn btn-primary btn-group-lg btn-block"><span class="glyphicon glyphicon-floppy-saved"></span> Salvar</button>
						</div>
					</div>

				</div>

			</form>

				</div><!--panel-body-->

			</div><!--panel-->
		</div><!--col-->
	</div><!--row-->
</div><!--container-->

<div class="modal fade" tabindex="-1" role="dialog" id="alerta">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" style="text-align: center; color: red;">Alerta!</h4>
			</div>
			<div class="modal-body" style="text-align: center;">
				<label id="mensagem" name="mensagem"></label>
			</div>
			<div class="modal-footer" style="text-align: center;">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>