<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 style="text-align: center; font-size: 25px; color: black; font-family: arial;">Mensagem</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h4 style="text-align: center; font-size: 30px; font-family: arial; color: black;"><?php echo $resposta; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="form-group" style="text-align: center;">
								<a href="<?php echo base_url('home'); ?>"><button id="home" class="btn btn-default">Home</button></a>
								<a href="<?php echo base_url('consultar-funcionario'); ?>"><button id="consultarFuncionario" name="consultarFuncionario" class="btn btn-primary">Relatório</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>				