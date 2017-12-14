<div class="container-fluid">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<ol class="breadcrumb">
			    <li><a href="<?php echo base_url('home'); ?>">Início</a></li>
			    <li class="active">Cadastro de Produto</li>
			</ol>

			<div class="panel panel-default">
				
				<div class="panel-heading">
					Cadastro de Produto
				</div>		

				<div class="panel-body">
					
					<form action="<?php echo base_url(''); ?>" method="POST" accept-charset="utf-8">
					
						<div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
								<div class="form-group">
									<label>Código</label>
									<input type="text" name="codigo" id="codigo" class="form-control">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
								<div class="form-group">
									<label>Descrição</label>
									<input type="text" name="descricao" id="descricao" class="form-control">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
								<div class="form-group">
									<label>Grupo</label>
									<select class="form-control" name="grupo" id="grupo">
										<option value="">Selecione</option>
									</select>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
								<div class="form-group">
									<label>Marca</label>
									<select class="form-control" name="marca" id="marca">
										<option value="">Selecione</option>
									</select>
								</div>
							</div>

						</div><!--row-->
						<div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
								<div class="form-group">
									<label>Material</label>
									<select class="form-control" id="material" name="material">
										<option value="">Selecione</option>
									</select>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
								<div class="form-group">
									<label>Fornecedor PF</label>
									<select class="form-control" id="fornecedorPf" name="fornecedorPf">
										<option value="">Selecione</option>
									</select>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
								<div class="form-group">
									<label>Fornecedor PJ</label>
									<select class="form-control" id="fornecedorPj" name="fornecedorPj">
										<option value="">Selecione</option>
									</select>
								</div>
							</div>

						</div><!--row-->
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
								<div class="form-group">
									<label>Preço Compra</label>
									<input type="tel" name="prcCompra" id="prcCompra" class="form-control">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
								<div class="form-group">
									<label>Preço Venda</label>
									<input type="tel" name="prcVenda" id="prcVenda" class="form-control">
								</div>
							</div>
						</div><!--row-->
						<div class="row">
							<div class="col-xs-12 col-xs-sm-12 col-md-12 col-lg-3 col-lg-offset-4">
								<div class="btn-group btn-group-md btn-block">
									<button type="button" name="salvar" id="salvar" class="btn btn-primary btn-group-lg btn-block"><span class="glyphicon glyphicon-floppy-saved"></span> Salvar</button>
								</div>
							</div>
						</div><!--row-->

					</form>
					
					</div>
				</div>

			</div>

		</div>
	</div>

</div>