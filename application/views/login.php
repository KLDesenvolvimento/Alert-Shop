<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=width-device, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/login.js'); ?>"></script>
	<title>Alert Shop</title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					
					<div class="panel panel-heading" style="text-align:center;">
						Login
					</div>

					<div class="panel-body">
						
						<form method="POST" action="<?php echo base_url('entrar'); ?>" name="login" id="login">
							
	 					<div class="row">
	 						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4">
	 							<div class="form-group">
	 								<label>Usuario</label>
	 								<input type="text" name="usuario" id="usuario" placeholder="Digite seu usuario" class="form-control">
	 							</div>
	 						</div>
	 					</div>

	 					<div class="row">
	 						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4">
	 							<div class="form-group">
	 								<label>Senha</label>
	 								<input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="form-control">
	 							</div>
	 						</div>
	 					</div>

	 					<div class="row">
	 						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-4">
	 							<div class="form-group">
	 								<button type="button" name="entrar" id="entrar" class="btn btn-primary">Entrar</button>
	 							</div>
	 						</div>
	 					</div>

						</form>

					</div>

				</div>
			</div>
		</div>
	</div>																										

</body>
</html>