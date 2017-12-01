<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mask.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <?php echo isset($includeJs) ? $includeJs : '' ?>
	<title>Alert Shop</title>
</head>
<body>
	
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo base_url('home'); ?>" id="logo" name="logo" class="navbar-brand">Alert Shop</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('cadastrar-funcionario'); ?>">Funcionario</a></li>
                        <li><a href="#">Cliente</a></li>
                        <li><a href="#">Fornecedor</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulta/Relatório <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Funcionario</a></li>
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
