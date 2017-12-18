<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('img/logo_kl.jpeg'); ?>" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mask.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/funcoes.js'); ?>"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <?php echo isset($includeJs) ? $includeJs : '' ?>
	<title>Alert Shop</title>
</head>
<body>
	
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- <a href="<?php echo base_url('home'); ?>" id="logo" name="logo" class="navbar-brand">Alert Shop</a> -->
                <a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('img/logo_kl.jpeg'); ?>" alt="logo_empresa" style="width:50px; height:40px;position:relative;float:top;top:5px" class="img-circle"></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('cadastrar-funcionario'); ?>">Funcionario</a></li>
                        <li><a href="#">Cliente</a></li>
                        <li><a href="#">Fornecedor</a></li>
                        <li><a href="<?php echo base_url('cadastrar-produto'); ?>">Produto</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulta/Relatório <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('consultar-funcionario'); ?>">Funcionario</a></li>
                        <li><a href="#">Cliente</a></li>
                        <li><a href="#">Fornecedor</a></li>
                    </ul>
                </li>
                <li><a href="#">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>">Sair</a></li>
            </ul>
        </div>
    </nav>
