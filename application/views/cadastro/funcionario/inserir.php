
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">

			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('home'); ?>">Início</a></li>
				<li class="active">Cadastrar Funcionário</li>
			</ol>

			<div class="panel panel-default">

				<div class="panel-heading">
					Cadastrar Funcionário
				</div><!--panel-heading-->

				<div class="panel-body">
					<div class="row" style="border:1px solid #eee;padding:20px;margin:0px;border-left-width:5px;border-left-color:#1b809e;">

						<h4 style="color:#1e90ff;border-bottom:1px solid #CCCCCC;padding:5px 0px;"><span style="font-size:14px;margin-right:5px;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Dados</h4>

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
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
								<input type="email" name="email" id="email" class="form-control">
							</div>
						</div>

					</div><!--row-->
				</div>
				</div><!--panel-body-->

			</div><!--panel-->
		</div><!--col-->
	</div><!--row-->
</div><!--container-->