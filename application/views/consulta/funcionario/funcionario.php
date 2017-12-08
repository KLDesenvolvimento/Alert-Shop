<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('home'); ?>">Início</a></li>
				<li class="active">Consulta Funcionario</li>
			</ol>

			<div class="panel panel-default">
				<div class="panel-heading">
					Consulta Funcionario
				</div>
				<div class="panel-body">

					<form id="formAlterarFuncionario" method="POST" action="<?php echo base_url('editar-funcionario'); ?>">
					
						<table id="tableFuncionario" name="tableFuncionario" class="table table-striped table-bordered table-condensed">
							<!-- <caption>Funcionários</caption> -->
							<thead>
								<tr>
									<th style="text-align: center;">Nome</th>
									<th style="text-align: center;">CPF</th>
									<th style="text-align: center;">Usuário</th>
									<th style="text-align: center;">Data de Nascimento</th>
									<th style="text-align: center;">Setor</th>
									<th style="text-align: center;">Função</th>
									<th style="text-align: center;">Editar</th>
									<th style="text-align: center;">Remover</th>
								</tr>
							</thead>
							<tbody>
								
								<?php foreach($funcionario as $row){ ?>

								<tr>
									<td style="text-align: center;"><?php echo $row->nomeFuncionario ?></td>
									<td style="text-align: center;"><?php echo $row->cpfFuncionario ?></td>
									<td style="text-align: center;"><?php echo $row->usuario ?></td>
									<td style="text-align: center;"><?php echo $row->dataNascimento ?></td>
									<td style="text-align: center;"><?php echo $row->nomeSetor ?></td>
									<td style="text-align: center;"><?php echo $row->nomeFuncao ?></td>
									<td style="text-align: center;"><button type="button" class="btn btn-primary" id="btnEditar" name="btnEditar" value="<?php echo $row->cpfFuncionario ?>">Editar</button></td>
									<td style="text-align: center;"><button type="button" class="btn btn-primary" id="btnRemover" name="btnRemover" value="<?php echo $row->cpfFuncionario ?>">Remover</button></td>
								</tr>

								<?php } ?>

							</tbody>
						</table>		

					</form>		

				</div>
			</div>
		</div>
	</div>			
</div>