$(document).ready(function(){

	var cpf = $('#cpf');
	var telefone = $("#telefone");

	cpf.mask("000.000.000-00", {placeholder:"___.___.___-__"});
	telefone.mask("(00)0000-0000", {placeholder:"(__)____-____"});

	telefone.on('focus', function(){

	var tipoTelefone = $("#tipoTelefone").val();

		if(tipoTelefone == 'Celular')
		{

			telefone.mask("(00)00000-0000", {placeholder:"(__)_____-____"});
			
		}
		else
		{

			telefone.mask("(00)0000-0000", {placeholder:"(__)____-____"});

		}

	});


});