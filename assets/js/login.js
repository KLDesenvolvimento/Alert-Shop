$(document).ready(function(){

	// var btnEntrar = $('#entrar');

	// alert(usuario, senha);

	$("#usuario").focus();

	//logar ao apertar enter no campo senha
	$("#senha").on('keypress', function(e){

		if(e.which == 13)
		{

			$("#login").submit();

		}

	});

	// logar ao clicar no botao
	$('#entrar').on('click', function(){

		if($('#usuario').val() != '' && $('#senha').val() != '')
		{

			$('#login').submit();

		}
		else
		{

			alert('Usuario e Senha devem ser preenchidos.');

		}

	});

});