$(document).ready(function(){

	// var btnEntrar = $('#entrar');

	// alert(usuario, senha);

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