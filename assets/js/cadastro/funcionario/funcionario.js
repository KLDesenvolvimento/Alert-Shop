$(document).ready(function(){

	var cpf = $('#cpf');
	var telefone = $("#telefone");
	var cep = $("#cep");
	var email = $("#email");

	email.on('keypress', function() {

		// var regex = new RegExp("^[a-zA-Z0-9-Zàèìòùáéíóúâêîôûãõ\b]+$");
		var regex = new RegExp("^[a-zA-Z0-9-Z@.-_\b]+$");
		var _this = this;

		// Curta pausa para esperar colar para completar
		setTimeout( function(){
			var texto = $(_this).val();
			if(!regex.test(texto))
			{
				$(_this).val(texto.substring(0, (texto.length-1)))
			}
		}, 100);

	});

	cpf.mask("000.000.000-00", {placeholder:"___.___.___-__"});
	telefone.mask("(00)0000-0000", {placeholder:"(__)____-____"});
	cep.mask("00.000-000", {placeholder:"__.___-___"});

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

	function removeCaractere($dado)
	{

		var dado = String.fromCharCode(e.which);

		alert($dado);

		if("1234567890qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM@.-_".indexOf($dado) > 0)
		{

			return false;

		}

	}


		$("#salvar").on('click', function(){

			var nome = $("#nome").val();
			var cpf = $("#cpf").val();
			var dataNascimento = $("#dataNascimento").val();
			var sexo = $("#sexo").val();
			var tipoTelefone = $("#tipoTelefone").val();
			var telefone = $("#telefone").val();
			var email = $("#email").val();
			var cep = $("#cep").val();
			var rua = $("#rua").val();
			var bairro = $("#bairro").val();
			var cidade = $("#cidade").val();
			var numCasa = $("#numCasa").val();
			var uf = $("#uf").val();
			var complemento = $("#complemento").val();
			var usuario = $("#usuario").val();
			var senha = $("#senha").val();
			var setor = $("#setor").val();
			var funcao = $("#funcao").val();
			var btnSalva = $("#salvar");
			var formInserir = $("#inserirFuncionario");

			if(nome != "" && cpf != "" && usuario != "" && senha != "")
			{

				formInserir.submit();

			}

			if(nome == "")
			{

				alert("Campo nome não pode estar vazio.");
				// return false;

			}

			if(cpf == "")
			{

				alert("Campo CPF não pode estar vazio.");
				// return false;
				
			}

			if(usuario == "")
			{

				alert("Campo usuario não pode estar vazio.");
				// return false;
				
			}

			if(senha == "")
			{

				alert("Campo senha não pode estar vazio.");
				// return false;
				
			}

			return false;
			
		});

	// function vazio(valor)
	// {

	// 	alert(valor);
	// 		return false;

	// 	if(valor == "" || valor == '' || valor == null)
	// 	{

	// 		return false;

	// 	}
	// 	else
	// 	{

	// 		return true;

	// 	}

	// }


});