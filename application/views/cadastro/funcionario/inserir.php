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

					<form method="POST" name="inserirFuncionario" id="inserirFuncionario" action="<?php echo base_url('inserir-funcionario'); ?>">

					<div class="row" style="border:1px solid #eee;padding:20px;margin:0px;border-left-width:5px;border-left-color:#1b809e;">

						<h4 style="color:#1e90ff;border-bottom:1px solid #CCCCCC;padding:5px 0px;"><span style="font-size:14px;margin-right:5px;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Dados</h4>

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="form-group">

								<label>Nome Completo</label>
								<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo">

							</div><!--form-group-->
						</div><!--col-->

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">

								<label>CPF</label>
								<input type="tel" name="cpf" id="cpf" class="form-control">

							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								
								<label>Data de Nascimento</label>
								<input type="date" name="dataNascimento" id="dataNascimento" class="form-control">

							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<label>Sexo</label>
							<div class="form-group">
								<label class="radio-inline radio-block"><input type="radio" name="sexo" id="sexo" value="Masculino">Masculino</label>
								<label class="radio-inline"><input type="radio" name="sexo" id="sexo" value="Feminino">Feminino</label>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Tipo Telefone</label>
								<select name="tipoTelefone" id="tipoTelefone" class="form-control">
									<option value="">Selecione</option>
									<option value="Residencial">Residencial</option>
									<option value="Comercial">Comercial</option>
									<option value="Celular">Celular</option>
								</select>
							</div>
						</div>

					</div>
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Telefone</label>
								<input type="tel" name="telefone" id="telefone" class="form-control">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
							<div class="form-group">
								<label>E-mail</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="Ex.: kldesenvolvimento@gmail.com">
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
								<input type="tel" name="cep" id="cep" class="form-control">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-4">
							<div class="form-group">
								<label>Rua</label>
								<input type="text" name="rua" id="rua" class="form-control" placeholder="Rua, Logradouro">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Número</label>
								<input type="tel" name="numCasa" id="numCasa" class="form-control" placeholder="Nº da Casa">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Bairro</label>
								<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>Cidade</label>
								<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade">
							</div>
						</div>

						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-2">
							<div class="form-group">
								<label>UF</label>
								<select name="uf" id="uf" class="form-control">
									<option value="">Selecione</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
						</div>

					</div>		
					<div class="row">
						<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-6">
							<div class="form-group">
								<label>Complemento</label>
								<textarea name="complemento" id="complemento" class="form-control" placeholder="Ex.: Pontos de referência, Cor da casa, Andar e número do Apto, Etc."></textarea>
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
								<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de usuário">
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

									<option value="<?php echo $row->idSetor; ?>"><?php echo $row->nomeSetor; ?></option>

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

									<option value="<?php echo $row->idFuncao; ?>"><?php echo $row->nomeFuncao; ?></option>

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
							<button type="button" name="salvar" id="salvar" class="btn btn-primary btn-group-lg btn-block"><span class="glyphicon glyphicon-floppy-saved"></span> Salvar</button>
						</div>
					</div>

				</div>

			</form>

				</div><!--panel-body-->

			</div><!--panel-->
		</div><!--col-->
	</div><!--row-->
</div><!--container-->